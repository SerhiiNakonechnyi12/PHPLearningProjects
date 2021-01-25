<?php
class Tools
{
    static function connect(
        $host = "localhost:3306",
        $dbname = "storeDb", //shopDb в примерах
        $user = "root",
        $pass = "root"
    ) {
        $cs = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8";
        $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
        );
        try {
            $pdo = new PDO($cs, $user, $pass, $option);
            return $pdo;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    static function register($login, $pass, $imagepath){
        $customer = new Customer($login, $pass, $imagepath);
        $err = $customer->intoDb();
        if($err){
            if ($err == 1062) {
                echo "<h3/><span style='color: red'>Пользователь c таким логином уже существует</span><h3/>";
            } else {
                echo "<h3/><span style='color: red'>Ошибка: " . $err . "</span><h3/>";
            }
            return false;
        }
        return true;
    }
}
/*
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    login varchar(32) Not null UNIQUE,
    pass varchar(128),
    roleid int,
    FOREIGN KEY(roleid) REFERENCES Roles(id) ON UPDATE CASCADE,
    imagepath varchar(256),
    discount int DEFAULT 0,
    total double
*/
class Customer
{
    public $id;
    public $login;
    public $pass;
    public $roleid;
    public $imagepath;
    public $discount;
    public $total;

    function __construct($login, $pass, $imagepath, $id = 0)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->imagepath = $imagepath;
        $this->id = $id;
        $this->roleid = 3;
        $this->discount = 0;
        $this->total = 0;
    }

    function __toString()
    {
        return "Id: " . $this->id . ", login: " . $this->login . ", password: " . $this->pass . ", Path: " . $this->imagepath;
    }
    //array(6) { ["login"]=> string(6) "Serhii" ["pass"]=> string(4) "1111" ["roleid"]=> int(3) ["imagepath"]=> string(17) "images/photo1.png" ["discount"]=> int(0) ["total"]=> int(0) }
    function intoDb()
    {
        try {
            $pdo = Tools::connect();
            $arr = (array)$this;
            // echo "Массив до смещения: <br>";
            // var_dump($arr);
            // echo "<br>Массив после смещения: <br>";
            array_shift($arr);
            //$arr["pass"] = md5($arr["pass"]);
            // var_dump($arr);
            $ps = $pdo->prepare("INSERT INTO Customers(login, pass, roleid, imagepath, discount, total) VALUES(:login, :pass, :roleid, :imagepath, :discount, :total)");
            $ps->execute($arr);
            $this->id = $pdo->lastInsertId();
            //return "Пользователь успешно добавлен в БД!";
            // echo "Пользователь успешно добавлен в БД! <br>";
            // echo $this;
        } catch (PDOException $ex) {
            $err = $ex->getMessage();
            echo "Exception: " . $err . "<br>";
            if (substr($err, 0, strpos($err, ":")) == "SQLSTATE[23000]")
                return 1062;
            else
                return $err;
        }
    }

    static function FromDb($id)
    {
        $customer = null;
        try {
            $pdo = Tools::connect();
            $ps = $pdo->prepare("SELECT * FROM Customers WHERE id=?");
            $ps->execute(array($id));
            $row = $ps->fetch();
            $customer = new Customer($row["login"], $row["pass"], $row["imagepath"], $row["id"]);
            $customer->total = $row["total"];
            $customer->discount = $row["discount"];
            $customer->roleid = $row["roleid"];
            return $customer;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}

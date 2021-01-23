<?php

class Tools{
    static function connect(
        $host="localhost:3306",
        $dbname="storeDb",
        $user = "root",
        $pass = "root"){
            $cs = "mysql:host=". $host. ";dbname=". $dbname . ";charset=utf8";
            $option = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES 'UTF8'");
            try{
                $pdo = new PDO($cs, $user, $pass, $option);
                return $pdo;
            }
            catch(PDOException $ex){
                echo $ex->getMessage();
                return false;
            }
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

class Customer{
    public $id;
    public $login;
    public $pass;
    public $roleid;
    public $imagepath;
    public $discount;
    public $total;

    function __construct($login, $pass, $imagepath, $id=0)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->imagepath = $imagepath;
        $this->roleid = 3;
        $this->discount = 0;
        $this->total = 0;
    }

    function __toString()
    {
        return "Id: " .$this->id. ", login: ". $this->login . ", password: " .$this->pass . ", Path: " .$this->imagepath.;
    }

    function intoDb(){
        try {
            $pdo = Tools::connect();
            $arr = (array)$this;
            echo "Массив до смещения: <br>";
            var_dump($arr);
            echo "<br>Массив после смещения: <br>";
            array_shift($arr);
            var_dump($arr);
        } catch (PDOException $ex) {
            $err = $ex->getMessage();
            if(substr($err, 0, strpos($err, ":"))=="SQLSTATE[2300]")
            return 1062;
            else
            return $err;
        }
    }
}
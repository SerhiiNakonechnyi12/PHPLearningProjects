<?php
//print_r(PDO::getAvailableDrivers());
function connect($host="localhost:3306", $dbname="traveldb", $user="root", $passw="root"){
    $cs = "mysql:host=". $host . ";dbname=". $dbname .";charset=utf8";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"
);
try{
    $pdo = new PDO($cs, $user, $passw, $options);
    return $pdo;
}
catch(PDOException $ex){
    echo $ex->getMessage();
    return false;
}
}

$link = connect(); 
$res = $link->query("SELECT * FROM Countries");
echo "<ul>";
while($row= $res->fetch()){
    echo "<li>" .$row[0] .". " .$row["1"]."</li>";
}
echo "</ul>";
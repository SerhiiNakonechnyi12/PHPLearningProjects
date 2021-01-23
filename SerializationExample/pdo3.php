<?php

// CW
// Тема: Сериализация
// Задание.
// Подготовить список туров в JSON-формате для отправки API стороннему приложению. 
// Формирование файла должен выполнять отдельный файл скрипта.

include_once("pdo1.php");
$pdo = connect();
// $cname1 = "Италия";
// $cname2 = "Швеция";
// $cname3 = "Шри Ланка";
// $ps1 = $pdo->prepare("INSERT INTO COUntries (Country) VALUES('" . $cname1 ."')");
// $ps1->execute();
// $ps2 = $pdo->prepare("INSERT INTO Countries (Country) VALUES (?)");
// $ps2->bindParam(1, $cname2);
// $ps2->execute();
// $ps3= $pdo->prepare("INSERT INTO Countries(Country) VALUES(:country)");
// $ps3->execute(array("country"=>$cname3));
$ps4 = $pdo->prepare("SELECT * FROM Hotels ho JOIN Cities ci ON ho.cityid = ci.id 
JOIN countries co on co.id = ci.countryid");
$arr = array();
$ps4->execute();
//echo "<table>";
while($row = $ps4->fetch(PDO::FETCH_ASSOC)){
    //echo "<tr><td>" .$row["id"] ."</td><td>" . $row["country"] ."</td></tr>";
    //var_dump($row);
   
    echo $row["hotel"];
    $arr[] = $row;
}
//echo "</table>";
echo json_encode($arr);
//

?>

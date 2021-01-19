<?php
include_once("pdo1.php");
$pdo = connect();
$cname1 = "Италия";
$cname1 = "Швеция";
$cname1 = "Шри Ланка";
// $ps1 = $pdo->prepare("INSERT INTO Countries (Country) VALUES('".$cname1."')");
// $ps1->execute();
// $ps2 = $pdo->prepare("INSERT INTO Countries (Country) VALUES (?)");
// $ps2->bindParam(1, $sname2);
// $ps2->execute();
$ps2 = $pdo->prepare("INSERT INTO Countries (Country) VALUES (?)");



?>
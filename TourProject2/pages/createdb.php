<?php
include_once("functions.php");
$link = connect();
$qu1 = "CREATE TABLE Countries(
    id int not null auto_increment primary key,
    country varchar(32) UNIQUE
)";
?>
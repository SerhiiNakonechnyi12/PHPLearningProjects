<?php
function connect($host="localhost", $user="root", $pass="root", $dbname="traveldb"){
    $link = mysqli_connect($host, $user, $pass) or die("Не удалось подключиться к серверу");
    mysqli_select_db($link, $dbname) or die("Ошибка подключения к БД");
}
?>
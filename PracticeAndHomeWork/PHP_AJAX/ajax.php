<?php
$name = $_GET["name"];
$name = strtolower($name);
$arr = ["Mario", "Scorpion", "SubZero", "Mike", "John"];
$response = "";
foreach($arr as $n){
    if(substr(strtolower($n), 0, strlen($name)) == $name)
    $response.= $n ."<br>";
}
echo $response;
?>
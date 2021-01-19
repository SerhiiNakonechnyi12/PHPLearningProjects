<?php
$str = file_get_contents("point.json");
echo $str ."<br>";
$p2 = json_decode($str);
var_dump($p2);
echo  "<br>". $p2->y;
echo $p2->Show();
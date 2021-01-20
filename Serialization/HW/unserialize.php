<?php
// $str = file_get_contents("serialPicture.txt");
// echo $str ."<br>";
// $picture = unserialize($str);
// $picture->Show();

$str = file_get_contents("point.json");
echo $str ."<br>";
$picture2 = json_decode($str);
var_dump($picture2);
echo  "<br>". $picture2->y;
echo $picture2->Show();
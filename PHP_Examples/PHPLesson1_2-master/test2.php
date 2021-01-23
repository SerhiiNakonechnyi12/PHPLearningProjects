<?php
$x2 = 1;
if($x2==1)
include_once("functions.php");
//include_once("functions.php");
echo "<br/>" .Add2NumbersColor(5, 12, "#EE55FF") * Add2NumbersColor(2, 3, "purple") ;
$x1 = 15;
IncreaseByTen($x1);
echo "<br/>";
echo "value outside function = ".$x1;
IncreaseByTenRef($x1);
echo "Ref value outside function = ".$x1;
$title = "Chapter 1";
ColorTitle("green");
echo "<hr/>";
incValue();
incValue();
incValue();
$input = "Мама мыла раму";
$search = "мы";
$position = mb_strpos($input, $search);
if($position!==false){
    echo "Позиция равна $position";
}
echo "<br/>".mb_strlen($input);
echo "<br/>";
$date1 = mktime(18, 58, 45, 12, 15, 2020);
echo date("l dS \of F Y H:i:s A", $date1);
echo "<br/>";
echo date("l dS \of F Y H:i:s A", mktime(0, 0, 0, date("m")+1, date("d"), date("y")));
if (checkdate(2, 28, 2021))
echo "YEs";
else
echo "No!";



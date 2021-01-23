<?php
// Функции

function Add2NumbersColor($n1, $n2, $color){
    $sum = $n1 + $n2;
    echo "<div style='color: ".$color. "'>".($n1+$n2)."</div>";
}
Add2NumbersColor(5,12,"#EE55FF");


function IncreaseByTenRef(&$n){
    $n+=10;
    echo "value inside function = ".$n;
}
$x1= 15;
IncreaseByTenRef($x1);
echo "<br/>";
echo "value outside function = ".$x1;
echo "<br/>";
IncreaseByTenRef($x1);
echo "<br/>";
echo "Ref value outside function = ".$x1;

function incValue(){
    static $counter = 0;
    $counter++;
    echo $counter."<br/>";
}

<?php
function Add2NumbersColor($n1, $n2, $color = "#EE55FF"){
    $sum = $n1 + $n2;
    echo "<div style='color: ".$color."'>".$sum."</div>";
    return $sum;
}
function IncreaseByTen($n){
    $n+=10;
    echo "<br/>value inside function = ".$n;
}
function IncreaseByTenRef(&$n){
    $n+=10;
    echo "<br/>Ref value inside function = ".$n;
}

function ColorTitle($color){
    global $title;
    echo "<h5 style='color: ".$color."'>".$title."</h5>";
}

function incValue(){
    static $counter = 0;
    $counter++;
    echo $counter."<br/>";
}
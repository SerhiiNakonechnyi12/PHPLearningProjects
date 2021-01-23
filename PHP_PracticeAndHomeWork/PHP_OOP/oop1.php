<?php
class Point{
    public $x;
    public $y;

    function Show(){
        echo "<br/>X = ". $this->x .", Y = ". $this->y ."<br/>";
    }

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$p1 = new Point(2, 4);
// $p1->x = 30;
// $p1->y = 50;

var_dump($p1);
$p1->Show();
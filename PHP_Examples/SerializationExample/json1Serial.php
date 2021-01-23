<?php
class Point{
    public $x;
    public $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;    
    }

    function Show(){
        echo "X = " . $this->x .", Y = ". $this->y."<br>";
    }
}

$p1 = new Point(7, 12);
$p1->Show();
$str = json_encode($p1);
echo $str . "<br>";
file_put_contents("point.json", $str);

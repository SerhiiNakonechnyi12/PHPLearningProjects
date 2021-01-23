<?php
class Point{
    public $x;
    private $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;    
    }

    function Show(){
        echo "X = " . $this->x .", Y = ". $this->y."<br>";
    }
}

$str = file_get_contents("serialPoint.txt");
echo $str ."<br>";
$p2 = unserialize($str);
$p2->Show();
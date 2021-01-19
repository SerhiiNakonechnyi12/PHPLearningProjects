<?php
class Point{
    private $x;
    private $y;

    function __construct($x, $y)
    {
        $this->x =$x;
        $this->y =$y;
    }

    function Show(){
        echo "X = " .$this->x . ", Y = ". $this->y. "<br>";
    }

    function __toString(){
        return "Точка с координатами X = " .$this->x . ", Y = ". $this->y. "<br>";
    }

    function __get($name){
        if($name=="xCoord")
        return $this->x;
        if($name=="yCoord")
        return $this->y;
        if($name=="Sum")
        return $this->y + $this->x;
    }

    function __set($name, $value){
        if($name=="xCoord")
        $this->x = $value;
        else
        if($name=="yCoord")
        $this->y = $value;
    }
}

$p1 =new Point(7, 12);
echo $p1 ."<br>";
echo "X : ". $p1->xCoord. "<br>";
echo "Y : ". $p1->yCoord. "<br>";
echo "Sum : ". $p1->Sum. "<br>";
$p1 -> xCoord = 24;
echo "X : ". $p1->xCoord. "<br>";
echo "Sum : ". $p1->Sum. "<br>";


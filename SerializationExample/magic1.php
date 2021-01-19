<?php
class Point{
    private $x;
    private $y;
    private $width;
    function __construct($x, $y, $w)
    {
        $this->x = $x;
        $this->y = $y;  
        $this->width = $w; 
    }

    function Show(){
        echo "X = " . $this->x .", Y = ". $this->y."<br>";
    }

    function __toString()
    {
        return "Точка с координатами X = " . $this->x .", Y = ". $this->y."<br>";
    }

    function __get($name)
    {
        // if($name=="xCoord")
        // return $this->x;
        // if($name=="yCoord")
        // return $this->y;
        // if($name=="Sum")
        // return $this->x + $this->y;
        if(property_exists($this, $name)){
            return $this->$name;
        }
    }

    function __set($name, $value)
    {
        // if($name == "xCoord")
        // $this->x = $value;
        // else
        // if($name == "yCoord")
        // $this->y = $value;
        if(property_exists($this, $name))
        $this->$name = $value;
    }

    function __isset($name)
    {
        return isset($this->$name);
    }

    function __sleep()
    {
        return array("x", "width");
    }

    private  function sum($arg1, $arg2)
    {
        echo "<br> ". $arg1 . " + ". $arg2 . " = " .($arg1 + $arg2). "<br>";
    }
    function __call($name, $arguments)
    {
        if($name == "Summa")
        $this->sum($arguments[0], $arguments[1]);
        else
        echo "Вызвана функция ". $name . " c параметрами: " . implode(", ", $arguments);
    }
}

$p1 = new Point(7, 12, 5);
// echo $p1 ."<br>";
// echo "X : " .$p1->xCoord ."<br>";
// echo "Y : " .$p1->yCoord ."<br>";
// echo "Sum : " .$p1->Sum ."<br>";
// $p1 -> xCoord = 24;
// $p1 -> yCoord = -23;
// echo "X : " .$p1->xCoord ."<br>";
// echo "Y : " .$p1->yCoord ."<br>";
// echo "Sum : " .$p1->Sum ."<br>";
echo $p1->x . "<br>";
$p1->x = 10;
echo $p1->x . "<br>";
if(isset($p1->width))
echo "Свойство width есть";
else
echo "Свойствa width нет";
echo "<br>";
if(isset($p1->x))
echo "Свойство x есть";
else
echo "Свойствa x нет";
echo "<br>";
$str = serialize($p1);
echo $str;
$p1->Summa(4, 8);
$p1->Ufo(3, 7, "ha-ha-ha");

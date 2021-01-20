<?php
class Picture{
    public $id;
    private $name;
    private $size;
    private $imagepath;
    function __construct($id, $name, $size, $imagepath)
    {
        $this->id = $id;
        $this->name = $name;    
        $this->size = $size;    
        $this->imagepath = $imagepath;    
    }

    function Show(){
        echo "id: " . $this->id .", Name: ". $this->name."<br>
        Size: " . $this->size .", imagepath: ". $this->imagepath."<br>";
    }
}

$str = file_get_contents("serialPicture.txt");
echo $str ."<br>";
$p2 = unserialize($str);
$p2->Show();
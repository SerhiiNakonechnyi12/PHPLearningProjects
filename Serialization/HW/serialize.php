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

$picture = new Picture(1, "car", 256, "images");
$picture->Show();
$str = serialize($picture);
echo $str ."<br>";
file_put_contents("serialPicture.txt", $str);
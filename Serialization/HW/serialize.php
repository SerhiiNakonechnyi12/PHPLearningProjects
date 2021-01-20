<?php
class Picture{
    public $id;
    public $name;
    public $size;
    public $imagepath;
    function __construct($id, $name, $size, $imagepath)
    {
        $this->id = $id;
        $this->name = $name;    
        $this->size = $size;    
        $this->imagepath = $imagepath;    
    }

    function Show(){
        echo "id: " . $this->id .", <br> Name: ". $this->name."<br>
        Size: " . $this->size .", <br>imagepath: ". $this->imagepath."<br>";
    }
}

$picture = new Picture(1, "car", 256, "images");
$picture->Show();
//$str = serialize($picture);
$str = json_encode($picture);
echo $str ."<br>";
// file_put_contents("serialPicture.txt", $str);
file_put_contents("picture.json", $str);
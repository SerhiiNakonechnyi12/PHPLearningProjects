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

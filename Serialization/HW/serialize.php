<?php

// Тема: Сериализация
// Задание.
// Для выполнения задания вам понадобится класс Picture со свойствами 
// $id, $name, $size и $imagepath, созданный ранее. Если этого класса у вас нет, 
// можно использовать любой другой.
// Создайте два файла с именами serialize.php и unserialize.php.
// В файле serialize.php создайте объект класса Picture (или другого класса). 
// Сериализованный объект запишите в текстовый файл.
// Теперь в файле unserialize.php прочитайте из текстового файла строку и 
// восстановите из нее исходный объект.
// Убедитесь, что восстановленный объект полностью функционален (вызовите от 
// имени этого объекта какой-либо метод класса).

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
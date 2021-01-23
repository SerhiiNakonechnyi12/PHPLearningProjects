<?
// $fd = fopen("test1.php", "r") or die("Невозможно открыть файл");
// while(!feof($fd)){
//     //$str = htmlentities(fgets($fd));
//     $str = htmlentities(fread($fd, 400));
//     echo $str."<br/>";
//fclose($fd);

// }

//=====================

// $fd = fopen("hello.txt", "w+") or die("Невозможно открыть файл");
// $str = "Привет мир!";
// fputs($fd, $str);
// echo "Файл был успешно записан";
// fseek($fd, 0);
// fputs($fd, "Хрю");
// fseek($fd, 0, SEEK_END);
// fputs($fd, " Новый Год!");
// fclose($fd);

//=======================================

// Работа с файлами

// if(file_exists("test1.php")){
//     $str = file_get_content("test1.php");
//     echo $str;
// }
// else
//     echo "File is not found!";

$user = array("name" => "Serhii", "age" => 29, "email" => "Serhii@gmail.com");
$str = json_encode($user);
$fd = fopen("user.txt", "w") or die("Не удалось откыть файл для записи");
echo "File was written";
echo $str;
fwrite($fdm, $str);
fclose($fd);

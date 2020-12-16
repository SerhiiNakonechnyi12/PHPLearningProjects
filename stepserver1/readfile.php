<?
// $fd = fopen("test1.php", "r") or die("Невозможно открыть файл");
// while(!feof($fd)){
//     //$str = htmlentities(fgets($fd));
//     $str = htmlentities(fread($fd, 400));
//     echo $str."<br/>";
//fclose($fd);

// }
$fd = fopen("hello.txt", "w+") or die("Невозможно открыть файл");
$str = "Привет мир!";
fputs($fd, $str);
echo "Файл был успешно записан";
fseek($fd, 0);
fputs($fd, "Хрю");
fseek($fd, 0, SEEK_END);
fputs($fd, " Новый Год!");
fclose($fd);

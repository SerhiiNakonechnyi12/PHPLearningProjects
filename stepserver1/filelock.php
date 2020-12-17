<?
$str = "Hello PHP!";
if(!file_exists("readme.txt"))
{
    $fd = fopen("readme.txt", "w") or die("Не удалось создать файл");
    fwrite($fd, $str);
    fclose($fd);
}
else
{
    $fd = fopen("readme.txt", "r+") or die("Не открывается файл");
    if(flock($fd, LOCK_EX)){
        fseek($fd, 0, SEEK_END);
        fwrite($fd, $str);
        flock($fd, LOCK_UN);
        echo "Файл успешно записан!";
    }
    fclose($fd);
}
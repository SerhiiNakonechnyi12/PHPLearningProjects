<?
$fd = fopen("usersFile.txt", "r");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo "$str<br/>";
}
fclose($fd);
// $str = file_get_contents();
// echo $str;
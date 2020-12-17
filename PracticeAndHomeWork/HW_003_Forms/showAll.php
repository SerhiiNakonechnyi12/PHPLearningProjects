<?
// $fd= fopen("usersFile.txt", "r");
// while(!feof($fd))
// {
//     $str =fgetc($fd);
//     echo "<div>$str</div>";

// }
// fclose($fd);

if(file_exists("users.json")){
    $str = file_get_contents("users.json");
    $users = json_decode($str);
    foreach($users as $k)
    {
        echo print_r($k)."<br/>";
    }
}
// $str = file_get_contents();
// echo $str;
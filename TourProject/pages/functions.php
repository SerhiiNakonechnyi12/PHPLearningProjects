<?php
$users = "pages/users.txt";
function register($name, $passw, $email){
    $name = trim(htmlspecialchars($name));
    $passw = trim(htmlspecialchars($passw));
    $email = trim(htmlspecialchars($email));
    if($name == "" || $passw == "" || $email == ""){
        echo "<h3><span style='color: red'>Небходимо заполнить все поля!</span></h3>";
        return false;
    }
    if(strlen($name) < 3 || strlen($name) > 30 || strlen($passw) < 3 || strlen($passw) > 30){
        echo "<h3><span style='color: red'>Значения полей должны быть от 3 до 30 символов!</span></h3>";
        return false;
    }
    global $users;
    $fd = fopen($users, "a+");
    // name:md5(passw):email
    while(!feof($fd)){
        $line = fgets($fd);
        $readname = substr($line, 0, strpos($line, ":"));
        if($name == $readname){
            echo "<h3><span style='color: red'>Такой логин уже существует!</span></h3>";
            return false;
        }
    }
    $line = $name.":".md5($passw).":".$email."\r\n";
    fputs($fd, $line);
    fclose($fd);
    return true;
}

?>
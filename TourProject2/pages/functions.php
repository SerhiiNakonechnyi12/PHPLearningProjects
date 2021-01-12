<?php
function connect($host="localhost", $user="root", $pass="root", $dbname="traveldb"){
    $link = mysqli_connect($host, $user, $pass) or die("Не удалось подключиться к серверу");
    mysqli_select_db($link, $dbname) or die("Ошибка подключения к БД");
    mysqli_query($link, "set names 'utf8'");
    return $link;
}

function register($login, $pass, $email){
    $login = trim(htmlspecialchars($login));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));
    if($login=="" || $pass=="" || $email==""){
        echo "<h3/><span style='color: red'>Заполните все необходимые поля!</span><h3/>";
        return false;
    }
    if(strlen($login) < 3 || strlen($login) > 30){
        echo "<h3/><span style='color: red'>Логин должен быть от 3 до 30 символов!</span><h3/>";
        return false;
    }
    $link = connect();
    $ins1 = "INSERT INTO `users`(`login`, `pass`, `email`, `roleid`) VALUES ('".$login."', '".md5($pass)."', '".$email."', 2)";
    mysqli_query($link, $ins1);
    $err = mysqli_errno($link);
    if($err){
        if($err==1062){
            echo "<h3/><span style='color: red'>Пользователь с таким логином существует!</span><h3/>";
            return false;
        }
        else{
            echo "<h3/><span style='color: red'>Код ошибки: ".$err."</span><h3/>";
            return false;
        }
    }
    return true;
}
?>
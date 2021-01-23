<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="HW_003_style.css">
</head>
<body>
<div class="container">
    <div id="block">
        <form action="#" id="grey-form" method="POST">
            <h1>Member Login</h1><br>
            <input type="text" placeholder="Username" name="login"><br>
            <input type="text" placeholder="Password" name="password"><br>
            <input type="text" placeholder="Email" name="email"><br>
            <button  type="submit" id="login" name="accept">Login</button><br><br>
            <a id="forgot-password" href="#">Forgot password?</a><br><br>

        </form>
        <!-- <div id="white">...or log in with:</div>
        <input type="button" value="Facebook" src="" class="button_Facebook">
        <input type="button" value="Twitter" src="" class="button_Twitter"> -->
        <form action="showAll.php" method="GET">
            <button  type="submit" id="login" name="accept" >Show all</button><br><br>

        </form>

    </div>
</div>
</body>
</html>


<?php
// Тема: Формы
// Задание.
// Создать форму для регистрации пользователей. 
// Форма может быть произвольной, но обязательно должна содержать поля для 
// логина, пароля и адреса электронной почты пользователя. 
// Кроме этих полей форма, по вашему усмотрению, может содержать и другие поля.
// Предусмотреть кнопку для вывода списка пользователей на экран
$i = 0;

if (isset($_POST["accept"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $user = array();
    if(!file_exists("users.json")){
    $users = array($users);

        $str = json_encode(($users));
        $fd = fopen("usersFile.txt", "a+") or die("Error");

        //записали 
        fwrite($fd,"Login: ". $_POST["login"] . ", email: " .$_POST["email"]. ", password: ".$_POST["password"] ."\n");
        fclose($fd);
        unset($_POST["accept"]);
    }
    else
    {
        $str = file_get_contents("users.json");
        $users = json_decode($str);
        array_push($users, $user);
    }

    echo (
    "<form><div>
        Login: ".$login. "<br>
        Password: ".$password. "<br>
        Email: ".$email. "<br>

    </div></form>");
    // echo 
    // "<span>"
    //     .$login.","
    //     .$password.","
    //     .$email.
    // "</span>";
}
?>

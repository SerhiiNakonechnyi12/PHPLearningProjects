<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="HW_003_style.css">
</head>
<body>
    <!-- <form>
        <div>
            Login:
            <br>
            <input type="text" size="40" name="login">
        </div>
        <div>Password:
            <br>
            <input type="password" size="40" name="password">
        </div>
        <div>Email:
            <br>
            <input type="text" size="40" name="email">
        </div>
    </form> -->

    <div id="block">
        <form action="#" id="grey-form">
            <h1>Member Login</h1><br>
            <input type="text" placeholder="Username" name="login"><br>
            <input type="text" placeholder="Password" name="password"><br>
            <input type="text" placeholder="Email" name="email"><br>
            <button id="login" name="accept">Login</button><br><br>
            <a id="forgot-password" href="#">Forgot password?</a><br><br>
        </form>
        <div id="white">...or log in with:</div>
        <input type="button" value="Facebook" src="" class="button_Facebook">
        <input type="button" value="Twitter" src="" class="button_Twitter">
    </div>
</body>
</html>

<!-- Тема: Формы
Задание.
Создать форму для регистрации пользователей. 
Форма может быть произвольной, но обязательно должна содержать поля для 
логина, пароля и адреса электронной почты пользователя. 
Кроме этих полей форма, по вашему усмотрению, может содержать и другие поля.
Предусмотреть кнопку для вывода списка пользователей на экран -->
<?php
if(isset($_POST["accept"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    // echo "<span style='color: rgb(".$r.",".$g.",".$b.")'>Change text color</span>";
    // echo (
    // "<div>
    //     Login: ".$login. "<br>
    //     Password: ".$password. "<br>
    //     Email: ".$email. "<br>
    // </div>");
    echo (
    "<span>
        Login: ".$login.",".$password.",".$email."
    </span>");
}



?>

<?
if(isset($_POST["accept"])){
    $login = $_POST["login"];
$passw = $_POST["passw"];
echo "Привет, ".$login;
echo "Ваш пароль: ".$passw;
}


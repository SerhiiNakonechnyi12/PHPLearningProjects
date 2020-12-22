<?
session_start();
if(mb_strlen($_POST["name"])>0){
    $_SESSION["name"] = $_POST["name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surname</title>
</head>
<body>
    <form method="POST" action="agePage.php">
        Enter your surname: 
        <input name="surname" type="text">
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?
}
else
{
    header("location: namePage.php");
}
?>


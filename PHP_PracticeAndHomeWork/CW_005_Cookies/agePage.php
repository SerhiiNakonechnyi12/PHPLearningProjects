<?
session_start();
if(mb_strlen($_POST["surname"])>0){
    $_SESSION["surname"] = $_POST["surname"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surname</title>
</head>
<body>
    <form method="POST" action="showInfo.php">
        Enter your age: 
        <input name="age" type="text">
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
    header("location: surNamePage.php");
}
?>
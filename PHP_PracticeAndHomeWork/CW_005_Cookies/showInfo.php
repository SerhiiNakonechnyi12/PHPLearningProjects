<?
session_start();
if(mb_strlen($_POST["age"])>0){
    $_SESSION["age"] = $_POST["age"];
}
else
{
    header("location: surNamePage.php");
}

$name = $_SESSION["name"];
$surname = $_SESSION["surname"];
$age = $_SESSION["age"];
echo (
    "Полная информация: <br/>
    name: " .$name."<br/>
    surname: " .$surname."<br/>
    surname: " .$age."<br/>"
    
);
?>
<? 
// $num = 100;
session_start();
$num = $_SESSION["num"];
echo "From first file num= " .$num."<br/>";
?>
<a href="session1.php">Back</a>
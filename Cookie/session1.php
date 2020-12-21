<? 
$num = 100;
setcookie("num", $num, time()+60*60*24, "/", "", 0);
echo "From first file num= " .$num."<br/>";
?>
<a href="session2.php">Forward</a>
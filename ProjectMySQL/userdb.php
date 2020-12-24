<?
$link = mysqli_connect("localhost", "root", "root") or die("Не удалось подключиться к серверу"); // логин и пароль
$db = mysqli_select_db($link, "ShopDb") or die ("Данная БД отсустсвует!"); // или shopdb
$q = mysqli_query($link, "SELECT * FROM Goods");
echo "В таблице товары содержится " .mysqli_num_rows($q)." записей<br/>";
echo "В таблице товары содержится " .mysqli_num_fields($q)." поля<br/>";
echo "<ul>";
while($row = mysqli_fetch_array($q)){
    echo "<li>".$row[0].". ".$row["Title"].", Цена: ".$row["Price"]." грн.</li>";
}
echo "</ul>";
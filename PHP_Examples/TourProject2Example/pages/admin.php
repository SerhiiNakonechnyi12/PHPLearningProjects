<h3>Admin Forms</h3>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="text-center">Страны</div>
<?php
$sel1 = "SELECT * FROM Countries ORDER BY Id";
$link = connect();
echo "<form action='index.php?page=4' method='POST' id='countryform'>";
$res = mysqli_query($link, $sel1);
echo "<table class='table table-striped'>";
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td><input type='checkbox' name='cb".$row[0]."'></td>";
    echo "</tr>";
}
echo "</table>";
echo "<input type='text' name='country' placeholder='Country' class='form-control'>";
echo "<button type='submit' name='addcountry' class='btn btn-sm btn-info'>Добавить</button>";
echo "<button type='submit' name='removecountry' class='btn btn-sm btn-warning'>Удалить</button>";
echo "</form>";
if(isset($_POST["addcountry"])){
    $country = trim(htmlspecialchars($_POST["country"]));
    //$link = connect();
    $ins1 = "INSERT INTO Countries(Country) VALUES ('".$country."')";
    mysqli_query($link, $ins1);
    $err = mysqli_errno($link);
    if($err){
        echo "<h3/><span style='color: red'>Error No: ".$err."</span><h3/>";
        exit();
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
if(isset($_POST["removecountry"])){
    foreach($_POST as $k=>$v){
        if(substr($k, 0, 2)=="cb"){
            $countryid = substr($k, 2);
            $del1 = "DELETE FROM Countries WHERE id=".$countryid;
            //$link = connect();
            mysqli_query($link, $del1);
        }
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
?>

</div>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="text-center">Города</div>
<?php
echo "<form action='index.php?page=4' method='POST' id='cityform'>";
$sel2 = "SELECT ci.id, ci.City, co.Country, co.id FROM Countries co JOIN Cities ci ON ci.countryid= co.id";
$link = connect();
$res = mysqli_query($link, $sel2);
echo "<table class='table table-striped'>";
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td><input type='checkbox' name='ci".$row[0]."'></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_free_result($res);
$sel2 = "SELECT * FROM Countries";
$res = mysqli_query($link, $sel2);
echo "<select name='countryid'>";
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
    echo "<option value='".$row[0]."'>".$row[1]."</option>";
}
echo "</select>";
echo "<input type='text' name='city' placeholder='City' class='form-control'>";
echo "<button type='submit' name='addcity' class='btn btn-sm btn-info'>Добавить</button>";
echo "<button type='submit' name='removecity' class='btn btn-sm btn-warning'>Удалить</button>";
echo "</form>";
if(isset($_POST["addcity"])){
    $countryid = $_POST["countryid"];
    $city = trim(htmlspecialchars($_POST["city"]));
    $ins2 = "INSERT INTO Cities(City, countryid) VALUES('".$city."', ".$countryid.")";
    mysqli_query($link, $ins2);
    $err = mysqli_errno($link);
    if($err){
        echo "<h3/><span style='color: red'>Error No: ".$err."</span><h3/>";
        exit();
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
if(isset($_POST["removecity"])){
    foreach($_POST as $k=>$v){
        if(substr($k, 0, 2)=="ci"){
            $cityid = substr($k, 2);
            $del1 = "DELETE FROM Cities WHERE id=".$cityid;
            //$link = connect();
            mysqli_query($link, $del1);
        }
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
?>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="text-center">Отели</div>
<?php
$sel3 = "SELECT ho.id, ho.hotel, ci.id, ci.City, co.id, co.Country, ho.stars FROM Hotels ho JOIN Cities ci ON ho.cityid = ci.id
JOIN Countries co ON ci.CountryId = co.id";
$link = connect();
echo "<form action='index.php?page=4' method='POST' id='hotelform'>";
$res = mysqli_query($link, $sel3);
echo "<table class='table table-striped'>";
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[3]." : ".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "<td><input type='checkbox' name='hb".$row[0]."'></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_free_result($res);
$sel3 = "SELECT ci.id, ci.City, co.Country, co.id FROM Cities ci JOIN Countries co ON ci.countryid = co.id";
$countrysel = array();
$res = mysqli_query($link, $sel3);
echo "<select name='cityid'>";
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
    echo "<option value='".$row[0]."'>".$row[1]." : ".$row[2]."</option>";
    $countrysel[$row[0]]= $row[3];
}
echo "<input type='text' name='hotel' placeholder='Hotel' class='form-control'>";
echo "<input type='text' name='cost' placeholder='Cost' class='form-control'>";
echo "<input type='number' name='stars'  min='1' max='5' placeholder='Stars' class='form-control'>";
echo "<textarea placeholder='Info...' name='info' class='form-control'></textarea>";
echo "<button type='submit' name='addhotel' class='btn btn-sm btn-info'>Добавить</button>";
echo "<button type='submit' name='removehotel' class='btn btn-sm btn-warning'>Удалить</button>";
echo "</form>";
if(isset($_POST["addhotel"])){
    $hotel = trim(htmlspecialchars($_POST["hotel"]));
    $cost = doubleval(trim(htmlspecialchars($_POST["cost"])));
    $stars = intval($_POST["stars"]);
    $info = trim(htmlspecialchars($_POST["info"]));
    $cityid = $_POST["cityid"];
    $countryid = $countrysel[$cityid];
    //$link = connect();
    $ins3 = "INSERT INTO Hotels(hotel, cost, stars, info, cityid, countryid)
    VALUES ('".$hotel."', ".$cost.", ".$stars.", '".$info."', ".$cityid.", ".$countryid.")";
    mysqli_query($link, $ins3);
    $err = mysqli_errno($link);
    if($err){
        echo "<h3/><span style='color: red'>Error No: ".$err."</span><h3/>";
        exit();
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
if(isset($_POST["removehotel"])){
    foreach($_POST as $k=>$v){
        if(substr($k, 0, 2)=="hb"){
            $hotelid = substr($k, 2);
            $del1 = "DELETE FROM Hotels WHERE id=".$hotelid;
            //$link = connect();
            mysqli_query($link, $del1);
        }
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
?>
</div>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="text-center">Фото</div>
</div>
</div>
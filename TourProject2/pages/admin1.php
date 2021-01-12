<h3>Admin Forms</h3>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6"></div>
<div class="text-center">Страны</div>
<?php
$set1 = "SELECT * FROM Countries";
$link = connect();
echo "<form action='index.php?page=4' method='POST' id='countryform'>";
$res = mysqli_query($link, $sel1);
echo "<table>";
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
    $link = connect();
    $ins1 = "INSERT INTO Countries(Country) VALUES ('".$country."')";
    mysqli_query($link, $ins1);
    $err = mysqli_errno($link);
    if($err){
        echo "<h3><span style='color: red'>Error No: ".$err."</span></h3>";
        exit();
    }
    echo "<script>";
    echo "window.location = document.URL";
    echo "</script>";
}
if(isset($_POST["removecountry"])){
    foreach($_POST as $k=>$v){
        if(substr($k, 0, 2) == "cb"){
            $countryid = substr($k2, 2);
            $dell = "DELETE FROM Countries WHERE id=".$counryid;
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
<div class="col-sm-6 col-md-6 col-lg-6"></div>
<div class="text-center">Города</div>
<?php
echo "<form action='index.php?page=4' method='POST' id='cityform'>";
$sel2 ="SELECT ci.id, ci.City, co.Country, co.id FROM Countries co JOIN Cities ci ON ci.countries= co.id";
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
echo "<input type='text name='city' placeholder='City' class='form-control'>";
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
$sel3 = "SELECT ho.id, ho.hotel, ci.id, ci.City, co.id, co.Country FROM Hotels ho JOIN Cities ci ON ho.cityid = ci.id
JOIN Countries co ON ci.CountryId = co.id";
$link = connect();
echo "<form action='index.php?page=4' method='POST' id='hotelform'>";
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
?>
</div>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="text-center">Фото</div>
</div>
</div>
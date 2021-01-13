<h3>Tours</h3>
<?php
echo "<form action='index.php?page=1' method='POST'>";
$link = connect();
$countryid = $_POST["countryid"];
$sel1 = "SELECT * FROM Countries";
$res = mysqli_query($link, $sel1);
echo "<select name='countryid' class='col-sm-3 col-md-3 col-lg-3'>";
echo "<option value='0'>Выберите страну...</option>";
while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
    echo "<option value='" . $row[0] . "' ".($countryid == $row[0] ? "selected" : "").">" . $row[1] . "</option>";
}
echo "</select>";
mysqli_free_result($res);
echo "<input type='submit' name='selcountry' class='btn btn-sm btn-primary' value='Выбрать'>";
if (isset($_POST["selcountry"])) {
    $countryid = $_POST["countryid"];
    if($countryid==0) exit();
    $sel2 = "SELECT id, City from Cities WHERE Countryid=" . $countryid;
    $res = mysqli_query($link, $sel2);
    echo "<br><select name='cityid' class='col-sm-3 col-md-3 col-lg-3'>";
    echo "<option value='0'>Выберите город...</option>";
    while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
        echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
    }
    echo "</select>";
    echo "<button type='submit' name='selcity' class='btn btn-sm btn-primary'>Выбрать</button>";
}
echo "</form>";
if(isset($_POST["selcity"])){
    $cityid = $_POST["cityid"];
    $sel1 = "SELECT ho.id, ho.Hotel, ci.City, co.Country, ho.cost, ho.stars FROM Hotels ho JOIN Cities ci ON ho.cityid = ci.id
    JOIN Countries co ON ci.CountryID = co.id WHERE ho.cityid = ".$cityid;
    $res = mysqli_query($link, $sel1);
    echo "<table class='table table-striped'>";
    while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "<td><a href='index.php?page=5&hotel=".$row[0]."' target='_blank'>Детальнее...</a></td>";
        echo "</tr>";
    }
}
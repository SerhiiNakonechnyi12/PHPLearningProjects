<?
$arr = array("red", "ogange", "yellow", "green", "blue", "violet");
shuffle($arr);
$newArr = array_slice($arr, 0, 4);

foreach ($newArr as $color) {
    echo '<div style="color:' . $color . ';">text</div>';
    echo '<div style="height:50px; width:50px; background-color:' . $color . ';"></div>';
}


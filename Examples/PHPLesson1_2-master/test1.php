<?
$n1= 10;
$n2=100;
echo $n1;
$sum = $n1 + $n2;
echo "<div>".$n1."+".$n2."=<span style='color: red'>".$sum."</span></div>";
echo "<hr/>";
$ar1 = array(2, 4, 6, 7);
echo "Элемент массива $ar1[1]<br/>";
echo "Количество элементов в массиве: ".count($ar1);
$ar2 = array("red"=>"cherry", "yellow"=>"lemon", "green"=>"apple");
echo "<br/>".$ar2["yellow"];
$fruits[] = "apple";
$fruits[] = "cherry";
$fruits[] = "pineapple";
$fruits[] = "watermelon";
echo "<ul>";
for($i=0; $i<count($fruits); $i++){
    echo "<li>$fruits[$i]</li>";
}
echo "</ul>";
print_r($ar2);
print_r($fruits);
$ar3[0][0] = "Фрукты";
$ar3[0][1] = "Овощи";
$ar3[1][0] = "Черешня";
$ar3[1][1] = "Слива";
$ar3[1][2] = "Абрикос";
$ar3[1][3] = "Манго";
$ar3[2][0] = "Картофель";
$ar3[2][1] = "Буряк";
$ar3[2][2] = "Морковь";
$ar3[2][3] = "Сельдерей";
echo "<hr><h3>".$ar3[0][0]."</h3>";
for($i=0; $i<count($ar3[1]); $i++){
    echo "<div>".$ar3[1][$i]."</div>";
}
echo "<hr><h3>".$ar3[0][1]."</h3>";
for($i=0; $i<count($ar3[2]); $i++){
    echo "<div>".$ar3[2][$i]."</div>";
}
echo "<hr/>";
$people["Ivanov"] = array("name"=>"Ivan", "age"=>36, "city"=>"Kryvyi Rih");
$people["Petrov"] = array("name"=>"Petr", "age"=>24, "city"=>"Kyiv");
$people["Sidorov"] = array("name"=>"Sidor", "age"=>18, "city"=>"Lviv");
echo "<div style='font-weight: bold; text-align: center'>".$people["Petrov"]["name"]." live in ".$people["Petrov"]["city"]."</div>";
foreach($ar2 as $k=>$v)
echo "<div>".$k.": <span style='color: ".$k."'>".$v."</span></div>"; 
$headers = apache_request_headers();
foreach($headers as $k=>$v){
    echo $k.": ".$v."<br/>";
}
echo mt_rand(10, 20);
?>
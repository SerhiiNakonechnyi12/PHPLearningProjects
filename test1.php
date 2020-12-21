<?
$n1 = 10;
$n2 = 100;
$sum = $n1 + $n2;
echo "Hello World of PHP! Sum = ".($n1+$n2);
echo "<div>".$n1."+".$n2."=<span style='color: red'>".$sum."</span></div>";
echo "<hr>";
$ar1 = array(2, 4, 6, 7);
echo "2й эллемент массива: $ar1[1]</br>";
echo "Количество эллементов в массиве: " .count($ar1);
echo "<br/>".$ar2["yellow"];
$fruits[] = "apple";
$fruits[] = "cherry";
$fruits[] = "pineaple";
$fruits[] = "watermelon";
echo "<ul>";
for ($i=0; $i <count($fruits); $i++) { 
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
$ar3[1][3] = "Картофель";
$ar3[2][0] = "Манго";
$ar3[2][1] = "Буряк";
echo "<hr><h3>".$ar3[0][0]."</h3>";
for ($i=0; $i <count($ar3[1]); $i++) { 
    echo "<div>".$ar3[1][$i]."</div>";
}
echo "<hr><h3>".$ar3[0][1]."</h3>";
for ($i=0; $i <count($ar3[2]); $i++) { 
    echo "<div>".$ar3[2][$i]."</div>";
}
echo "<hr/>";
$people["Ivanov"] = array("name" => "Ivan", "age" => 36, "city" => "Kriviy Rig");
$people["Petrov"] = array("name" => "Pete", "age" => 25, "city" => "Tel-Aviv");
$people["Sidorov"] = array("name" => "Sam", "age" => 17, "city" => "Boston");
echo "<div style='font-weight: bold; text-align: center'>".$people["Petrov"]["name"]." is living in ".$people["Petrov"]["city"]."</div>";

$ar2 = array("red" => "cherry", "yellow"=>"lemon", "green"=>"apple");
foreach($ar2 as $k=>$v) // Ключ-значение
    echo "<div>".$k.": <span style='color: ".$k."'>".$v."</span></div>";

// Задание 1.
// Создайте ассоциативный массив cars, элементы которого (bmw, Toyota,
// skoda), которого тоже ассоциативные массивы с параметрами model, price, year.
// Вывести информацию об автопарке (используя конструкцию foreach) в
// следующем формате:
// Car #1:
// model - x5, price - 10000, year - 2015 ;
echo "<hr/>";
echo "Задание 1</br/>";
$cars["BMW"] = array("model"=>"X5", "price"=>50000, "year"=>2019);
$cars["Toyota"] = array("model"=> "Camry", "price" => 40000, "year" => 2019);
$cars["Skoda"] = array("model"=> "Rapid", "price" => 38000, "year" => 2019);
$i = 0;
foreach($cars as $key => $val){
    echo "<div>Car #".(++$i)."</div>";
    foreach($val as $k1=>$v1){
        echo "$k1 - $v1, ";
    }
}
// echo "</br>Информация об автопарке: </br></br>";
// $num = 1;
// echo "<div> Car #1: <br> 
// model: ".$cars["BMW"]["model"].", price: ".$cars["BMW"]["price"]. ", year: ".$cars["BMW"]["year"].
// ";</div>";
// echo "<div> Car #2: <br> 
// model: ".$cars["Toyota"]["model"].", price: ".$cars["Toyota"]["price"]. ", year: ".$cars["Toyota"]["year"].
// ";</div>";
// echo "<div> Car #3: <br> 
// model: ".$cars["Skoda"]["model"].", price: ".$cars["Skoda"]["price"]. ", year: ".$cars["Skoda"]["year"].
// ";</div>";

// echo "<hr/>";
// foreach ($cars as $k => $v) {
//      echo "<div>Car #".$num++.":</br>" .$k." model - ".$v. "</br></br></div>";
//     echo("$k => $v<br>");
// }

echo "<hr/>";
// Задание 2.
// Создайте две числовые переменные cols и rows. Присвойте им произвольное значение 
// в диапазоне от 1 до 10. Используя циклы отрисуйте таблицу умножения в виде html-таблицы. 
// Количество столбцов – cols, строк – rows. На пересечении строк и столбиков – 
// произведение порядковых номеров строк и столбиков. Значение в первой строке и 
// первом столбике: шрифт – жирный, выравнивание – по центру, фон – темно-серый. 
// Для результатов произведений – фон светлосерый.
echo "Задание 2</br/>";
$cols = $rows = 9;

$color1 = 'Grey';
$color2 = 'Silver';
echo "<table border='1'>\n";
	for($r=1;$r<=$rows;$r++){
		echo "<tr>\n";
		for($c=1; $c<=$cols; $c++){
			if($r==1 || $c==1){echo "\t\t<th style='background:".$color1.'>'.$r*$c."</th>\n";}
			else{echo "\t\t<td style='background:".$color2."'>'".$r*$c."</td>\n";}
		}
		echo "</tr>";
	}
	echo "</table>";

?>
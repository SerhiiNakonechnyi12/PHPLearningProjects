<?
// Тема: Куки, сессии 
// Задание.
// Инициализируйте переменную для подсчета количества посещений, хранения 
// вашего имени и даты последнего посещения. 
// Если соответствующие данные передавались через куки, сохраните их в 
// эту переменную. Нарастите счетчик посещений, 
// измените дату на текущую. Установите соответствующие куки. 
// Выводите информацию о количестве посещений и 
// дате последнего посещения.
// Для проверки корректности работы счетчика напишите еще один скрипт, 
// например clearCookie.php для 
// сброса всех данных, хранящихся в куки.

session_start();
// Cookie
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);

$timeCookie = isset($_COOKIE['timeCookie']) ? $_COOKIE['timeCookie'] : 0;
$timeCookie = date("D, d M Y H:i:s");
setcookie("timeCookie", $timeCookie);

$userName = "Serhii";

// Сессии
//session_start();
$_SESSION["time"] = date("D, d M Y H:i:s");
// echo $_SESSION["time"];

$_SESSION["name"] = "Serhii";
if(!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 1;
}
else
{
    $_SESSION["counter"] = $_SESSION["counter"] +1;
}

// Session
echo (
    "Counter from session: ".$_SESSION["counter"]."<br/> 
    Имя: ".$_SESSION["name"]. "<br/>
    Дата последнего посещения: ".$_SESSION["time"]."<br/><br/>"
);

// Cookies
echo (
    "Посещений страницы: ".$counter. "<br/>
    Имя посетителя: ".$userName."<br/>
    Дата последнего посещения: ".$timeCookie. "<br/><br/>"
    
);

//session_unset();
//session_destroy();
?>



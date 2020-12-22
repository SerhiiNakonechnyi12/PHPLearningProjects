<?
setcookie("counter", $counter, time()-10);
setcookie("timeCookie", $counter, time()-10);
echo (
"Cookies was delete"
);

echo (
    "Посещений страницы: ".$counter. "<br/>
    Имя посетителя: ".$userName."<br/>
    Дата последнего посещения: ".$timeCookie. "<br/><br/>"
    
);
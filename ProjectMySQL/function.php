<?
function connect($host="localhos", $login="root", $pasw="root", $dbName="ShopDb"){
    $link = mysqli_connect($host, $login, $pasw, $dbName);
    if(!$link){
        echo "<h3 style='color: red'>Ошибка подключения к БД!</h3>";
        return false;
    }
    return $link;
}

function addGood($title, $price, $manId){
    
}


?>
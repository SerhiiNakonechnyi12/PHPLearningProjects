<?php

// Разработать вэб-приложение для взаимодействия с БД. Приложение должно
// состоять из двух страниц: на одной странице должна выводиться информация в
// виде таблицы, а на второй – форма для добавления товара. Внизу таблицы
// вывести текущее количество товара.
// При добавлении последней колонки используйте код
// <td><input type='checkbox' name='cb".$row[0]."'></td>
// При извлечении id для редактирования и удаления используйте
// if(isset($_POST['delGood']))
// {
// foreach ($_POST as $key => $value) {
// if(substr($key, 0,2)=='cb')
// {
// $id=substr($key,2);
// …
// }
// }
// echo '<script>window.location=document.URL;</script>';
// }
// При редактировании отправляйте get запрос на страницу редактирования.
// В качестве параметра передавайте id.
// echo '<script>window.location=”index.php”;</script>';

// ToDO: Добавить обработчик формы добавления


function connect($host="localhost", $login="root", $pasw="root", $dbName="ShopDb"){
    $link = mysqli_connect($host, $login, $pasw, $dbName);
    if(!$link){
        echo "<h3 style='color: red'>Ошибка подключения к БД!</h3>";
        return false;
    }
    return $link;
}

function addGood($title, $price, $manId){
    $link = connect();
    $query = "INSERT INTO `goods`(`Id`, `Title`, `Price`, `manufacturerId`) VALUES (DEFAULT,'".$title."',".$price.", ".$manId.")";
    $q = mysqli_query($link, $query);
    $err = mysqli_errno($link);
    if($err)
    return false;
    else
    return true;
    
}


?>
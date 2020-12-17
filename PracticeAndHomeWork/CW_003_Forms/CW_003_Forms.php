<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB Text</title>
</head>
    <form method="POST">
        <div>R<input type='text' size='40' name="r"></div>
        <div>G<input type='text' size='40' name="g"></div>
        <div>B<input type='text' size='40' name="b"></div>
        <div>
            <button type="submit" name="accept">Accept</button>
        </div>
    </form>
</body>
</html>
<?php

if (isset($_POST["accept"])) {
    $r = $_POST["r"];
    $g = $_POST["g"];
    $b = $_POST["b"];
    echo "<span style='color: rgb(".$r.",".$g.",".$b.")'>Change text color</span>";
}
?>


<!-- // Задание.
// Написать PHP скрипт, создающий на странице три текстовых поля. В эти
// поля пользователь должен заносить значения R, G и B цветовых компонент (в
// интервале 0-255). На странице также должна присутствовать кнопка Accept и тег
// span с каким-либо текстом внутри.
// После нажатия на кнопку Accept, надо создать цвет на основе введенных
// пользователем значений R, G и B. Этим цветом залить фон тега span, а текст
// залить дополнительным цветом. -->
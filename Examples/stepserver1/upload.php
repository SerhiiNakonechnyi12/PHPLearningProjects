<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    if($_FILES && $_FILES["photo"]["error"]==UPLOAD_ERR_OK)
    {
        $name = $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], "images/".$name);
        echo "Файл успешно загружен на сервер!";
        echo "<img src='images/".$name."' alt='photo' style='width: 200px; height: 150px'/>";
    }
    ?>

    <form method="POST" enctype="multipart/form-data">
        <div>Выберите файл: <input type="file" name="photo" size="10"></div>
        <input type="submit" value="Отправить">
    </form>

</body>
</html>
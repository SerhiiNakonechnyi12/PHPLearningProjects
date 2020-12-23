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
        echo "Файл успешно загружен на сервер!<br/>";
        echo "<img src='images/".$name."' alt='photo' style='width: 200px; height: 150px'/>";
    }
    ?>
    <h2 class="my-5" text-align="center">Add Images</h2>
    <form method="POST" action="index.php?page=2" enctype="multipart/form-data">
        <div class="input__wrapper">
            <input type="file" name="photo" id="input__file" class="input__file-button btn btn-dark" accept="image/*" multiple>
            <!-- <label for="input__file" class="input__file-button btn btn-dark">
                <span class="input__file-button-text">Выберите файл</span>
            </label> -->
            
            <input type="submit" value="Отправить" class="btn btn-dark">
        </div>
    </form>
</body>
</html>



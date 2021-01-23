<?php
if(!isset($_POST["regbtn"])){
    ?>
    <form action="index.php?page=3" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="login">Login:</label>
    <input type="text" name="login" class="form-control">
    </div>
    <div class="form-group">
    <label for="pass1">Пароль:</label>
    <input type="password" name="pass1" class="form-control">
    </div>
    <div class="form-group">
    <label for="pass2">Подтвердите пароль:</label>
    <input type="password" name="pass2" class="form-control">
    </div>
    <div class="form-group">
    <label for="imagepath">Выберите аватар:</label>
    <input type="file" name="imagepath" class="form-control">
    </div>
    <input type="submit" value="Зарегистрироваться" class="btn btn-primary" name="regbtn">
    </form>
    
    <?php
}
else
{
    if(is_uploaded_file($_FILES["imagepath"]["tmp_name"])){
        $path = "images/". $_FILES["imagepath"]["name"];
        move_uploaded_file($_FILES["imagepath"]["tmp_name"], $path);
        $login = trim($_POST["login"]);
        $pass1 = trim($_POST["pass1"]);
        if(Tools::register($login, md5($pass1), $path)){
            echo "<h3/><span style='color: green'>Пользователь успешно добавлен!</span><h3/>";
        }
    }
}
?>
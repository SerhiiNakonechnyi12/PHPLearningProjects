<h2>Registration</h2>
<?
if(!isset($_POST["regbtn"])){
    ?>
    <form action="index.php?page=4" method="POST">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="passw1">Password:</label>
            <input type="password" name="passw1" class="form-control">
        </div>
        <div class="form-group">
            <label for="passw2">Confirm password:</label>
            <input type="password" name="passw2" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        <input type="submit" name="regbtn" value="Add user">
    </form>
    <?
}
else {
    if(register($_POST["login"], $_POST["passw1"], $_POST["email"])){
        echo "<h3><span style='color: green'>Пользователь добавлен!</span></h3>";
    }
}

?>
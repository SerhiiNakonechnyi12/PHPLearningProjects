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
            <label for="login">Password:</label>
            <input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="passw1">Confirm password:</label>
            <input type="password" name="passw1" class="form-control">
        </div>
        <div class="form-group">
            <label for="login">Email:</label>
            <input type="text" name="login" class="form-control">
        </div>
    </form>
    <?
}
else {
    if(register($_POST["name"], $_POST["passw1"], $_POST["email"])){
        echo "<h3><span style='color: green'>Пользователь добавлен!</span></h3>";
    }
}

?>
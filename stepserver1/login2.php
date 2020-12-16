<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?
    if(!isset($_POST["accept"]))
    {
        ?>
    <form method="POST">
        <div class="form-group" >
            <label for="login">Login:</label>
            <input type='text' name='login' class="form-control" /></div>
        <div class="form-group"><label for='passw'>Password:</label>
            <input type='password' name='passw' class="form-control" />
        </div>
        <input type='submit' name='accept' value='Login' class="btn btn-primary" />
    </form>
    <?
    }
    else
    {
        $login = $_POST["login"];
    $passw = $_POST["passw"];
    echo "Привет, ".$login;
    echo "Ваш пароль: ".$passw;
    }
    ?>
</body>

</html>
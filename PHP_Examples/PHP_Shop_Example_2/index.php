<?php
include_once("pages/classes.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="row"></header>
    <nav class="row">
    <div class="col-12">
    <?php
    include_once("pages/menu.php");
    ?>
    </div>
    <section class="row">
    <div class="col-12 mx-3">
    <?php
    $page=$_GET["page"];
    switch($page){
        case 1:
            include_once("pages/catalog.php");
            break;
        case 2:
            include_once("pages/cart.php");
            break;
        case 3:
            include_once("pages/registration.php");
            break;   
        case 4:
            include_once("pages/admin.php");
            break;
        default:
        include_once("pages/catalog.php");
    }
    ?>
    </div>
    <footer class="row align-bottom">
    <div class="col-12 ">
    IT STEP Academy Kryvyi Rih &copy;
    </div>
    </footer>
    </section>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
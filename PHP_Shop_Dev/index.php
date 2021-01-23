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
    <nav class="row"></nav>
    <div class="col-12"></div>
    <?php
    include_once("pages/menu.php")
    ?>
    <section class="row"></section>
    <div class="col-12 mx-3"></div>
    <?php
    $page=$_GET["page"];
    switch ($page) {
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
    <footer class="row"></footer>
    <div class="col-12">
    IT STEP Academy Kriviy Rig &copy;
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();
include_once("pages/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <head class="row">
        <div class="col-sm-12 col-md-12 col-lg-12"></div>
    </head>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
            include_once("pages/menu.php");
            ?>
        </div>
    </div>

    <!-- Блоки страны, города -->
    <div class="row" id="BlocksAdmin">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
            if (isset($_GET["page"])) {
                $page = $_GET["page"];
                if ($page == 1)
                    include_once("pages/tours.php");
                if ($page == 2)
                    include_once("pages/comments.php");
                if ($page == 3)
                    include_once("pages/registration.php");
                if ($page == 4)
                    include_once("pages/admin.php");
            }
            ?>
        </div>
    </div>
    <footer class="row align-bottom">
        <div class="col-sm-12 col-md-12 col-lg-12">
            IT STEP Academy Krivyi Rih &copy;
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
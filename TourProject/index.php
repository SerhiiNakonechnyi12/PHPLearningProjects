<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <header class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            </header>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
                <? 
                    include_once("pages/menu.php");
                    include_once("pages/functions.php");
                
                ?>
            </div>
        </div>
        <div class="row">
            <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?
                if(isset($_GET["page"])){
                    $page = $_GET["page"];
                    switch($page) {
                        case 1:
                            include_once("pages/home.php");
                            break;
                        case 2:
                            include_once("pages/addimage.php");
                            break;
                        case 3:
                            include_once("pages/gallery.php");
                            break;
                        case 4:
                            include_once("pages/registration.php");
                            break;
                    }
                }
                ?>
            </section>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<!-- http://phplearningprojects/Stepserver5/catalog/getitems -->
<!-- http://phplearningprojects/Stepserver5/home/getusers -->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
                <a class="nav-link" href="<?php echo site_url("home/index"); ?>">Главная</a>
                <a class="nav-link" href="<?php echo site_url("home/getusers"); ?>">Список пользователей</a>
                <a class="nav-link" href="<?php echo site_url("catalog/getitems"); ?>">Каталог</a>
            </div>
        </div>
    </nav>
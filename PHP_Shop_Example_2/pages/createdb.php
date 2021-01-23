<?php
include_once("classes.php");
$pdo = Tools::connect();
$roles = "CREATE TABLE Roles(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    role varchar(32) not null UNIQUE
    ) DEFAULT CHARSET 'UTF8'";
$customers = "CREATE TABLE Customers(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    login varchar(32) Not null UNIQUE,
    pass varchar(128),
    roleid int,
    FOREIGN KEY(roleid) REFERENCES Roles(id) ON UPDATE CASCADE,
    imagepath varchar(256),
    discount int DEFAULT 0,
    total double
    ) DEFAULT CHARSET 'UTF8'";
$categories = "CREATE TABLE Categories(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category varchar(32) Not null UNIQUE
    ) DEFAULT CHARSET 'UTF8'";
$items = "CREATE TABLE Items(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    itemName varchar(64) not null,
    catId int,
    FOREIGN KEY(catId) REFERENCES Categories(id) ON UPDATE CASCADE,
    priceIn double,
    priceSale double,
    info varchar(256),
    rate double,
    action int
    )  DEFAULT CHARSET 'UTF8'";
$images = " CREATE TABLE Images(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    itemId int,
    FOREIGN KEY(itemId) REFERENCES Items(id) ON DELETE CASCADE,
    imagepath varchar(256)
    ) DEFAULT CHARSET 'UTF8'";
$sales = "    CREATE TABLE SAles(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    itemId int,
    FOREIGN KEY(itemId) REFERENCES Items(id) ON UPDATE CASCADE,
    customerId int,
          FOREIGN KEY(customerId) REFERENCES Customers(id) ON UPDATE CASCADE,
        quantity int,
        date date
    ) DEFAULT CHARSET 'UTF8'";
    // $pdo->exec($roles);
    // $pdo->exec($customers);
    // $pdo->exec($categories);
    // $pdo->exec($items);
    // $pdo->exec($images);
    // $pdo->exec($sales);
    $ps1 =  $pdo->prepare("INSERT INTO Roles(role) VALUES(:role)");
    $ps1->execute(array("role"=>"Admin"));
    $ps2 =  $pdo->prepare("INSERT INTO Roles(role) VALUES(:role)");
    $role2 = "Customer";
    $ps2->bindParam(":role", $role2);
    $ps2->execute();
    //echo "Таблицы БД успешно созданы!";
    echo "Роли успешно добавлены!";
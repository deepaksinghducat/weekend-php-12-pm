<?php

spl_autoload_register(function ($class) {
    require  "./classes/" . $class . ".php";
});

$dataBaseClass = new Database();

$connection = $dataBaseClass->connect();

$userClass = new User($connection);

if (!isset($_GET['id']) && $_GET['id'] == '') {
    header("Location: users.php");
}

$result = $userClass->delete($_GET['id']);

header("Location: users.php");

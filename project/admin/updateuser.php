<?php

spl_autoload_register(function ($class) {
    require  "./classes/".$class.".php";
});

$dataBaseClass = new Database();

$connection = $dataBaseClass->connect();

$userClass = new User($connection);


if (isset($_POST)) {
    
    $data = $_POST;

    $data = array_merge($data, $_FILES);

    $result = $userClass->update($_POST['user_id'],$data);

    header("Location: users.php");
}

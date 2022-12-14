<?php

spl_autoload_register(function ($class) {
    require  "./classes/".$class.".php";
});

$dataBaseClass = new Database();

$connection = $dataBaseClass->connect();

$postClass = new Post($connection);

if (isset($_POST)) {

    $data = $_POST;

    $data = array_merge($data, $_FILES);

    $result = $postClass->store($data);
   
    header("Location: posts.php");
}

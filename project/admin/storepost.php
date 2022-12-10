<?php

require_once 'layouts/database.php';


if (isset($_POST)) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imagepath = '';

    if (isset($_FILES['image'])) {

        $imageName = $_FILES['image']['name'];

        $tmpname = $_FILES['image']['tmp_name'];

        $randomname = md5(rand(0, 20));

        $ext =  pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

        $dir = "uploads/" . $randomname . "." . $ext;

        if (move_uploaded_file($tmpname, $dir)) {
            $imagepath = $dir;
        }
    }

    $sql = "insert into posts(name,description,image_path) values('$name', '$description', '$imagepath')";

    $query = $connection->exec($sql);
   
    header("Location: posts.php");
}

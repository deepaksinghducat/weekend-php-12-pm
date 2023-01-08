<?php

spl_autoload_register(function ($class) {
    require  "./classes/".$class.".php";
});

$dataBaseClass = new Database();

$connection = $dataBaseClass->connect();

$postClass = new Post($connection);


if (isset($_POST)) {
    // $name = $_POST['name'];
    // $description = $_POST['description'];
    // $imagepath = '';
    // $id = $_POST['post_id'];
    // $previousImagePath = $_POST['previous_image_path'];

    // if ($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {

    //     $stmt = $connection->prepare("update posts set name=:name , description=:description where id=:id");
    //     $stmt->bindParam(":name", $name);
    //     $stmt->bindParam(":description", $description);
    //     $stmt->bindParam(":id", $id);

    //     $query = $stmt->execute();

    //     header("Location: posts.php");

    // }else {
      
    //     $imageName = $_FILES['image']['name'];

    //     $tmpname = $_FILES['image']['tmp_name'];

    //     $randomname = md5(rand(0, 20));

    //     $ext =  pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

    //     $dir = "uploads/" . $randomname . "." . $ext;

    //     if (move_uploaded_file($tmpname, $dir)) {
    //         $imagepath = $dir;

    //         $stmt = $connection->prepare("update posts set name=:name , description=:description, image_path =:image_path where id=:id");
    //         $stmt->bindParam(":name", $name);
    //         $stmt->bindParam(":description", $description);
    //         $stmt->bindParam(":image_path", $imagepath);
    //         $stmt->bindParam(":id", $id);
    
    //         $query = $stmt->execute();

    //         unlink($previousImagePath);
    //     }

    // } 
    
    $data = $_POST;

    $data = array_merge($data, $_FILES);

    $result = $postClass->update($_POST['post_id'],$data);

    header("Location: posts.php");
}

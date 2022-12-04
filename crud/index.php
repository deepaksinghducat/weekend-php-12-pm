<?php

// $_GET 
// $_POST
// $_FILES

// print_r($_GET);

$connection = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

if (isset($_POST['submit'])) {

    $file_path = '';

    if (isset($_FILES['file'])) {

        // $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        // $mimeType = ['png'];

        // if(! in_array($ext, $mimeType)) {
        //     $mimeTypeExplode = implode($mimeType);
        //     echo "Please enter the file with valid extension ";
        // }

        // if($_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
        //     echo "Please upload a file";
        // }

        $name = $_FILES['file']['name'];

        $tmp_name = $_FILES['file']['tmp_name'];

        $dir = 'uploads/' . $name;

        move_uploaded_file($tmp_name, $dir);

        $file_path = $dir;
    }

    $name = $_POST['name'];

    $sql = "insert into students(name,file_path) values('$name', '$file_path')";

    $query = $connection->exec($sql);

    if ($query) {
        echo "student inserted successfully";
    } else {
        echo "something went wrong";
    }
}

$data = [];


$sql = "select * from students";

$stmt = $connection->prepare($sql);

$query = $stmt->execute();

if ($query) {
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="file">file</label>
            <input type="file" name="file" id="file">
        </div>

        <input type="submit" name="submit" value="Submit">
    </form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $d['id'] ?></td>
                    <td><?= $d['name'] ?></td>
                    <td><img src="<?= $d['file_path'] ?>" alt="<?= $d['name'] ?>" /></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
<?php

require_once 'layouts/database.php';

if (!isset($_GET['id'])) {
    header("Location: posts.php");
}

$id =  (int) ($_GET['id']);

$stmt =  $connection->prepare("delete from posts where id =:id");
$stmt->bindParam(":id", $id);
$query = $stmt->execute();

header("Location: posts.php");

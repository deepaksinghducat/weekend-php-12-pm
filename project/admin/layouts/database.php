<?php 

require_once 'layouts/constant.php';

$hostName = SERVER_NAME;
$dbname = DATABASE_NAME;

$connection = new PDO("mysql:host=$hostName;dbname=$dbname", USER_NAME, PASSWORD);


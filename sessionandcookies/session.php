<?php 

session_start();

$_SESSION['full_name'] = "Deepak Singh Gusain";

var_dump($_SESSION);

echo $_SESSION['full_name'];

// session_destroy();

unset($_SESSION['full_name']);

var_dump($_SESSION['full_name']);

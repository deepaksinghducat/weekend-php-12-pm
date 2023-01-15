<?php 

session_start();

if(isset($_SESSION['current_user'])) {
    unset($_SESSION['current_user']);
}

session_destroy();

header("Location: ../login.php");
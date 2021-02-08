<?php 
    session_start();
    unset($_SESSION['reg']);
    header("Location: login.php");
?>
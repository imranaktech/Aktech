<?php 
session_start();
session_destroy();
header('location:login.php');
//session_unset($_SESSION['username']);
?>
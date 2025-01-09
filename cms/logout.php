<?php
session_start();

unset($_SESSION['PMCuserid']);
unset($_SESSION['category']);
unset($_SESSION['name']);

session_destroy();



header("Location:login.php");

exit;

?>
<?php
session_start();
$_SESSION['login'] = "Visiteur";
$_SESSION['password'] = '';
$_SESSION['name'] = "My_Web";
header('Location: menu.php');
?>

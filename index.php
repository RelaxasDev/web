<?php
session_start();
$_SESSION['login'] = 'Visiteur';
$_SESSION['password'] = '';
$_SESSION['name'] = "My_Web";
//$_SESSION['name'] = "u780352139_web";
header('Location: menu.php');
?>

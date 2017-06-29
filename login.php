<?php
session_start();
$name = $_SESSION['login'];
$password = $_SESSION['password'];
if ($_SESSION['login'] != "Visiteur")
{
  $sql = "SELECT * FROM Individu";
   $connexion = new PDO('mysql:host=localhost;dbname=My_Web', 'root', 'root');
  //$connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u780352139_web;charset=utf8','u780352139_root','Myphpsqlweb.');
  $reponse = $connexion->query($sql);
  while ($col = $reponse->fetch())
  {
    if ($col['name'] == $name && $col['password'] != $password)
    {
      header('Location: index.php');
    }
    else
    {
      header('Location: forum.php');
    }
  }
  header('Location: index.php');
?>

<?php
header('Location: ../connexion.php');
if(isset($_GET['nom']))
{
  $_SESSION['nom']= $_GET['nom'];
  echo ($_GET['nom']);
  return ($_GET['nom']);
}
exit();
?>

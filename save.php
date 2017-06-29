l<?php
if(isset($_GET['valider']))
{
  $age = NULL;
  $ville = NULL;
  $metier = NULL;
  $nom = NULL;
  $nom=$_POST['nom'];
  $age=$_POST['age'];
  $ville=$_POST['ville'];
  $metier=$_POST['metier'];
if ($nom != NULL && $age != NULL && $ville != NULL && $metier != NULL)
  echo "Salut $nom, tu as $age ans, tu habite à $ville et tu es $metier.";
}$connexion = new PDO('mysql:host=localhost;dbname=My_Web;charset=utf8', 'root', 'root');

$lol = new PDO('mysql:host=localhost;dbname=My_Web;charset=utf8', 'root', 'root');
//header('Location: menu.php');
$sql = "SELECT * FROM Individu";
$reponse = $lol->query($sql);
while ($donnees = $reponse->fetch())
{
  echo $donnees[0];

}
?>
$connexion = new PDO('mysql:host=localhost;dbname=u780352139_web;charset=utf8', 'u780352139_root', 'Myphpsqlweb.');



<?php
define('LOGIN','Relaxas');
define('PASSWORD','lol');
$message = '';

if (!empty($_POST))
{
	if (empty($_POST['login']))
	$message = 'Veuillez indiquer votre login svp !';
	elseif (empty($_POST['password']))
	$message = 'Veuillez indiquer votre mot de passe svp !';
	elseif ($_POST['login'] !== LOGIN)
	$message = 'Votre login est faux !';
	elseif ($_POST['password'] !== PASSWORD)
	$message = 'Votre mot de passe est faux !';
	else
	$message = 'Bienvenue '. LOGIN .' !';
}

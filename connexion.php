<?php
$message = '';
session_start();
if (!empty($_POST))
{
	$name = $_POST['login'];
	$password = $_POST['password'];
	if (empty($_POST['login']))
	$message = 'Veuillez indiquer votre login svp !';
	elseif (empty($_POST['password']))
	$message = 'Veuillez indiquer votre mot de passe svp !';
	else
		{
			if ($_POST['login'] != "Visiteur")
			{
			  $sql = "SELECT * FROM Individu";
			  $connexion = new PDO('mysql:host=localhost;dbname=My_Web', 'root', 'root');
				//$connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u780352139_web;charset=utf8','u780352139_root','Myphpsqlweb.');
			  $reponse = $connexion->query($sql);
			  while ($col = $reponse->fetch())
			  {
			    if ($col['login'] == $name && $col['password'] != $password)
					$message = 'Veuillez indiquer un bon mot de passe !';
					else if ($col['login'] == $name && $col['password'] == $password)
					$message = 'Bonjour !';
			  }
		}
	}
}
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/connexion.css"/>
		<title> Mon site </title>
	<body>
    <div class="titre">
			<a href="menu.php"> <p style="color:RED;font-size:50"> Mon super site !</p> </a>
		</head>
    </div>
		<div class="corps">
			<div class="liens">
				<a href="connexion.php"> Connexion </a>
				<a href="compte.php"> Mon compte </a>
				<a href="forum.php"> Forum </a>
			</div>
			<? if (($_SESSION) && ($_SESSION['login'] != "Visiteur")) : ?>
			<p><? echo $_SESSION['login']." vous êtes déjà connecté !"; ?></p>
			<p> <a href="index.php"> Se deconnecter ?</a></p>
		<? else : ?>
		<a href="register.php"> <p style="color:WHITE;text-center:left"> S'inscrire </p> </a>
			<p style="color:RED;font-size:30">Identification requise</p>
			<div class="mes_infos">
				<form method="post">
						<p><label for="login"> Mon nom :</label> <input type="text" name="login" id ="login" placeholder="Ex : Jean" size="20" /> </p>
						<p> <label for="password"> Mon code:</label> <input type="text" name="password" id ="password" placeholder="Ex : *****" size="20"/> </p>
						<p> <input type="submit" name="valider" id="submit" value="OK"/> </p>
				</form>
				<? if (!empty($message) && $message[0] != 'B') : ?>
				<p style="font-size:20"><?php echo $message; ?></p>
			  <? elseif (!empty($message) && $message[0] == 'B') : ?>
				<? $_SESSION['login'] = $_POST['login']; ?>
				<? $_SESSION['password'] = $_POST['password']; ?>
				<? header('Location: forum.php'); ?>
				<? endif; ?>
			<? endif; ?>
	 </div>
		</div>
	</body>
</html>

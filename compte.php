<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/compte.css"/>
		<title> Mon site </title>
	</head>
	<body>
    <div class="titre">
			<a href="menu.php"> <p style="color:RED;font-size:50"> Mon super site !</p></a>
    </div>
		<div class="corps">
			<div class="liens">
				<a href="connexion.php"> Connexion </a>
				<a href="compte.php"> Mon compte </a>
				<a href="forum.php"> Forum </a>
			</div>
				<? session_start(); ?>
				<? if (($_SESSION) && ($_SESSION['login'] != "Visiteur")) : ?>
				  <p> <? echo "Pseudo: ".$_SESSION['login']; ?></p>
					<p> <? echo "Mot de passe: ".$_SESSION['password']; ?></p>
			  <? else :?>
		     	<p> Merci de vous connecter !</p>
			  <? endif ?>
		</div>
	</body>
</html>

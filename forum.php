<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/myforum.css"/>
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
			<? if (($_SESSION) && (($login = $_SESSION['login']) != "Visiteur")) : ?>
			   <? echo "Bonjour $login ! Voici les membres :"; ?>
				 <? if ($_SESSION) : ?>
				   <? $sql = "SELECT * FROM Individu"; ?>
					 <? $connexion = new PDO('mysql:host=localhost;dbname=My_Web', 'root', 'root'); ?>
				   <? //$connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u780352139_web;charset=utf8','u780352139_root','Myphpsqlweb.'); ?>
				    <? $reponse = $connexion->query($sql); ?>
					<?while ($donnees = $reponse->fetch()) : ?>
					<? echo "$donnees[0], "; ?>
				  <? endwhile; ?>
			    <? endif; ?>
		    <? else : ?>
			   <p> <? echo "Merci de vous connecter !"; ?> </p>
			 <? endif; ?>
		</div>
	</body>
</html>

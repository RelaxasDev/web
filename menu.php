<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/main.css"/>
		<title> Mon site </title>
	</head>
	<body>
    <div class="titre">
			<a href="menu.php"> <p style="font-size:50;color:RED"> Mon super site !</p></a>
    </div>
		<div class="corps">
			<div class="liens">
				<a href="connexion.php"> Connexion </a>
				<a href="compte.php"> Mon compte </a>
				<a href="forum.php"> Forum </a>
			</div>
			<div>
				<? session_start(); ?>
				<? if ($_SESSION) : ?>
				 <p style="text-align:center"> Salut <?php echo $_SESSION['login']; ?> ! </p>
			 <? else : ?>
			  <? header('Location: index.php'); ?>
			<? endif; ?>
				<img src="https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider2.jpg" style="width:100%"/>
			</div>
		</div>
	</body>
</html>

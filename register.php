<?php
$message = '';
session_start();
if (!empty($_POST))
{
	if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['city']) || empty($_POST['job']))
	$message = 'Veuillez remplir tout les champs svp !';
	else
		{
			if ($_POST['login'] != "Visiteur")
			{
        $name = $_POST['login'];
			  $sql = "SELECT * FROM Individu";
				$connexion = new PDO('mysql:host=localhost;dbname=My_Web', 'root', 'root');
				//$connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u780352139_web;charset=utf8','u780352139_root','Myphpsqlweb.');
			  $reponse = $connexion->query($sql);
			  while ($col = $reponse->fetch())
			  {
			    if ($col['login'] == $name)
          {
            $message = 'Login déjà existant !';
            break ;
          }
			  }
        if ($message == '')
        {
          $message = "Bienvenue $login !";
          $req = $connexion->prepare('INSERT INTO Individu(login, password, city, job)
                                      VALUES(:login, :password, :city, :job)');
          $req->execute(array(
            'login' => $_POST['login'],
            'password' => $_POST['password'],
            'city' => $_POST['city'],
            'job' => $_POST['job'],
          ));
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
			<p style="color:RED;font-size:30">Veillez remplir le formulaire :</p>
			<div class="mes_infos">
				<form method="post">
						<p><label for="login"> Ton nom :</label> <input type="text" name="login" id ="login" placeholder="Ex : Jean" size="20" /> </p>
						<p> <label for="password"> Ton code :</label> <input type="text" name="password" id ="password" placeholder="Ex : *****" size="20"/> </p>
            <p> <label for="city"> Ta ville :</label> <input type="text" name="city" id ="city" placeholder="Ex : Paris" size="20"/> </p>
            <p> <label for="job"> Ton métier :</label> <input type="text" name="job" id ="job" placeholder="Ex : Commercial" size="20"/> </p>
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

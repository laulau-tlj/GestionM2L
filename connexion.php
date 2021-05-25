<?php
	//ouverture de session
	session_start();
	//inclure les pages de function et de la barre de navigation
	include 'navbar.php';
	include 'function.php';
	//si le bouton se connecter est enclenché
	if (isset($_POST['ok'])) {
		//on verifie si les cases sont vides
		if(vconn($_POST["nom"], $_POST["prenom"])) {
			//on recupre les valeurs entrer et les stock dans des variables
			$email = $_POST["email"];
			$mdp = $_POST["mdp"];
			// $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

			//connexion à la base de donnée en appelant la function concerner
			$bdd = connexion();
			//on selectionne dans la base de donnée les informations correspondantes à celle entrer par l'utilisateur
			$req = $bdd->prepare("SELECT * FROM user WHERE email=? and mdp=?");
			$req->execute(array($email, $mdp));
			//on compte si une ligne avec le résultat existe et la stock dans une variable
			$res = $req->rowCount();
			//on cherche la ligne correspondante à celle écrite par l'utilisateur
			$ligne = $req->fetch(PDO::FETCH_ASSOC);

			//si le compte est égal à 1
			if ($res == 1) {
				//on ouvre une session de navigation avec l'email en question
				$_SESSION["email"] = $ligne["email"];
				header("location:test.php");
			} else {
				//au cas ou le compte est différent de 1
				$erreur = "<h3> Erreur d'email' ou mot de passe !!!</h3>";
				echo $erreur;
			}
		} 
		else {
			echo "L'un des champs est vide, veuillez reprendre";
		}
		
	}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- [if IE]>
		<link rel="stylesheet"
		href=".\css\ie.css"
	<![end if]-->
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

	<section style="background-color: #F3EEF9; height: auto; text-align: left; padding-top: 0; padding-left: 5.5em;padding-right: 5.5em;padding-bottom: 0; margin: 0;">
		<br><br>
		<h2 align="center" style="color: purple; font-size: 1.5em;">Connexion</h2>
		<br>
		<div class="conteneur">
			<div>
				<form method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Adresse email</label><br>
						<input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
					</div>
					<br>
					<div class="form-group">
						<label for="exampleInputPassword1">Mot de passe</label><br>
						<input type="password" id="exampleInputPassword1" name="mdp">
					</div>
					<br>
					<button id="btn-search" type="submit" value="envoyer2" name="ok">Se connecter</button>
				</form>
			</div>
			<div>
				<a href="index.php"><img src="img/logo3.png"></a>
			</div>
		</div>
	</section>


	<?php
		include 'footer.php';
	?>
</body>

</html>
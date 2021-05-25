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
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>
	<?php 
		include 'navbar.php';
		require "function.php";
		function debug($variable){
			echo '<pre>'.print_r($variable, true ).'</pre>';
		}
	?>

	<section style="background-color: #F3EEF9; height: auto; text-align: left; padding-top: 0; padding-left: 5.5em;padding-right: 5.5em;padding-bottom: 0; margin: 0;">
		<br>
		<h2 align="center" style="color: purple; font-size: 1.5em;">Inscription</h2>

		<br><br>
		<?php
			//si le bouton s'inscrire est enclencher
            if (isset($_POST["confirm"])) {
				//on verifie si les inputs sont vides
                if (verify($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["mdp"],$_POST["adresse"],$_POST["complement"],$_POST["ville"],$_POST["cpostal"],$_POST["pays"],$_POST["vcondition"])) {
                    //on recupère et met les informations dans des variables
					$nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $email = $_POST["email"];
                    $mdp = $_POST["mdp"];
                    $adresse = $_POST["adresse"];
                    $complement = $_POST["complement"];
                    $ville = $_POST["ville"];
                    $cpostal = $_POST["cpostal"];
                    $pays = $_POST["pays"];

					//connexion à la base de donnée en fesant appel à la function correspondante
                    $bdd = connexion();
					//on verifie si l'email a déjà utilisé pour une inscription précédente 
                    if (mailVerif($email)){
						//insertion des données dans la base de donnée
                        $requete = "INSERT INTO user(nom,prenom,email,adresse,complement,mdp,cpostal,ville,pays) VALUES (?,?,?,?,?,?,?,?,?)";
                        $load = $bdd->prepare($requete);
                        // $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
                        $exe = $load->execute(array($nom,$prenom,$email,$adresse,$complement,$mdp,$cpostal,$ville,$pays));
                        if ($exe) {
							//si l'inscription est réussite
                            echo "Inscription réussite";
                        }
						else {
							//si l'inscription a échouée
							echo "Inscription échouée";
						}
                    }
                    else {
						//si l'email a déjà été utilisé
                        $sms = "L'émail est déjà utilisé, veuillez renseigner un nouveau";
                        echo $sms;
                    }
                }
                else {
					//si l'un des input est vide
                    echo "L'un des champs est vide, veuillez reprendre";
                }
            }
		?>

		<div class="conteneur">
			<div>
				<form action="subscribe.php" method="POST">
					<div class="form-row">
						<div class="form-group">
							<label for="inputfirstname4">Prénom : </label>
							<input type="text" id="inputfirstname4" name="prenom" required>
						</div>
						<div class="form-group">
							<label for="inputlastname4">Nom : </label>
							<input type="text" id="inputlastname4" name="nom" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group">
							<label for="inputEmail4">Email : </label>
							<input type="text" id="inputEmail4" name="email">
						</div>
						<div class="form-group">
							<label for="inputPassword4">Mot de passe : </label>
							<input type="password" id="inputPassword4" name="mdp">
						</div>
						<br>
					</div>

					<div class="form-row">
						<div class="form-group">
							<label for="inputAddress">Adresse : </label>
							<input type="text" id="inputAddress" placeholder="28 Main St" name="adresse">
						</div>
						<div class="form-group">
							<label for="inputAddress2" >Complément : </label>
							<input type="text" id="inputAddress2" placeholder="Appartment, studio,..." name="complement">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group">
							<label for="inputCity">Ville : </label>
							<input type="text" id="inputCity" name="ville">
						</div>
						<div class="form-group">
							<label for="inputZip">Code postal : </label>
							<input type="text" id="inputZip" name="cpostal">
						</div>
					</div>

					<div class="form-group">
						<div class="form-group">
							<label for="inputState">Pays : </label>
							<select id="inputState" name="pays">
								<option selected>FRANCE</option>
								<option>Belgique</option>
								<option>Espagne </option>
								<option>Angleterre</option>
								<option>Sénégal</option>
								<option>...</option>
							</select>
						</div>
					</div>
				
					<input type="checkbox" id="gridCheck" value="check" name="vcondition">
					conditions
		
					<br><br>
					<button id="btn-search" type="submit" value="envoyer" name="confirm">S'inscrire</button>
				</form>
			</div>

			<div>
				<a href="index.php"><img src="img/logo3.png"></a>
			</div>
		</div>
		<br>
	</section>

	<?php
		include 'footer.php';
	?>
</body>
</html>
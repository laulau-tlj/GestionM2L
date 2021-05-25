<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- [if IE]>
		<link rel="stylesheet"
		href=".\css\ie.css"
	<![end if]-->
	<title>m2l | Reservation</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>
	<?php
	// Inclure la navbar ainsi que le fichier de connexion
	include 'navbar.php';
	include 'function.php';
	$bdd= connexion();
	// Condition
	if(isset($_POST["oki"])) {
		//Récupération des valeurs du formulaire
		$nom=$_POST["nom"];
		$auteur=$_POST["auteur"];
		$date=$_POST["date"];
		#la requette d'ajout
		$requette = "INSERT INTO reservation (NomSalle, NomFormateur, DateFormation) VALUES ('$nom', '$auteur', '$date')";
		#On execute la requette 
		$resultat = $bdd->query($requette);
	}
	?>
	<div class="frm">
		
    	<form name="exe" action="reservation.php" method="post">
 		
			<div class="container" >
				<div class="row">
					<form action="/" method="post">

						<div class="col-md-4">
							<h2>Ajouter une réservation de salle</h2> 
							<div class="row">
								<div class="form-group col-xs-6">
									<label for="e1">Nom de la salle</label>
									<input type="text" class="form-control" id="nom" name="nom" required autofocus>
								</div>
								<div class="form-group col-xs-6">
									<label for="e2">Nom du formateur</label>
									<input type="text" class="form-control" id="auteur" name="auteur" required>		
								</div>	
							</div>			

							<div class="form-group">
								<label for="e4">Date de la formation</label>
								<input type="text" class="form-control" id="date" name="date" required placeholder="YYYY/MM/DD">
							</div>
							<br>
							<button type="submit" class="btn btn-primary btn-block" name="oki">Valider</button>	
						</div>

					</form>
				</div>
			</div>
			
	</form>

      </div>
      
      
      			<!-- Récupération de la liste des exercices  -->
      			<?php 	
					#la requette d'affichage
					$requette1 = "SELECT * FROM reservation";
					#On execute la requette 
					$resultat1 = $bdd->query($requette1);
     	 			# On récupère les résultats de la requête et on les mets dans le tableau
					  $données = $resultat1->fetchAll();
					  foreach ($données as $ligne) {
						  $numero = $ligne['NumReserv'];
						  $nom = $ligne['NomSalle'];
						  $auteur = $ligne['NomFormateur'];
						  $date = $ligne['DateFormation'];
					  }
					  ?>
	<div class="grid">
		<table  cellspacing="0">
			<thead>
				<tr>
					<th>N° réservation</th>
					<th>Nom de la Salle</th>
					<th>Nom du formateur</th>
					<th>date de la formation</th>
					<th colspan="2">Les actions</th>
				</tr>
			</thead>
			<tbody>			
				<tr>
					<td>
						<?php echo $numero ?>
					</td>
					<td>
						<?php echo $nom ?>
					</td>
					<td>
						<?php echo $auteur ?>
					</td>
					<td>
						<?php echo $date ?>
					</td>	
					
					<td>
						<a href="delete.php?NumReserv=<?php echo $ligne['NumReserv']?>">Supprimer</a>
					</td>
					<td>
						<a href="update.php?NumReserv=<?php echo $ligne['NumReserv']?>">Modifier</a>
					</td>
				</tr>
      		</tbody>
      	</table>
    </div>

</body>
</html>
	<?php 
		//include 'footer.php';
	?>
</body>
</html>
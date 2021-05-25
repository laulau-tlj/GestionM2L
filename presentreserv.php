<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- [if IE]>
		<link rel="stylesheet"
		href=".\css\ie.css"
	<![end if]-->
	<title>Système de réservation</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<?php
	include 'navbar.php';
	?>

	<div class="sys-reservation">
		<h3>
			Système de réservation
		</h3>
		<p>
			Ce système permet aux utilisateurs de la maison des ligues (M2L) à réserver des salles à leurs clients.
			Ca peut être une salle de réunions, amphithéâtre, restaurations, ou bien d'autre. Ce système met en
			avant un site de réservation de salle qui est accessible par intranet ou internet. Les réservations sont
			payantes et facturées par la Région aux utilisateurs. L'administration de la maison des ligues communique
			aux utilisateurs les informations nécessaires à cette facturation hebdomadairement.
			Concernant l’amphi, il y a ½ journée gratuite par an pour chaque ligue et comité départemental (CD). Les
			salles de réunions d’étage sont mises librement à la disposition des occupants de l’étage. Les salles de
			réunions sont réservables via l’Intranet, avec différents services associés dont certains sont payants. Il
			existe quatre niveaux de tarification. En 2009, nous avons reçu 2732 réunions et 47316 personnes ont assisté
			à ces réunions.
			Les ligues peuvent réserver sans payer jusqu’à concurrence de six réservations par an, hors amphi. Les clubs 
			sportifs et les comités départementaux ont un premier niveau de tarification. Les associations, les lycées ou 
			encore les collèges sont sur un second niveau de tarification. Enfin, tous les autres organismes, y compris des 
			sociétés privées, sont sur le niveau de tarification le plus haut. Pour toutes les structures qui ne sont pas 
			hébergées, les locaux étant publics, il faut faire signer entre les parties une « convention d’occupation 
			temporaire ». La réservation se fait dans l’Intranet directement pour les structures hébergées ou par le 
			secrétariat pour une demande extérieure. Les informations sont ensuite transmises au Conseil Régional qui 
			émet un « titre de paiement », c’est-à-dire une facture d’occupation de locaux. Ces titres sont envoyés 
			directement par le Conseil Régional aux utilisateurs.
		</p>
		<a href="reservation.php">Réserver</a>
	</div>



	<?php
	include 'footer.php';
	?>
</body>

</html>
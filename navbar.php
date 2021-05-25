<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
	<!-- NAVBAR -->
	<nav class="navigateur">
		<div class="nav-content">
			<div class="logo">
				<img src="img/logo3.png" width="90" height="70">
			</div>

			<div class="list">
				<ul class="menu">
					<li><a href="index.php">Accueil</a></li>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">Présentation</a>
						<div class="dropdown-content">
							<a class="dropdown-item" href="presentmatoss.php">Matériels Informatique</a>
							<a class="dropdown-item" href="locaux.php">Nos Locaux</a>
							<a class="dropdown-item" href="presentperso.php">Personnel</a>
							<a class="dropdown-item" href="presentservice.php">Services ligues</a>
							<a class="dropdown-item" href="presentstructure.php">Structure</a>
							<a class="dropdown-item" href="presentstatjur.php">Statut Juridique</a>
							<a class="dropdown-item" href="index2.php">Accueil 2</a>
						</div>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="reservation.php">Réservation</a>
					</li>

					<li>
						<a href="offres.php">Offres demplois</a>
					</li>
				</ul>
			</div>

			<div class="recherche">
				<form method="POST" action="">
					<input placeholder="Search">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>

			<div class="user">
				<ul class="menu">
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn"><i class="fas fa-user"></i></a>
						<div class="dropdown-content">
							<a class="dropdown-item" href="subscribe.php">S'inscrire</a>
							<a class="dropdown-item" href="connexion.php">Se connecter</a>
						</div>
					</li>
				</ul>
			</div>
		</div>

	</nav>

	<script src="./js/m2l.js"></script>
</body>

</html>
<!-- fontawsome's link -->
<!-- <script src="https://kit.fontawesome.com/d57bd52145.js" crossorigin="anonymous"></script> -->
<!-- /fontawsome's link -->

<!-- NAVBAR -->
<!-- <nav class="navbar navbar-expand-lg navbar-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		&nbsp;
		<li class="nav-item dropdown">
			<a class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Presentations&nbsp;<i class="fas fa-caret-down"></i>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="presentm2l.php">m2l</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentstructure.php">Structure</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentstatjur.php">Statut juridique</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentreserv.php">Réservation</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentperso.php">Personnel</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentLocaux.php">Nos locaux</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentmatoss.php">Matériels Informatique</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="presentservice.php">Services ligues</a>
			</div>
		</li>

		<ul class="navbar-nav mr-auto">
			&nbsp;<li class="nav-item active">
				<a class="nav-link" href="blog.php">Blog<span class="sr-only">(current)</span></a>
			</li>&nbsp;
			<li class="nav-item">
				<a class="nav-link" href="reservation.php">Réservation</a>
			</li>

			<li class="nav-item">
				<a class="nav-link " href="offres.php" tabindex="-1" aria-disabled="true">Offres demplois</a>
			</li>
		</ul>
		<form method="POST" action="">
			<input id="input-search" type="search" placeholder="Search">
			<button id="btn-search" type="submit"><i class="fas fa-search"></i></button>
		</form>&nbsp;&nbsp;&nbsp;



		<div class="btn-group dropdown">
			<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user"></i>
			</button>
			<div class="dropdown-menu dropdown-menu-lg-right">
				<a class="dropdown-item" href="subscribe.php">sinscrire</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="connexion.php">se connecter</a>
				<button class="dropdown-item" type="button"></button>
				<button class="dropdown-item" type="button"></button>
			</div>
		</div>

	</div>
</nav> -->
<!-- /NAVBAR -->


<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<?php ?>
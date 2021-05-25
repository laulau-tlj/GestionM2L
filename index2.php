<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index2.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">
                <img src="img/logblanc.png" width="90" height="70">
            </div>
            <div class="list">
                <ul class="menu">
                    <li><a href="index2.php">Accueil</a></li>
                    <li class="dropdown"><a href="javascript:void(0)">Présentation</a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="presentmatoss.php">Matériels Informatique</a>
                            <a class="dropdown-item" href="locaux.php">Nos Locaux</a>
                            <a class="dropdown-item" href="presentperso.php">Personnel</a>
                            <a class="dropdown-item" href="presentservice.php">Services ligues</a>
                            <a class="dropdown-item" href="presentstructure.php">Structure</a>
                            <a class="dropdown-item" href="presentstatjur.php">Statut Juridique</a>
                        </div>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="reservation.php">Réservation</a></li>
                    <li><a href="offres.php">Offres d'emploi</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home">
        <style>
            .home {
                background : url('img/paysage1.jpg');
                display : flex;
                height : 100vh;
                background-size : cover;
            }
        </style>
    </section>
    <?php 
		include 'footer.php';
	?>
</body>
</html>
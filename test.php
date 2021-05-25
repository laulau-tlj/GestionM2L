<?php
    //ouverture de session
    session_start();
    //inclure les pages de function et de la barre de navigation
    include 'navbar.php';
    include 'function.php';
    //si le bouton se connecter est enclenché
    if (isset($_POST['deconn'])) {
        //on dirige vers la page de deconnexion
        header("location:deconnexion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Bienvenue la connexion à réussis
    <form action="test.php" method="post">
        <button id="btn-search" type="submit" value="envoyer2" name="deconn">Déconnexion</button>
    </form>
</body>

</html>
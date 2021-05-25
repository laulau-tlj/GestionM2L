<?php
try{
    #Connexion à la page fonctions.php
    require 'fonctions.php';
    #Variable de connexion à la base de connexion
    $bdd = getBdd();
    #La requête 
    $id =$_GET["NumReserv"];
    $requete = "DELETE FROM adherent WHERE reservation='$id'";
    #Execution de la requête 
    $resultat = $bdd->query($requete);
    if ($resultat){
        echo 'suppression effectué';
        header("location:reservation.php");

    }
}
catch (Exception $e) {
    die ('fatal erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
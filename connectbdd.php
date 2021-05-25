<?php
//1. Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=localhost;dbname=bddm2l", "root", "");
}catch(PDOException $e){
    echo 'La connexion à la bdd a echoué';
}?>	
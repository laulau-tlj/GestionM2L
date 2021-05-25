<?php
    function verify($name,$surname,$mail,$password,$adress,$compliment,$town,$zip,$country) {
        if (!empty($name) && !empty($surname) && !empty($mail) && !empty($password) && !empty($adress) && !empty($compliment) && !empty($town) && !empty($zip) && !empty($country)) {
            return true;
        }
        else {
            return false;
        }
    }

    $nom = "boss";
    $biss = "";
    $nom = "boss";
    $biss = "";

    if (verify($biss)) {
        echo "it exists";
    }
    else {
        echo "doesnt";
    }


?>


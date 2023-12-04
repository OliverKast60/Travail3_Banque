<?php
    include('../configurations/connect.php');
    $afficheCompte =$bdd->query("SELECT* FROM  comptes");
    if(isset($_GET["resil"])){
        //requette pour changer l'etat de l'element de la table
        $update = "UPDATE comptes SET `etat` = 'Bloque' WHERE `num_compte` ='".$_GET["resil"]."'";
        $update=mysqli_query($con,$update);
    }

    if(isset($_GET["annul"])){
        //requette pour changer l'etat de l'element de la table
        $update = "UPDATE comptes SET `etat` = 'En Cours' WHERE `num_compte` ='".$_GET["annul"]."'";
        $update=mysqli_query($con,$update);
    }

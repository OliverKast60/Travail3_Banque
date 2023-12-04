<?php
include '../configurations/config.php';
include '../models/compte.php';
$num_compte = $_POST['num_compte'];
$date_creation = $_POST['date_creation'];
$etat = $_POST['etat'];
$Numclient = $_POST['client'];
$solde = $_POST['solde'];
$type_cpt = $_POST['type'];

$compte = new Compte($num_compte,$date_creation, $etat, $Numclient, $solde, $type_cpt);

if($compte -> enregistrer_compte()){
    header("location:../views/creer_compte.php");
}

<?php
include '../configurations/config.php';
include '../models/retrait.php';
$num_retrait = $_POST['num_retrait'];
$date_retrait = $_POST['date_retrait'];
$montant = $_POST['montant'];
$Numclient = $_POST['client'];
$Numcompte = $_POST['compte'];

$retrait = new Retrait($num_retrait,$date_retrait, $montant, $Numclient, $Numcompte);

if($retrait -> enregistrer_retrait()){
    header("location:../views/retrait.php");
}

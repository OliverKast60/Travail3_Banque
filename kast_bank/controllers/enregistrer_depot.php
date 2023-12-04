<?php
include '../configurations/config.php';
include '../models/depot.php';
$num_depot = $_POST['num_depot'];
$date_depot = $_POST['date_depot'];
$montant = $_POST['montant'];
$Numclient = $_POST['client'];
$Numcompte = $_POST['compte'];

$depot = new Depot($num_depot,$date_depot, $montant, $Numclient, $Numcompte);

if($depot -> enregistrer_depot()){
    header("location:../views/depot.php");
}

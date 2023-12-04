<?php
include '../configurations/config.php';
include '../models/client.php';
$num_client = $_POST['num_client'];
$nom_client = $_POST['nom'];
$prenom_client = $_POST['prenom'];
$sexe = $_POST['sexe'];
$adresse_client = $_POST['adresse'];
$code_poste = $_POST['code_poste'];
$num_tel_client = $_POST['telephone'];
$date_naiss = $_POST['datenaiss'];
$e_mail_client = $_POST['e_mail_client'];
$image_client = $_FILES["image_client"]["name"];
move_uploaded_file($_FILES ["image_client"]["tmp_name"],"../photos_clients/".$_FILES["image_client"]["name"]);

$client = new Client($num_client,$nom_client, $prenom_client, $sexe, $adresse_client, $code_poste, $num_tel_client, $date_naiss, $e_mail_client, $image_client);

if($client -> enregistrer_client()){
    header("location:../views/creer_client.php");
}

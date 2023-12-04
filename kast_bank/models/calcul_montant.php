<?php

$result1 = $bdd->query('SELECT SUM(montant) AS somme1 FROM depots WHERE montant > 0');
$row1 = mysqli_fetch_assoc($result1);
echo "La Somme deposee en banque  est de : ";echo $row1['somme1'];echo " "; echo "$";

echo "<br/>";

    $result = $bdd->query('SELECT SUM(solde) AS somme FROM comptes WHERE etat = "En Cours"');
    $row = mysqli_fetch_assoc($result);
    echo "La Somme disponible en banque  est de : ";echo $row['somme']; echo " "; echo "$";

    echo "<br/>";

    $result = $bdd->query('SELECT SUM(montant) AS somme FROM retraits WHERE 1');
    $row = mysqli_fetch_assoc($result);
    echo "La Somme totale retiree en banque  est de : ";echo $row['somme']; echo " "; echo "$";

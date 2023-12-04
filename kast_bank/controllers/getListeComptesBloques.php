<?php
    //include pour se connecter a la base de donnees
    include '../configurations/config.php';
    //include pour utiliser les fonctions de la classe Proprietaire
    include '../models/compte.php';

    function getListeComptesBloques(){
        //fonction pour prendre la liste des comptes
        return Compte::getComptesBloques();
    }

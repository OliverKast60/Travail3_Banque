<?php
    include '../configurations/config.php';
    include '../models/compte.php';

    function getListeComptes(){
        return Compte::getComptes();
    }

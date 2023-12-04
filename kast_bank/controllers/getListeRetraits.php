<?php
    include '../configurations/config.php';
    include '../models/retrait.php';

    function getListeRetraits(){
        return Retrait::getRetraits();
    }

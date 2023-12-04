<?php
    include '../configurations/config.php';
    include '../models/depot.php';

    function getListeDepots(){
        return Depot::getDepots();
    }

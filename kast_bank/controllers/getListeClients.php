<?php
    include '../configurations/config.php';
    include '../models/client.php';

    function getListeClients(){
        return Client::getClients();
    }

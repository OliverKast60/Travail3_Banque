<?php
    //Petit script pour se connecter a la base de donnees
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','kast_bank');
    $bdd=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

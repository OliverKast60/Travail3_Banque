<?php
    $dsn = 'mysql:host=localhost;dbname=kast_bank';
    $login = 'root';
    $password = '';

	$db = new PDO($dsn, $login, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

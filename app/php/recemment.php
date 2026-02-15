<?php
    // A revoir

    $host = "db"; 
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);

    if (!$bdd) {
        die('Echec de connexion : ' . mysqli_connect_error());
    } 

    $query = "SELECT titre, img, id, description FROM media ORDER BY id DESC LIMIT 3;";
    $result = mysqli_query($bdd, $query);
    $recemment = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $recemment[] = $row;
    }
?>
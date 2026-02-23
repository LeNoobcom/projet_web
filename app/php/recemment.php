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

    $query = "SELECT m.titre AS titre,m.type AS type, m.img AS img, m.id, AVG(n.note) AS note_moyenne FROM media m LEFT JOIN note n ON m.id = n.idmedia GROUP BY m.id ORDER BY m.id DESC LIMIT 3;";
    $result = mysqli_query($bdd, $query);
    $recemment = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $recemment[] = $row;
    }
?>
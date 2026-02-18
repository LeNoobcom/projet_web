<?php
    $host = "db"; 
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);

    if (!$bdd) {
        die(json_encode(['error' => 'Echec de connexion']));
    }

    $query = 'SELECT 
    m.id, 
    m.titre, 
    m.img, 
    AVG(n.note) AS moyenne 
    FROM media m
    LEFT JOIN note n ON m.id = n.idmedia 
    GROUP BY m.id;'; 
    $result = mysqli_query($bdd, $query);

    $tous_les_medias = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $tous_les_medias[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($tous_les_medias);

    mysqli_close($bdd);
?>
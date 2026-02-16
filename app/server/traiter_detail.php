<?php

    $host = "db"; 
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);

    if (!$bdd) {
        die('Echec de connexion : ' . mysqli_connect_error());
    } 
    $id = $_GET['id'];

    $query = "SELECT m.type AS type, m.titre AS titre,m.img AS img, m.createur AS createur, m.description AS description, m.id AS id, AVG(n.note) AS note_moyenne FROM media m LEFT JOIN note n ON m.id = n.idmedia WHERE m.id=$id GROUP BY m.id ORDER BY note_moyenne DESC LIMIT 3;";
    $result = mysqli_query($bdd, $query);
    $detail = mysqli_fetch_assoc($result);

?>
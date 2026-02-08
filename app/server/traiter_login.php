<?php
    $host = "db"; 
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);

    if (!$bdd) {
        die('Echec de connexion : ' . mysqli_connect_error());
    }

    mysqli_close($bdd);

    header('Location: ../index.php');
    exit();
?>
<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['erreur'] = "Veuillez vous connecter";
        header('Location: ../html/login.php');
        exit();
    }

    $host = "db";
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);
    if (!$bdd) {
        die('Echec de connexion : ' . mysqli_connect_error());
    }
    $username = $_SESSION['username'];
    $iduser="SELECT id FROM user WHERE username='$username'";
    $result_user = mysqli_query($bdd, $iduser);
    $row = mysqli_fetch_assoc($result_user);
    $iduser = $row['id'];
    $id = $_POST['id'];
    $rating = !empty($_POST['rating']) ? (int)$_POST['rating'] : 0;
    $commentaire = mysqli_real_escape_string($bdd, $_POST['commentaire'] ?? '');
    $verif_note = "SELECT * FROM note WHERE iduser=$iduser AND idmedia=$id";
    $result_verif = mysqli_query($bdd, $verif_note);
    if (mysqli_num_rows($result_verif) >0) {
        $query = "UPDATE note SET note=$rating, commentaire='$commentaire' WHERE iduser=$iduser AND idmedia=$id";
        $result = mysqli_query($bdd, $query);
        header("Location: ../html/detail.php?id=$id");
        mysqli_close($bdd);
        exit();
    }

    $query = "INSERT INTO note (idmedia, iduser, note, commentaire) VALUES ($id, $iduser, $rating, '$commentaire')";
    $result = mysqli_query($bdd, $query);

    header("Location: ../html/detail.php?id=$id");

    mysqli_close($bdd);

?>
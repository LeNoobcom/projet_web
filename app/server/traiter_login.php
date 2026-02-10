<?php
    // 1. Démarrer la session en tout premier pour transmettre le message d'erreur
    session_start();

    $host = "db"; 
    $user = "php_docker";
    $pass = "password";
    $base = "db";

    $bdd = @mysqli_connect($host, $user, $pass, $base);

    if (!$bdd) {
        die('Echec de connexion : ' . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST['email'];
        $password = $_POST['password']; 

        if (!empty($email) && !empty($password)) {
            // Note: Attention aux injections SQL ici (voir plus bas)
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($bdd, $query);
            $user_data = mysqli_fetch_assoc($result);

            // 2. ON VÉRIFIE D'ABORD si $user_data n'est pas vide (null)
            if ($user_data && $email === $user_data['email'] && $password === $user_data['password']) {
                // SUCCÈS : Pas d'echo ici !
                header('Location: ../index.php');
                exit();
            } else {
                // ÉCHEC : On stocke le message en session au lieu de faire un echo
                $_SESSION['erreur'] = "Mauvais identifiants";
                header('Location: ../html/login.php'); // Redirige vers un .php pour afficher l'erreur
                exit();
            }
        }
    }

    mysqli_close($bdd);
?>
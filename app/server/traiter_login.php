<?php
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
            $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($bdd, $query);
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data && $email === $user_data['email'] && $password === $user_data['password']) {
                header('Location: ../index.php');
                exit();
            } else {
                $_SESSION['erreur'] = "Mauvais identifiants";
                header('Location: ../html/login.php'); 
                exit();
            }
        }
    }

    mysqli_close($bdd);
?>
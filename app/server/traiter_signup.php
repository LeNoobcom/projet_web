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
        
        $username = $_POST['username'];
        $signupEmail = $_POST['email']; 
        $signupPassword = $_POST['password']; 
        $signupPasswordConfirm = $_POST['password_confirm']; 

        if (!empty($username) && !empty($signupEmail) && !empty($signupPassword) && !empty($signupPasswordConfirm)) {
            $query = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($bdd, $query);
            if (mysqli_num_rows($result) === 0) {
                $query = "SELECT * FROM user WHERE email = '$signupEmail'";
                $result = mysqli_query($bdd, $query);
                if (mysqli_num_rows($result) === 0) {
                    if ($signupPassword === $signupPasswordConfirm) {
                        $user_data = mysqli_fetch_assoc($result);
                    } 
                    else {
                    $_SESSION['confirm'] = "Les deux mots de passe sont différents !";
                        header('Location: ../html/signup.php'); 
                        exit();
                    }
                }
                else {
                    $_SESSION['account'] = "Un compte existant a été trouvé !";
                    header('Location: ../html/signup.php'); 
                    exit();
                } 
            } 
            else {
                $_SESSION['username'] = "Nom d'utilisateur déjà choisi";
                header('Location: ../html/signup.php');   
                exit();
            }
        }
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$signupEmail', '$signupPassword')";
        mysqli_query($bdd, $sql);
        header('Location: ../../index.php');   
    }
    mysqli_close($bdd);
?>
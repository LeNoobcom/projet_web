<?php
    session_set_cookie_params(0);
    session_start(); 
    if (empty($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter - RateIt</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="auth-bg page-overlay page-centered" style="display:flex; flex-direction:column; min-height:100vh;">
    <!-- En-tête -->
    <header class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand mb-0 h1 text-danger fw-bold">RateIt</a>
        </div>
    </header>
    <?php
        if (isset($_SESSION['valide'])) {
                echo '<div style="
                    position: absolute; 
                    top: 20px; 
                    right: 20px; 
                    background-color: #1e293b; /* Bleu nuit très sombre */
                    color: #4ade80;           /* Vert menthe doux */
                    padding: 16px 24px;
                    border-radius: 12px;
                    border: 1px solid rgba(74, 222, 128, 0.2); /* Bordure verte très discrète */
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5);
                    font-family: sans-serif;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    z-index: 9999;
                    animation: slideIn 0.5s ease-out;
                ">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    
                    <span style="font-weight: 500;">Compte créé avec succès !</span>
                </div>

                <style>
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                </style>' . $_SESSION['valide'] . '</p>';
            unset($_SESSION['valide']); 
        }
    ?>
    <!-- Contenu principal -->
    <main class="py-5 d-flex align-items-center justify-content-center flex-grow-1 relative" style="margin-top:3em;">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" 
                        style="background: linear-gradient(to bottom right, #16222a, #3a6073 ); backdrop-filter: blur(10px);">
                        
                        <div class="card-body p-4 p-sm-5 text-white">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold text-danger italic" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                                    RATE<span class="text-white">IT</span>
                                </h2>
                                <p class="text-white-50 small">Ravi de vous revoir !</p>
                                <?php
                                    if (isset($_SESSION['erreur'])) {
                                        echo '<p style="color:red;">' . $_SESSION['erreur'] . '</p>';
                                        unset($_SESSION['erreur']); 
                                    }
                                ?>
                            </div>
                            <form method="POST" action="../server/traiter_login.php">
                                <div class="form-floating mb-3">
                                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                    <input type="email" name="email" class="form-control text-white border-secondary" 
                                        style="background-color: rgba(0,0,0,0.5);"
                                        id="loginEmail" placeholder="nom@exemple.com" required>
                                    <label for="loginEmail" class="text-white-50">Adresse email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control text-white border-secondary" 
                                        style="background-color: rgba(0,0,0,0.5);"
                                        id="loginPassword" placeholder="Mot de passe" required>
                                    <label for="loginPassword" class="text-white-50">Mot de passe</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check m-0">
                                        <input class="form-check-input bg-dark border-secondary" type="checkbox" id="rememberMe" name="remember">
                                        <label class="form-check-label small text-white-50" for="rememberMe">
                                            Se souvenir
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold shadow rounded-3 py-3 mb-3"
                                        style="background: linear-gradient(45deg, #e50914, #b20710); border:none;">
                                    SE CONNECTER
                                </button>
                            </form>

                            <div class="text-center mt-3">
                                <p class="text-white-50 small">Pas encore membre ? 
                                    <a href="signup.php" class="text-white fw-bold text-decoration-none border-bottom border-danger">S'inscrire</a>
                                </p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="../index.php" class="text-white-50 text-decoration-none small hover-white">
                                    <i class="bi bi-arrow-left"></i> ← Retour à la galerie
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <p>&copy; 2026 RateIt. Tous droits réservés.</p>
        <p>Notez vos films, séries et jeux favoris</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - RateIt</title>
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

    <!-- Contenu principal -->
    <main class="py-5 d-flex align-items-center justify-content-center flex-grow-1" style="margin-top:2em">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" 
                        style="background: linear-gradient(to bottom right, #3a6073, #16222a); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1) !important;">
                        
                        <div class="card-body p-4 p-sm-5 text-white">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold text-danger italic" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                                    REJOINDRE <span class="text-white">RATEIT</span>
                                </h2>
                                <p class="text-white-50 small">Créez votre profil de critique dès maintenant.</p>
                            </div>

                            <form method="POST" action="../server/traiter_signup.php">
                                
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control text-white border-secondary" 
                                        style="background-color: rgba(0,0,0,0.4);"
                                        id="signupUsername" placeholder="Pseudo" required>
                                    <label for="signupUsername" class="text-white-50">Nom d'utilisateur</label>
                                    <?php
                                        if (isset($_SESSION['username'])) {
                                            echo '<p style="color:red;">' . $_SESSION['username'] . '</p>';
                                            unset($_SESSION['username']); 
                                        }
                                    ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control text-white border-secondary" 
                                        style="background-color: rgba(0,0,0,0.4);"
                                        id="signupEmail" placeholder="nom@exemple.com" required>
                                    <label for="signupEmail" class="text-white-50">Adresse email</label>
                                    <?php
                                        if (isset($_SESSION['account'])) {
                                            echo '<p style="color:red;">' . $_SESSION['account'] . '</p>';
                                            unset($_SESSION['account']); 
                                        }
                                    ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" class="form-control text-white border-secondary" 
                                                style="background-color: rgba(0,0,0,0.4);"
                                                id="signupPassword" placeholder="Mot de passe" required>
                                            <label for="signupPassword" class="text-white-50">Mot de passe</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password_confirm" class="form-control text-white border-secondary" 
                                                style="background-color: rgba(0,0,0,0.4);"
                                                id="signupPasswordConfirm" placeholder="Confirmer" required>
                                            <label for="signupPasswordConfirm" class="text-white-50">Confirmer</label>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    if (isset($_SESSION['confirm'])) {
                                        echo '<p style="color:red;">' . $_SESSION['confirm'] . '</p>';
                                        unset($_SESSION['confirm']); 
                                    }
                                ?>
                                <div class="form-check mb-4 px-1 ms-3">
                                    <input class="form-check-input bg-dark border-secondary" type="checkbox" id="agreeTerms" name="terms" required>
                                    <label class="form-check-label small text-white-50" for="agreeTerms">
                                        J'accepte les <a class="text-danger text-decoration-none cgu_class">conditions d'utilisation</a>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold shadow rounded-3 py-3 mb-3"
                                        style="background: linear-gradient(45deg, #e50914, #b20710); border:none;">
                                    CRÉER MON COMPTE
                                </button>
                            </form>

                            <div class="text-center mt-3">
                                <p class="text-white-50 small">Déjà parmi nous ? 
                                    <a href="login.php" class="text-white fw-bold text-decoration-none border-bottom border-danger">Se connecter</a>
                                </p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="../index.php" class="text-white-50 text-decoration-none small">
                                    ← Retour à la galerie
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="cgu" class="window_hidden" style="display:flex; position:fixed; background-color:transparent;justify-content:center;align-items:center">
        <div style="max-width: 700px; display:flex; flex-direction:column; background: linear-gradient(to bottom right, #3a6073, #16222a); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1);"class="cgu_window_on">
            <section class="cgu-section">
                <h2 style="margin-bottom: 10px;">📜 Conditions Générales d’Utilisation (CGU) – RateIt</h2>
                <div style="margin-bottom: 25px; font-style: italic;">Dernière mise à jour : 16 février 2026</div>

                <p style="margin-bottom: 30px;">
                    Bienvenue sur <strong>RateIt</strong>, l’espace où votre avis a plus de poids qu'un script de blockbuster. 
                    En utilisant notre site, vous acceptez sans réserve les présentes conditions. Si vous n'êtes pas d'accord, 
                    vous pouvez toujours retourner lire le résumé au dos des DVD.
                </p>

                <div style="margin-bottom: 30px;">
                    <h3>1. Objet du Service</h3>
                    <p>RateIt est une plateforme communautaire permettant aux utilisateurs de :</p>
                    <ul style="line-height: 1.6;">
                        <li>Consulter des fiches de films, séries et jeux vidéo.</li>
                        <li>Attribuer des notes et rédiger des critiques.</li>
                        <li>Partager leur passion (ou leur déception) avec d'autres membres.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>2. Inscription et Compte Utilisateur</h3>
                    <p>Pour noter et commenter, la création d’un compte est obligatoire.</p>
                    <ul style="line-height: 1.6;">
                        <li><strong>Identifiants :</strong> Vous êtes responsable de la confidentialité de votre mot de passe. Si votre chat commande accidentellement 40 Blu-ray via un lien partenaire car vous avez laissé votre session ouverte, nous ne sommes pas responsables.</li>
                        <li><strong>Âge :</strong> L'utilisation du site est réservée aux personnes de 13 ans et plus.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>3. Code de Conduite et Modération</h3>
                    <p>La liberté d'expression est reine, mais la courtoisie est la loi.</p>
                    <ul style="line-height: 1.6;">
                        <li><strong>Respect :</strong> Les insultes, propos haineux ou discriminatoires envers les œuvres ou les autres membres sont proscrits.</li>
                        <li><strong>Spoilers :</strong> Il est strictement obligatoire d'utiliser la balise [SPOILER] pour toute révélation majeure. Toute personne révélant la fin d'un jeu ou d'un film sans prévenir risque un bannissement immédiat (et une malédiction sur sept générations).</li>
                        <li><strong>Contenu :</strong> Vous restez propriétaire de vos écrits, mais vous concédez à RateIt le droit de les diffuser sur la plateforme.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>4. Propriété Intellectuelle</h3>
                    <ul style="line-height: 1.6;">
                        <li><strong>Le Site :</strong> Le design, le logo et l'interface de RateIt nous appartiennent. Pas touche.</li>
                        <li><strong>Contenu tiers :</strong> Les affiches de films, jaquettes de jeux et bandes-annonces sont la propriété de leurs studios respectifs et sont utilisées ici à des fins d'illustration et de critique.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>5. Responsabilité et "Mauvais Goût"</h3>
                    <ul style="line-height: 1.6;">
                        <li><strong>Objectivité :</strong> RateIt ne peut être tenu responsable si vous regardez un film noté 5 étoiles et que vous le trouvez détestable. Le goût est subjectif, la déception fait partie de la vie.</li>
                        <li><strong>Disponibilité :</strong> Nous faisons de notre mieux pour que le site soit en ligne 24h/24, mais nous ne sommes pas à l'abri d'un bug technique ou d'une invasion de zombies serveurs.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>6. Protection des Données (RGPD)</h3>
                    <p>Nous collectons le strict minimum pour faire fonctionner votre profil :</p>
                    <ul style="line-height: 1.6;">
                        <li>Vos données ne seront jamais vendues à des sociétés de production pour vous forcer à regarder des remakes inutiles.</li>
                        <li>Consultez notre Politique de Confidentialité pour en savoir plus.</li>
                    </ul>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3>7. Modifications des conditions</h3>
                    <p>
                        Nous nous réservons le droit de modifier ces CGU à tout moment. Si vous continuez à utiliser le site 
                        après une modification, c'est que vous êtes d'accord (ou que vous ne lisez pas les petites lignes, 
                        comme tout le monde).
                    </p>
                </div>
            </section>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <p>&copy; 2026 RateIt. Tous droits réservés.</p>
        <p>Notez vos films, séries et jeux favoris</p>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/afficher_cgu.js"></script>
</body>

</html>
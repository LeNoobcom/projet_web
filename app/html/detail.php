<?php 
    session_start();
    include('../server/traiter_detail.php'); 

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RateIt - Notation de films, séries et jeux</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    
    <!-- En-tête -->
    <header class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand mb-0 h1 text-danger fw-bold">RateIt</a>
            <div class="d-flex gap-2">
                <?php 
                    if (isset($_SESSION['username'])){
                        echo '<span style="color: white; margin-right: 10px;">Bonjour, <strong>' . htmlspecialchars($_SESSION['username']) . '</strong></span><a href="../server/traiter_logout.php" class="btn btn-sm btn-outline-light">Déconnexion</a>';
                    }
                    else{   
                        echo "<a href='html/login.php' class='btn btn-outline-danger btn-login'>Se connecter</a> <a href='html/signup.php' class='btn btn-danger btn-signup'>S'inscrire</a>";
                    }
                ?>
            </div>
        </div>
    </header>   
    <!-- Contenu principal -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <form class="row g-3" method="post" action="../server/traiter_note.php" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <img src="<?= '../css/images/' . $detail['img'] ?>" class="img-fluid shadow" alt="<?= $detail['titre'] ?>">
                    </div>
                    <input type="hidden" name="id" value="<?= $detail['id'] ?>">
                    <div class="col-md-5">
                        <h1 class="mb-3 fw-bold"><?= $detail['titre'] ?></h1>
                        <p><strong>Type :</strong> <?= $detail['type'] ?></p>
                        <p><strong>Créateur :</strong> <?= $detail['createur'] ?></p>
                        <p><strong>Description :</strong> <?= $detail['description'] ?></p>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 étoiles">★</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 étoiles">★</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 étoiles">★</label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 étoiles">★</label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 étoile" >★</label>
                        </div>
                        <textarea class="form-control bg-white text-dark" id="commentContent" name="commentaire" rows="3" placeholder="Laissez un commentaire..."></textarea>
                        <button type="submit" class="btn btn-danger mt-2">Noter</button>
                    </div>
                    <div class="col-md-3">
                        <h2 class="mb-3 fw-bold">Note moyenne </h2>
                        <div class="progress vertical-progress">
                            <div class="progress-bar  bg-warning"style="width: <?= $detail['note_moyenne'] * 20 ?>%;" aria-valuenow="<?= $detail['note_moyenne'] ?>" aria-valuemin="0" aria-valuemax="5">★ <?= number_format((float) $detail['note_moyenne'], 1, '.', ''); ?></div>
                        </div>
                    </div>
                </form>  
                <div class="col-md-12 mt-4">
                    <h3 class="mb-3 border-bottom border-3 border-dark">Commentaires</h3>
                    <div class="comment mb-3 p-3 bg-light rounded shadow">
                        <?php foreach ($commentaires as $commentaire): ?>
                            <div class="mb-3 d-flex justify-content-between align-items-start border-bottom border-1 pb-3">
                                <div>
                                    <strong><?= htmlspecialchars($commentaire['username']) ?></strong> :
                                    <?= htmlspecialchars($commentaire['commentaire']) ?>
                                </div>

                                <div class="text-warning fw-bold" style="margin-left:1em; text-align:center; font-size:2em;">
                                    <bold><?= (int)$commentaire['note'] ?> ★</bold>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <p>&copy; 2026 RateIt. Tous droits réservés.</p>
        <p>Notez vos films, séries et jeux favoris</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
<?php
 session_start();
// Inclure les informations de connexion à votre base de données

$host = "db"; 
$user = "php_docker";
$pass = "password";
$base = "db";
// Connexion à la base de données MySQL
$bdd =  @mysqli_connect($host, $user, $pass, $base);

if (!$bdd) {
    die('Echec de connexion : ' . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Obtenir le nom de l'image sans l'extension
    $file_basename = pathinfo($_FILES["affiche"]["name"], PATHINFO_FILENAME);
    // Recuperer les autres données du formulaire
    $type = $_POST['type'];
    $titre = $_POST['titre'];
    $date_sortie = $_POST['date_sortie'];
    $createur = $_POST['createur'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];


    // Renommer l'image en y ajoutant le nom de base et la date et l'heure
    $file_extension = pathinfo($_FILES["affiche"]["name"], PATHINFO_EXTENSION);
    if ($file_basename != "") {
            $new_image_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;
    }
    else {
            $new_image_name = "noposter.jpg";
    }




    if (!empty($type) && !empty($titre) && !empty($date_sortie) && !empty($genre)) {
        $query = "SELECT * FROM media WHERE titre = '$titre' and type = '$type' and date_sortie = '$date_sortie' and genre = '$genre'";
        $result = mysqli_query($bdd, $query);
        if (mysqli_num_rows($result) === 0) {
            $user_data = mysqli_fetch_assoc($result);

            $sql = "INSERT INTO media (type, titre, date_sortie, createur, genre, description, img) VALUES ('$type', '$titre', '$date_sortie', '$createur', '$genre', '$description', '$new_image_name')";
            mysqli_query($bdd, $sql);
        } 
    }

    



    // Déplacer l'image vers le dossier "images"
    $target_directory = "../css/images/";
    $target_path = $target_directory . $new_image_name;
    move_uploaded_file($_FILES["affiche"]["tmp_name"], $target_path);
    //redirection
    header("Location: ../index.php");



    // Fermer la connexion à la base de données
    mysqli_close($bdd);
}
?>
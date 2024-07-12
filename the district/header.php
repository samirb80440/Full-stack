<?php
// Démarre la session
session_start();

// Inclut le fichier DAO.php
require_once('DAO.php');

// Informations de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "theDistrict";

// Essaye de se connecter à la base de données
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configure le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Affiche un message d'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>District</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="shortcut icon" type="image/png" href="assets/images_the_district/the_district_brand/favicon.png">

     <?php
// Array associant les fichiers CSS à chaque page
$cssFiles = array(
    '/index.php' => 'media.css',
    '/Plat.php' => 'Plat.css',
    '/Categorie.php' => 'Catégorie.css',
    '/commande.php' => 'commande.css',
    '/contact.php' => 'contact.css',
    '/commandescript.php'=>'commandescript.css'
    // Ajoutez d'autres associations ici
);

$currentUri = $_SERVER['REQUEST_URI'];
$cssFile = 'media.css'; // Fichier CSS par défaut

foreach ($cssFiles as $uri => $file) {
    if ($currentUri == $uri) {
        $cssFile = $file;
        break;
    }
}

echo '<link rel="stylesheet" href="assets/css/' . $cssFile . '">'; ?>

</head>
<body>

<header id="navbar">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <!-- Logo and navigation links -->
    </nav>

    <!-- Bannière vidéo ou image en fonction de la page -->
    <?php
if ($_SERVER['REQUEST_URI'] == "/index.php") {
    // Afficher la bannière vidéo sur la page d'accueil
    echo '<div id="parent">
        <div id="banniere" class="row g-0">
            <video id="video" class="col-12" src="assets/videos/123629-728697948_small.mp4"
            style="width: 100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
        <div id="recherche" class="d-none d-sm-flex">
            <form class="col-12" role="search">
                <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
            </form>
        </div>
    </div>';
} elseif (!in_array($_SERVER['REQUEST_URI'], ["/commande.php", "/commandescript.php"]) &&!isset($_GET['platcom'])) {
     // Afficher la bannière image sur les autres pages (sauf la page de commande)
     echo '<div class="container-fluid p-0">
     <div id="parent">
         <div id="banniere" class="row g-0">
             <img class="imagebanniere img-fluid" src="assets/images_the_district/fosyyyy.jpg" alt="banniere">
         </div>
     </div>
 </div>';
} else {
 // Ne pas afficher de bannière sur la page de commande
 // Vous pouvez laisser ce bloc vide ou ajouter du contenu spécifique pour la page de commande
}
?>
</header>
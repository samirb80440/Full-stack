<?php
// Crée une nouvelle connexion à la base de données avec PDO
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');

// Définit le mode d'erreur pour afficher les erreurs SQL
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Vérifie si l'ID du disque est passé en paramètre
if (isset($_GET["disc_id"])) {
    // Prépare une requête SQL pour sélectionner un disque en fonction de son ID
    $requete = $db->prepare("select * from disc where disc_id=?");
    
    // Exécute la requête en passant l'ID du disque en paramètre
    $requete->execute(array($_GET["disc_id"]));

    // Récupère le résultat de la requête sous forme d'objet
    $disc = $requete->fetch(PDO::FETCH_OBJ);

    // Vérifie si le disque existe
    if ($disc) {
        $disc_id = $disc->disc_id;
        $disc_title = $disc->disc_title;
        $disc_year = $disc->disc_year;
        $disc_picture = $disc->disc_picture;
    } else {
        $message = "Le disque n'existe pas.";
    }
} else {
    $message = "Veuillez entrer un numéro de disque.";
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
</head>
<body>
    <form method='GET'>
        <label for='disc_id'>Numéro de disque souhaité</label>
        <input type="number" name='disc_id' id='disc_id'>
        <button type="submit">Envoyer</button>
    </form>

    <?php if (isset($message)): ?>
        <p><?= $message ?></p>
    <?php elseif (isset($disc_id)): ?>
        <div>Disc N° <?= $disc_id ?></div>
        <div>Disc name <?= $disc_title ?></div>
        <div>Disc year <?= $disc_year ?></div>
        <img src='pictures/<?= $disc_picture;?>' width='200px' alt='...'>
    <?php endif; ?>
</body>
</html>
<?php

// Inclusion du header

require_once('header.php');


// Récupération des valeurs des champs de formulaire

$nameartist = $_POST['ajoutartist'];
$nametitle = $_POST['ajouttitle'];


// Vérification si un fichier est uploadé et différent de l'image actuelle

$verif = $conn->prepare("SELECT disc_picture FROM disc WHERE disc_title = :name OR disc_id = :id");
$verif->bindParam(':name', $nameartist);
$verif->bindValue(':id', $_POST['modif']);
$verif->execute();
$disc_picture = $verif->fetch()['disc_picture'];

// Récupération de l'ID de l'artiste

$stock = $conn->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindValue(':artist', $nameartist);
$stock->execute();
$artist_id = $stock->fetch()['artist_id'];

// Récupération de l'ID de l'artiste

$stock = $conn->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindValue(':artist', $nameartist);
$stock->execute();
$artist_id = $stock->fetch()['artist_id'];



// Traitement de l'upload de fichier
if ($_FILES['ajoutimage']['name'] != null) {

    $file = $_FILES['ajoutimage'];

    $tmp_name = $file['tmp_name'];

    $name = $file['name'];

    $type = $file['type'];

    $size = $file['size'];

    echo $type;


    // Vérification du type de fichier et de la taille

    if ($type != 'image/jpeg' && $type != 'image/png') {

        echo 'Erreur : seul les fichiers JPEG et PNG sont autorisés.';

        exit;

    }


    if ($size > 1024 * 1024) { // 1Mo

        echo 'Erreur : le fichier est trop volumineux.';

        exit;

    }


    // Définition du chemin de destination sécurisé

    $destination = '../../pictures/' . uniqid() . '_' . $name;


    // Déplacement du fichier uploadé

    if (move_uploaded_file($tmp_name, $destination)) {

        echo 'Fichier uploadé avec succès !';

    } else {

        echo 'Erreur lors de l\'upload du fichier.';

    }

}

// Insertion de l'artiste dans la base de données

$stmt = $conn->prepare("INSERT INTO artist (artist_name) SELECT (:artist) WHERE NOT EXISTS (SELECT * FROM artist WHERE artist_name = :artist);");
$stmt->bindValue(':artist', $nameartist);
$stmt->execute();

//si il n'y pas de nouvelle image envoyer ont remet l'ancienne
if($destination == null){
    $destination = $disc_picture;
}

// Mise à jour du disque dans la base de données

$stmt = $conn->prepare("UPDATE disc 
                        SET disc_title = :title ,disc_year = :year, artist_id = :artist_id , disc_picture = :picture, disc_label = :label, disc_genre = :genre, disc_price = :prix 
                        WHERE disc_id = :id");


$stmt->bindValue(':id', $_POST['modif']);
$stmt->bindValue(':title', $_POST['ajouttitle']);
$stmt->bindValue(':year', $_POST['ajoutyear']);
$stmt->bindValue(':prix', $_POST['ajoutprix']);
$stmt->bindParam(':picture', $destination);
$stmt->bindValue(':label', $_POST['ajoutlabel']); 
$stmt->bindValue(':genre', $_POST['ajoutgenre']); 
$stmt->bindParam(':artist_id', $artist_id);

//affiche un message d'erreur si il y a un probleme
try {

    $stmt->execute();

} catch (PDOException $e) {

    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();

}
    header('Location:index.php')
?>
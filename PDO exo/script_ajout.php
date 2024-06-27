<?php
require_once('header.php');

if (isset($_FILES['ajoutimage'])) {

    $file = $_FILES['ajoutimage'];
    $tmp_name = $file['tmp_name'];
    $name = $file['name'];
    $type = $file['type'];
    $size = $file['size'];

    // Vérification du type de fichier et de la taille

    if ($type != 'image/jpeg' && $type != 'image/png') {
        echo 'Erreur : seul les fichiers JPEG et PNG sont autorisés.';
        exit;
    }

    if ($size > 1024 * 1024) { // 1Mo
        echo 'Erreur : le fichier est trop volumineux.';
        exit;
    }


    // Définition du chemin de destination sécurisé (ça met un nom de chemin unique)

    $destination = '../../pictures/' . uniqid() . '_' . $name;


    // Déplacement du fichier uploadé

    if (move_uploaded_file($tmp_name, $destination)) {

        echo 'Fichier uploadé avec succès !';

    } else {

        echo 'Erreur lors de l\'upload du fichier.';

    }

}

$name = $_POST['ajoutartist'];

//INSERT un nom d'artiste si il n'existe pas dans la base de donnée.
$stmt = $conn->prepare("INSERT INTO artist (artist_name) SELECT (:artist) WHERE NOT EXISTS (SELECT * FROM artist WHERE artist_name = :artist);");//ne peut pas mettre values quand il y a un where
$stmt->bindValue(':artist', $name);
$stmt->execute();

//recupere un l'id de l'artiste pour pouvoir le reutiliser apres dans insert de disc
$stock = $conn->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindValue(':artist', $name);
$stock->execute();

//stock de l'id de l'artiste
$artist_id = $stock->fetch()['artist_id'];

//regarde si les données correspond a un disc deja rentrer
$stmt = $conn->prepare("SELECT * FROM disc WHERE EXISTS (SELECT * FROM disc WHERE disc_title = :title AND disc_year = :year);");
$stmt->bindValue(':title', $_POST['ajouttitle']);
$stmt->bindValue(':year', $_POST['ajoutyear']);
$stmt->execute();
$disc_id = $stmt->fetch()['disc_id'];
echo $disc_id;

//fait l'insert si le disc n'a pas etatis trouver 
if($disc_id==NULL){
$stmt = $conn->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :year, :picture, :label, :genre, :prix, :artist_id);");
$stmt->bindValue(':title', $_POST['ajouttitle']);
$stmt->bindValue(':year', $_POST['ajoutyear']);
$stmt->bindValue(':prix', $_POST['ajoutprix']);
$stmt->bindParam(':picture', $destination);
$stmt->bindValue(':label', $_POST['ajoutlabel']); 
$stmt->bindValue(':genre', $_POST['ajoutgenre']); 
$stmt->bindParam(':artist_id', $artist_id);//bind param permet de transmettre une variable php en parametre utile pour mettre un int
$stmt->execute();}
?>
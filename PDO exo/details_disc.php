<!DOCTYPE html>
<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //requete pour la table disc
    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
</head>
<html>
<body>
    <form method='GET'>
    <label for='disc_id' >numéros de disque souhaiter</label><input type="textarea" row='4' cols='2' name='disc_id' id='disc_id'>
    <button type="submit">envoyer</button>  
    
    <div>Disc N° <?= $disc->disc_id ?></div>
    <div>Disc name <?= $disc->disc_title ?></div>
    <div>Disc year <?= $disc->disc_year ?></div>
    <img src='../pictures/<?php echo $disc->disc_picture;?>' width='200px' alt='...'>
</body>
</html>
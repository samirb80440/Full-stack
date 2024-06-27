<?php
  // Crée une nouvelle connexion à la base de données avec PDO
  $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');

  // Définit le mode d'erreur pour afficher les erreurs SQL
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prépare une requête SQL pour sélectionner un disque en fonction de son ID
  $requete = $db->prepare("select * from disc where disc_id=?");

  // Exécute la requête en passant l'ID du disque en paramètre
  $requete->execute(array($_GET["disc_id"]));

  // Récupère le résultat de la requête sous forme d'objet
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
    <img src='pictures/<?php echo $disc->disc_picture;?>' width='200px' alt='...'>
</body>
</html>
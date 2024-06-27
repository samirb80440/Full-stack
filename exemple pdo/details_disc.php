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
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <form method=GET><input type=text name=disc_id ></form>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_title ?>
    Disc year <?= $disc->disc_year ?>
</body>
</html>
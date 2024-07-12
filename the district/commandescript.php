<?php 
require_once("header.php")
?>

<?php 
  // Préparer une requête SQL pour sélectionner les données du plat correspondant à l'ID stock
  $stmt = $conn->prepare('SELECT * FROM plat WHERE id = :id;');

  // Lier le paramètre :id à la valeur de $_POST['stock']
  $stmt->bindParam(':id', $_POST['stock']);

  try {
    // Exécuter la requête SQL
    $stmt->execute();
  } catch (PDOException $e) {
    // Afficher un message d'erreur si la requête échoue
    echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
  }

  // Récupérer les données du plat
  $commande = $stmt->fetch();

  // Créer une chaîne de caractères contenant les informations de la commande
  $infoscommande = "\nnom et prenom :".$_REQUEST['nomprenom'].", email :".$_REQUEST['email'].", telephone :".$_REQUEST['tel'].", adresse du client :".$_REQUEST['adresse'].", date et heure de la commande :".date("d/m/Y H-m-s").
  " plat commander : ".$commande['libelle']." nombre commander : ".$_REQUEST['quantite']." prix payer :".$commande['prix'] * $_REQUEST['quantite'];

  // Afficher un message indiquant que la livraison est estimée à 30 minutes
  echo '<div class="row justify-content-center couleur body ">la livraison de votre commande est estimer a  '.date('H:i:s', strtotime('+30 minutes', strtotime(date('H:i:s'))))." elle sera livrer au nom de ".$_REQUEST["nomprenom"]." a l'adresse ".$_REQUEST["adresse"]."</div>";

  // Ouvrir le fichier commande.txt en mode écriture seule
  $fp = fopen("commande.txt", "a"); 

  // Écrire les informations de la commande dans le fichier
  fputs($fp, $infoscommande); 

  // Fermer le fichier
  fclose($fp);
?>

<!-- Ajouter un tag meta pour rediriger vers index.php après 30 secondes -->
<meta http-equiv="refresh" content="30; URL=index.php">

<?php
// Inclure le fichier footer.php
require_once("footer.php")
?>
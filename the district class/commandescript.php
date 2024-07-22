<?php 
require_once("header.php");
require('class/DAO.php');
require_once 'class/mail.php';

  $p = new requete();
  $p->setConnection($servername,$dbname,$username,$password);
  $id = intval($_POST['stock']);
  $p->setSelectone('plat',$id);
  $commande = $p->getSelectall('one');
 unset($p);
 
 // $date = date("Y-m-d H:m:s-0000");
$dateliv = date('H:i:s', strtotime('+30 minutes', strtotime(date('H:i:s'))));

    // calcule de la somme a regler
    $total = $commande['prix'] * $_REQUEST['quantite'];
    // Récupérer les données du plat
 

  // Créer une chaîne de caractères contenant les informations de la commande
  $infoscommande = "\nnom et prenom :".$_REQUEST['nomprenom'].", email :".$_REQUEST['email'].", telephone :".$_REQUEST['tel'].", adresse du client :".$_REQUEST['adresse'].", date et heure de la commande :".date("d/m/Y H-m-s").
  " plat commander : ".$commande['libelle']." nombre commander : ".$_REQUEST['quantite']." prix payer :".$commande['prix'] * $_REQUEST['quantite'];

  // Afficher un message indiquant que la livraison est estimée à 30 minutes
  echo '<div class="row justify-content-center couleur body ">la livraison de votre commande est estimer a  '.date('H:i:s', strtotime('+30 minutes', strtotime(date('H:i:s'))))." elle sera livrer au nom de ".$_REQUEST["nomprenom"]." a l'adresse ".$_REQUEST["adresse"]."</div>";

  //appel de la fonction pour envoyer un mail
    envoiemail($_REQUEST['adresse'],$_REQUEST['email'],$_REQUEST['nomprenom'],$_REQUEST['quantite'],$total,$commande['libelle'],$dateliv);
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
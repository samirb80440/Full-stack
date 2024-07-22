<?php
require_once("header.php");
require('class/DAO.php');
require_once 'class/mail.php';


$p = new requete();
$p->setConnection($servername, $dbname, $username, $password);
$id = intval($_POST['stock']);
$p->setSelectone('plat', $id);
$commande = $p->getSelectall('one');
unset($p);

// Créer une chaîne de caractères contenant les informations de la commande
$infoscommande = "nom et prenom :" . $_REQUEST['nomprenom'] . ", email :" . $_REQUEST['email'] . ", telephone :" . $_REQUEST['tel'] . ", adresse du client :" . $_REQUEST['adresse'] . ", date et heure de la commande :" . date("d/m/Y H-i-s") . " plat commander : " . $commande['libelle'] . " nombre commander : " . $_REQUEST['quantite'] . " prix payer :" . $commande['prix'] * $_REQUEST['quantite'] . "\n";

// Afficher un message indiquant que la livraison est estimée à 30 minutes
echo '<div class="row justify-content-center couleur body ">la livraison de votre commande est estimée à ' . date('H:i:s', strtotime('+30 minutes', strtotime(date('H:i:s')))) . " - elle sera livrée au nom de " . $_REQUEST["nomprenom"] . " à l'adresse " . $_REQUEST["adresse"] . '</div>';


$textmail = 'votre commande de '.$_REQUEST['quantite'].' '.$commande['libelle'].' au nom de '.$_REQUEST['nomprenom'].' est en preparation elle sera livrée a l\'adresse '.$_REQUEST['adresse'];
//appel de la fonction pour envoyer un mail
envoiemail($textmail,$_REQUEST['email'],$_REQUEST['nomprenom']);

// Ouvrir le fichier commande.txt en mode écriture seule
$fp = fopen("commande.txt", "a");

// Écrire les informations de la commande dans le fichier
fputs($fp, $infoscommande);

// Fermer le fichier
fclose($fp);

// Calculer le total de la commande
$total = $commande['prix'] * $_REQUEST['quantite'];

$ajout = new Ajoutcommande($commande['id'], $_REQUEST['quantite'], $total, 'En préparation', $_REQUEST['nomprenom'], $_REQUEST['tel'], $_REQUEST['email'], $_REQUEST['adresse']);
$ajout->setConnection($servername, $dbname, $username, $password);
$ajout->setAjout();

// Ajouter un tag meta pour rediriger vers index.php après 30 secondes
echo '<meta http-equiv="refresh" content="30; URL=index.php">';

// Inclure le fichier footer.php
require_once("footer.php");
?>
<?php 
session_start();

//echo 'la livraison de votre commande est estimer a  '.date('H:i:s', strtotime('+30 minutes', strtotime(date('H:i:s'))))." elle sera livrer au nom de ".$_REQUEST["nom"]." a l'adresse ".$_REQUEST["adresse"];

$infoscommande = "\nnom:".$_REQUEST['nom']."prenom:".$_REQUEST['prenom'].", email :".$_REQUEST['Email'].", telephone :".$_REQUEST['tel'].",demande du client :".$_REQUEST['demande'].", date et heure de la commande :".date("d/m/Y H-m-s");

     // Ouverture en écriture seule 
     $fp = fopen("AAA-MM-JJ-HH-MM.txt", "a"); 
     
     // Ecriture du contenu ($myVar) 
     fputs($fp, $infoscommande); 
     
     // Fermeture du fichier  
     fclose($fp);
?>
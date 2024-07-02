<?php

require_once('POO/classes/employe.php');

$em = new Employe();
$em->setNommage("Lebowski");
$em->setPrenomage("Jeff");
$em->setdateembauche("05/02/1999");
$em->setposte("Ouvrier");
$em->setsalaire("1600");
$em->setservice("Batiment");
$em->afficherAnneedeservice();
$em->setprime();

foreach($em as $key =>$value){
    echo $key." : ".$value."<br>";
 };

 
?>
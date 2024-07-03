<?php

require_once('POO/classes/employe.php');

$em1= new Employe();
$em1->setNommage("Lebowski");
$em1->setPrenomage("Jeff");
$em1->setdateembauche("10/02/1980");
$em1->setposte("Ouvrier");
$em1->setsalaire("1600");
$em1->setservice("Batiment");
$em1->afficherAnneedeservice();
$em1->setprime();


$em2 = new Employe();
$em2->setNommage("Lemarque");
$em2->setPrenomage("Sarah");
$em2->setdateembauche("05/05/1970");
$em2->setposte("sécretaire");
$em2->setsalaire("1700");
$em2->setservice("Administration");
$em2->afficherAnneedeservice();
$em2->setprime();








foreach($em as $key =>$value){
    echo $key." : ".$value."<br>";
 };

 foreach($em1 as $key =>$value){
    echo $key." : ".$value."<br>";
 };

?>
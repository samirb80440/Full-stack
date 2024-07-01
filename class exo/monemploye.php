<?php

require_once('POO/classes/employe.php');

$em = new Employe();
$em->setNommage("Lebowski");
$em->setPrenomage("Jeff");
$em->setdateembauche("05/02/2025");
$em->setposte("Ouvrier");
$em->setsalaire("30 k");
$em->setservice("Batiment");

foreach($em as $key =>$value){
    echo $key." : ".$value."<br>";
 };



?>
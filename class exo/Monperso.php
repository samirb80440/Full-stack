<?php

require_once('perso.php');

$p = new Personnage();
$p->setNommage("Lebowski");
$p->setPrenomage("Jeff");
$p->setAge("30");
$p->setGenre("masculin");

echo ($p);

?>
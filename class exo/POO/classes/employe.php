<?php

Class Employe
{

public $_nom;
public $_prenom;
public $_dateembauche;
public $_poste;
public $_salaire;
public $_service;


public function setNommage($nom){
    $this->_nom = $nom;
}

public function setPrenomage($prenom){
    $this->_prenom = $prenom;
}


public function setdateembauche($dateembauche){
    $this->_dateembauche = $dateembauche;
}


public function setposte($poste){
    $this->_poste= $poste;
}

public function setsalaire($salaire){
    $this->_salaire = $salaire;
}

public function setservice($service){
    $this->_service = $service;
}

}
?>
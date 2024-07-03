<?php

Class Employe
{

public $_nom;
public $_prenom;
public $_dateembauche;
public $_poste;
public $_salaire;
public $_service;
public $_durreembauche;
public $_prime;

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

public function afficherAnneedeservice(){
    $date=new Datetime();
    $dateembauche = new Datetime($this->_dateembauche);
    $datediff=$dateembauche->diff($date);
    $this->_durreembauche= $datediff->format('%R%a days');
}

public function setPrime() {
    $date = new DateTime();
    $stockAnnee = $date->format('Y');
    $datePrime = new DateTime($stockAnnee . '-11-30');
    $dateDiff = $datePrime->diff($date);

    if ($dateDiff->format('%R%a') > 0) {
        $primeDefault = 0.05;
        $primeRanc = round(($this->_durreembauche / 364)) * 0.02;
        $primeTotal = 1.0 + ($primeDefault + $primeRanc);
        $primeAmount = $this->_salaire * $primeTotal - $this->_salaire;
        $this->_prime = 'La prime de :' . number_format($primeAmount, 2) . ' a été virée.';
    } else {
        $this->_prime = 'La prime pas encore virée.';
    }
}
}
?>
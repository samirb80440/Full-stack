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

public function setprime(){
$date= new datetime();
$stockannée = $date->format('Y');
$dateprime= new DateTime($stockannée . '-11-30');
$datediff =$dateprime->diff($date);


if($datediff->format('%R%a')>0){
$primedefault=0.05;
$primeranc= round(($this->_durreembauche/364))*0.02;
$primetotal= 1.0+($primedefault+$primeranc);
$this->_prime='la prime de :'. $this->_salaire*$primetotal-$this->_salaire.' a été virer.';
}else{
    $this->_prime='la prime pas encore virer .';
}
}
}
?>
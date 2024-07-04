<?php
class Magasins
{
   public $_nom;
   public $_adresse;
   public $_codepostal;
   public $_ville;
   public $_restauration;

   // Définition du constructeur de la classe
   function __construct($nom, $adresse, $codepostal,$ville,$restauration ) 
   {
    $this->_nom =$nom;
    $this->_adresse =$adresse;
    $this->_codepostal =$codepostal;
    $this->_ville =$ville;
    $this->_restauration =$restauration;
   }

 

    public function getNom() {
        return $this->_nom;
    }

    public function getAdresse() {
        return $this->_adresse;
    }

    public function getCodePostal() {
        return $this->_codePostal;
    }

    public function getVille() {
        return $this->_ville;
    }

    public function getRestauration() {
        if($this->_restauration == 'Yes'){
            return 'Oui il y un restaurant dans le magasin';
        } elseif ($this->_restauration == 'No') {
            return "Non il n'y a pas de restaurant dans le Magasin alors les employées doivent avoir des tickets restaurants";
        } else {
            return "Veuillez renseigner le champ restauration par Yes ou No";
        }
    }
} 


?>
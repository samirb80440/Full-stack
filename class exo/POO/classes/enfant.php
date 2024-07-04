<?php
class Primaire
{
   public $_existance;
   public $_age;

   // Définition du constructeur de la classe
   function __construct($existance, $age) 
   {
    $this->_existance =$existance;
    $this->_age =$age;
   }

   public function getTicket(){
    if($this->_existance == 'OUI'){
        if($this->_age >= 0 and $this->_age <= 10){
            return 'Enfant de '. $this->_age .' droit a une prime de 20 euros';
            } elseif ($this->_age >= 11 and $this->_age <= 15){
                return 'Enfant de '. $this->_age .'  droit a une prime de 30 euros';
                } elseif ($this->_age >= 16 and $this->_age <= 18){
                    return 'Enfant de '. $this->_age .' droit a une prime de 50 euros';
                    }else {
                        return 'Adulte';
                        }
    } else {
        return "Pas d'enfant";
    }
   }
} 


?>
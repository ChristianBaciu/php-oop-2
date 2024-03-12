<?php
    trait Traits{
        public $informazioni_animale;
    
        public function set_informazioni_animale($informazioni_animale){
            $this->informazioni_animale = $informazioni_animale;
        }

        public function get_informazioni_animale(){
            return $this->informazioni_animale;
        }
    }
?>


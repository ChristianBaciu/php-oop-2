<?php
    // trait animals_traits{
    //     public $animals;
    //     public $info_animale;

                // public function __construct($_animals, $_info_animale)
        // {
        //     $this->animals = $_animals;
        //     $this->info_animale = $_info_animale;
        // }

        // public function get_animals(){
        //     return $this->animals;
        // }

        // public function get_info_animale(){
        //     return $this->info_animale;
        // }

    // }    


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


<?php
    trait animals_traits{

        public $animals;
        public $info_animale;

        public function __construct($_animals, $_info_animale)
        {
            $this->animals = $_animals;
            $this->info_animale = $_info_animale;
        }

        public function get_animale_cane(){
            return $this->animals;
        }

        public function get_info_cane(){
            return $this->info_animale;
        }
    }
?>
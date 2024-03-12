<?php
    class Animale{
        public $nome_animale;
        public $animale_img;
        public $animale_eta;

        // labrador
        public function __construct($nome_animale){
            $this->nome_animale = $nome_animale;
        }
        public function get_nome_animale(){
            return $this->nome_animale;
        }

        // img
        public function set_animale_img($img){
            $this->animale_img = $img;
        }
        public function get_animale_img(){
            return $this->animale_img;
        }

        // età
        public function set_animale_eta($eta){
            $this->animale_eta = $eta;
        }
        public function get_animale_eta(){
            return $this->animale_eta;
        }
        
    }
?>
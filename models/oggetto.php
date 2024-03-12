<?php 
    class Oggetto{
        public $title;
        public $price;  
        public $n_price;
        public $type;
        public $immagine;
        public $icone;

        public function __construct($_title, $_price, $_n_price, $_type, $_immagine, $_icone){
            $this->title = $_title;
            $this->price = $_price;
            $this->n_price = $_n_price;
            $this->type = $_type;
            $this->immagine = $_immagine;
            $this->icona = $_icone;
        }

        public function get_prezzo(){
            return $this->price . " " . $this->n_price;
        }

        public function get_titolo(){
            return $this->title;
        }

        public function get_tipo(){
            return $this->type;
        }

        public function get_img(){
            return $this->immagine;
        }

        public function get_icone(){
            return $this->icona;
        }
    }
?>
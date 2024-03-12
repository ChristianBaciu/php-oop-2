<?php 
    class oggetto{
        public $title;
        public $price;  
        public $n_price;
        public $type;
        public $other;
        public $immagine;
        public $icone;

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone)
        {
            $this->title = $_title;
            $this->price = $_price;
            $this->n_price = $_n_price;
            $this->type = $_type;
            $this->other = $_other;
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

        public function get_altro(){
            return $this->other;
        }

        public function get_img(){
            return $this->immagine;
        }

        public function get_icone(){
            return $this->icona;
        }
    }
?>
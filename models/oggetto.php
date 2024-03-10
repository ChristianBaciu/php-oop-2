<?php 
    class oggetto_shop{
        public $title;
        protected $price;  
        private $n_price;
        protected $type;
        protected $other;
        private $immagine;
        protected $animal;

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_animal)
        {
            $this->title = $_title;
            $this->price = $_price;
            $this->n_price = $_n_price;
            $this->type = $_type;
            $this->other = $_other;
            $this->immagine = $_immagine;
            $this->animale = $_animal;
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

        public function get_just_like_animals(){
            return $this->animale;
        }
    }
?>
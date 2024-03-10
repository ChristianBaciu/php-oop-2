<?php 
    class oggetto_shop{
        public $titolo;
        protected $prezzo;  
        private $numero_prezzo;
        protected $tipo;
        protected $altro;
        private $immagine;


        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altro, $_immagine)
        {
            $this->titolo = $_titolo;
            $this->prezzo = $_prezzo;
            $this->numero_prezzo = $_numero_prezzo;
            $this->tipo = $_tipo;
            $this->altro = $_altro;
            $this->immagine = $_immagine;
        }

        public function get_prezzo(){
            return $this->prezzo . " " . $this->numero_prezzo;
        }

        public function get_titolo(){
            return $this->titolo;
        }

        public function get_tipo(){
            return $this->tipo;
        }

        public function get_altro(){
            return $this->altro;
        }

        public function get_img(){
            return $this->immagine;
        }

    }
?>
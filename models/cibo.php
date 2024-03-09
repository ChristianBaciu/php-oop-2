<?php 
    class cibo_collare{
        public $titolo;
        public $prezzo;  
        public $numero_prezzo;
        public $tipo;
        public $calorie;

        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_calorie)
        {
            $this->titolo = $_titolo;
            $this->prezzo = $_prezzo;
            $this->numero_prezzo = $_numero_prezzo;
            $this->tipo = $_tipo;
            $this->calorie = $_calorie;
        }

        public function getPrezzo(){
            return $this->prezzo . " " . $this->numero_prezzo;
        }

        public function getTitolo(){
            return $this->titolo;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getCalorie(){
            return $this->calorie;
        }
    }
?>
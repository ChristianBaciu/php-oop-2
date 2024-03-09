<?php 
    class oggetto_collare{
        public $titolo;
        public $prezzo;  
        public $numero_prezzo;
        public $tipo;


        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo)
        {
            $this->titolo = $_titolo;
            $this->prezzo = $_prezzo;
            $this->numero_prezzo = $_numero_prezzo;
            $this->tipo = $_tipo;
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
    }
?>
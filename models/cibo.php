<?php 
    class Cibo extends oggetto{
        public $other;

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone){
            $this->other = $_other;

            // con parent prendo tutti i this dal padre 'oggetto'
            parent:: __construct($_title, $_price, $_n_price, $_type, $_immagine, $_icone);
        }

        public function get_altro(){
            return $this->other;
        }
    }
?>

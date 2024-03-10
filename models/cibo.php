<?php 
    class cibo_shop extends oggetto_shop{

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_animal)
        {
            // con parent prendo tutti i this dal padre 'oggetto_shop'
            parent:: __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_animal);
        }
    }
?>

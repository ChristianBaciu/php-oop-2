<?php 
    class giocattolo_shop extends cibo_shop{

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_animal)
        {
            // con parent prendo tutti i this dal padre 'cibo_shop'
            parent:: __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_animal);
        }
    }
?>


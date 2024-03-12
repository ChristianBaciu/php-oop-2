<?php 
    class cibo extends oggetto{

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone)
        {
            // con parent prendo tutti i this dal padre 'oggetto'
            parent:: __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone);
        }
    }
?>

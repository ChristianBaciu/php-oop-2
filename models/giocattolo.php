<?php 
    class giocattolo extends cibo{

        public function __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone)
        {
            // con parent prendo tutti i this dal padre 'cibo'
            parent:: __construct($_title, $_price, $_n_price, $_type, $_other, $_immagine, $_icone);
        }
    }
?>


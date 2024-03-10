<?php 
    class giocattolo_shop extends cibo_shop{

        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altro, $_immagine)
        {
            parent:: __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altro, $_immagine);
        }
    }
?>


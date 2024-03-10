<?php 
    class cibo_shop extends oggetto_shop{
        public $altre_info;

        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altro, $_immagine)
        {
            // con parent prendo tutti i this dal padre 'oggetto_shop'
            parent:: __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altro, $_immagine);
            // $this->altre_info = $_altre_info;
        }

        // public function get_alte_info(){
        //     return $this->altre_info;
        // }
    }
?>

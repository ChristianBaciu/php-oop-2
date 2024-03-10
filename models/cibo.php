<?php 
    class cibo_shop extends oggetto_shop{
        public $altre_info;

        public function __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo, $_altre_info)
        {
            // con parent prendo tutti i this dal padre 'oggetto_shop'
            parent:: __construct($_titolo, $_prezzo, $_numero_prezzo, $_tipo);
            // $this->titolo = $_titolo;
            // $this->prezzo = $_prezzo;
            // $this->numero_prezzo = $_numero_prezzo;
            // $this->tipo = $_tipo;
            $this->altre_info = $_altre_info;
        }

        public function get_alte_info(){
            return $this->altre_info;
        }
    }
?>

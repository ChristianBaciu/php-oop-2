<?php
    require_once __DIR__ . "/../traits/animals_traits.php";

    class dog_traits{
        use animals_traits;
        
        public $type;
        public $immagine;
        public $icone;

        public function __construct($_type, $_immagine, $_icone)
        {
            $this->type = $_type;
            $this->immagine = $_immagine;
            $this->icone = $_icone;
        }

        public function get_tipo(){
            return $this->type;
        }

        public function get_img(){
            return $this->immagine;
        }

        public function get_icone(){
            return $this->icone;
        }
    }
?>
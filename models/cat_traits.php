<?php
    require_once __DIR__ . "/../traits/animals_traits.php";

    class cat_traits extends dog_traits{
        use animals_traits;

        public function __construct($_type, $_immagine, $_icone)
        {
            parent:: __construct($_type, $_immagine, $_icone);
        }
    }
?>
<?php 
    include_once __DIR__ . '/models/oggetto.php';
    $collare = new oggetto_shop('Collare', 'Price', '12'.'€', 'Product', "", './img/2.jpg');

    include_once __DIR__ . '/models/cibo.php';
    $crocchette = new cibo_shop('Crocchete 1kg', 'Price', '12'.'€', 'Food', 'Calories: 200','./img/1.jpg');

    include_once __DIR__ . '/models/giocattolo.php';
    $tennis = new giocattolo_shop('Palla da tennis', 'Price', '10'.'€', 'Game', 'Genre: ball','./img/3.jpg');

    $array_pet_shop = [
        $collare, $crocchette, $tennis
    ];
    
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--     
        Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        - L'e-commerce vende prodotti per animali. x
        - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
        Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della
        categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    -->

</head>
<body>

    <div class="m-5">
        <h1>my pet shop</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, nostrum.</p>
        <button class="btn btn-primary">Example button</button>
    </div>

    <div class="container">
        <div class="row">

            <?php foreach($array_pet_shop as $element):?>
            <div class="col">
                <div class="card">


                    <img class="card-img-top" src="<?= $element->get_img() ?>" alt="Title" />
                    <div class="card-body">

                        <h4 class="card-title"><?= $element->get_titolo() ?></h4>
                        <p class="card-text"><?= $element->get_prezzo() ?></p>

                        <div class="d-flex justify-content-between">
                            <p>
                                type: <?= $element->get_tipo() ?>
                            </p>

                            <p>
                                <?= $element->get_altro() ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div> 
            <?php endforeach; ?>


            <!-- <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">

                        <h4 class="card-title"><?= $collare->getTitolo() ?></h4>
                        <p class="card-text"><?= $collare->getPrezzo() ?></p>
                        <p>
                            type: <?= $collare->getTipo() ?>
                        </p>

                    </div>
                </div>
            </div> 

            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">

                        <h4 class="card-title"><?= $crocchette->getTitolo() ?></h4>
                        <p class="card-text"><?= $crocchette->getPrezzo() ?></p>

                        <div class="d-flex justify-content-between">
                            <p>
                                type: <?= $crocchette->getTipo() ?>
                            </p>
    
                            <p>
                                calories: <?= $crocchette->get_alte_info() ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div> 

            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">

                        <h4 class="card-title"><?= $tennis->getTitolo() ?></h4>
                        <p class="card-text"><?= $tennis->getPrezzo() ?></p>

                        <div class="d-flex justify-content-between">
                            <p>
                                type: <?= $tennis->getTipo() ?>
                            </p>
    
                            <p>
                                calories: <?= $tennis->get_alte_info() ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>  -->

        </div>
    </div>

</body>
</html>
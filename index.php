<?php 

    include_once __DIR__ . '/models/oggetto.php';
    $collare = new oggetto_shop('Collare', 'Price', '12'.'€', 'Product');

    include_once __DIR__ . '/models/cibo.php';
    $cibo = new cibo_shop('Crocchete 1kg', 'Price', '12'.'€', 'Food', '200');

    include_once __DIR__ . '/models/giocattolo.php';
    $giocattolo = new giocattolo_shop('Palla da tennis', 'Price', '10'.'€', 'Game', 'ball');

    // array
    
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

            <div class="col">
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

                        <h4 class="card-title"><?= $cibo->getTitolo() ?></h4>
                        <p class="card-text"><?= $cibo->getPrezzo() ?></p>

                        <div class="d-flex justify-content-between">
                            <p>
                                type: <?= $cibo->getTipo() ?>
                            </p>
    
                            <p>
                                calories: <?= $cibo->get_alte_info() ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div> 




            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                    <div class="card-body">

                        <h4 class="card-title"><?= $giocattolo->getTitolo() ?></h4>
                        <p class="card-text"><?= $giocattolo->getPrezzo() ?></p>

                        <div class="d-flex justify-content-between">
                            <p>
                                type: <?= $giocattolo->getTipo() ?>
                            </p>
    
                            <p>
                                calories: <?= $giocattolo->get_alte_info() ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div> 


        </div>
    </div>

</body>
</html>
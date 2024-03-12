<?php 
    include_once __DIR__ . '/models/oggetto.php';
    $collare = new oggetto('Collare', 'Price', '12'.'€', 'Product', "", './img/1.PNG', '<i class="fa-solid fa-dog"></i>');

    include_once __DIR__ . '/models/cibo.php';
    $crocchette = new cibo('Crocchete 1kg', 'Price', '12'.'€', 'Food', 'Calories: 200','./img/2.PNG', '<i class="fa-solid fa-dog"></i>');

    include_once __DIR__ . '/models/giocattolo.php';
    $tennis = new giocattolo('Palla da tennis', 'Price', '10'.'€', 'Game', 'Genre: ball','./img/3.PNG', '<i class="fa-solid fa-cat"></i>');

    $array_pet_shop = [
        $collare, $crocchette, $tennis
    ];
    // var_dump($array_pet_shop);

    require_once __DIR__ . "/models/Cane.php";
    require_once __DIR__ . "/models/Animale.php";

    $prova = new Cane('Cane');
    $prova->set_informazioni_animale('baobaobao');

    var_dump($prova);

    

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--     
        Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        - L'e-commerce vende prodotti per animali. x
        - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
        - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
        Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della
        categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
    -->

    <!-- 
        oggi continuate a lavorare nella stessa repo di ieri aggiungendo almeno un trait ed un exception
        al vostro shop!
        Buon divertimento e confermate lettura come al solito!
    -->
</head>
<body>

    <div class="m-5">
        <h1 class="text-capitalize">my pet shop</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, nostrum.</p>
        <button class="btn btn-primary">Example button</button>
    </div>

    <div class="container mb-5">
        <div class="row">

            <?php foreach($array_pet_shop as $element):?>
                <div class="col">
                    <div class="card">
                        <div class="bg-immagine">
                            <img class="card-img-top" src="<?= $element->get_img() ?>" alt="Title" />
                            
                            <?= $element->get_icone() ?>
                        </div>
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


                <div class="col">
                    <div class="card">
                        <div class="bg-immagine">
                            <img class="card-img-top" src="" alt="Title" />
                            
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?= $prova->get_nome_animale() ?></h4>
                            <p class="card-text"><?= $prova->get_informazioni_animale() ?></p>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</body>
</html>
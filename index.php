<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Movies.php';
require_once __DIR__ . '/models/TvSerie.php';
require_once __DIR__ . '/models/Genere.php';

// Istanza generi
$genere_1 = new Genere('Drammatico');
$genere_2 = new Genere('Commedia');
$genere_3 = new Genere('Thriller');

// Istanza di 3 oggetti 
$movie_1 = new Movie('Storia di un Matrimonio', [$genere_1], 2019, 175);
$movie_2 = new Movie('Parasite', [$genere_2], 2018, 200.5);
$movie_3 = new Movie('Blade Runner 2049', [$genere_3], 2017, 250.5);

$serie_1 = new TvSerie('Titolo 1', [$genere_1], 100, 20, 5);
$serie_2 = new TvSerie('Titolo 2', [$genere_2], 150, 25, 10);
$serie_3 = new TvSerie('Titolo 3', [$genere_3], 200, 30, 15);

// Array di oggetti
$movies = [
    $movie_1,
    $movie_2,
    $movie_3,
];

$series = [
    $serie_1,
    $serie_2,
    $serie_3,
];

$genere = [
    $genere_1,
    $genere_2,
    $genere_3,
];

$arrayMisto = [
    $serie_1,
    $movie_1,
    $serie_2,
    $movie_2,
    $serie_3,
    $movie_3,
]



    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Lista Film</h1>
        <div class="row">
            <?php foreach ($movies as $movie): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $movie->titolo; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $movie->getInfo(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <hr class="p-5">

        <h1>Lista Serie TV</h1>
        <div class="row">
            <?php foreach ($series as $serie): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $serie->titolo; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $serie->getInfo(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <hr class="p-5">

        <!-- prova array misto -->
        <h1>Lista Mista Serie Tv e Film</h1>
        <div class="row">
            <?php foreach ($arrayMisto as $element): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $element->titolo; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $element->getInfo(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
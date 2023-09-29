<?php

require_once __DIR__ . '/models/Movies.php';


// Array di oggetti
$movies = [
    $movie_1,
    $movie_2,
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
        <h1>Lista Movies</h1>
        <ul>
            <li>
                <?php echo ($movie_1->InfoMovies()); ?>
            </li>
            <li>
                <?php echo ($movie_2->InfoMovies()); ?>
            </li>
            <li>
                <?php echo ($movie_3->InfoMovies()); ?>
            </li>
        </ul>
    </div>
</body>

</html>
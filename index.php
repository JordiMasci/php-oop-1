<?php

// Apro classe php
class Movie
{
    // Variabili di istanza (attributi)
    public $titolo;
    public $genere;
    public $annoUscita;

    // Apro un costrutto (metodo)
    // serve ad istanziare gli oggetti
    public function __construct(string $titolo, string $genere, int $annoUscita)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->annoUscita = $annoUscita;
    }

    // Function per stampare Info Movies (metodo)
    public function InfoMovies()
    {
        return "Titolo: $this->titolo, Genere: $this->genere, Anno Di Uscita: $this->annoUscita";
    }
}

// Istanza di 3 oggetti 
$movie_1 = new Movie('Storia di un Matrimonio', 'Drammatico', 2019);
$movie_2 = new Movie('Parasite', 'Commedia', 2018);
$movie_3 = new Movie('Blade Runner 2049', 'Thriller', 2017);





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
            <li><?php echo ($movie_1->InfoMovies()); ?></li>
            <li><?php echo ($movie_2->InfoMovies()); ?></li>
            <li><?php echo ($movie_3->InfoMovies()); ?></li>
        </ul>
    </div>
</body>

</html>
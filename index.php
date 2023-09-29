<?php

class Movie
{
    public $titolo;
    public $genere;
    public $annoUscita;

    public function __construct(string $titolo, string $genere, int $annoUscita)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->annoUscita = $annoUscita;
    }
}

$movie_1 = new Movie('Storia di un Matrimonio', 'Drammatico', 2019);


$movie_2 = new Movie('Parasite', 'Commedia', 2018);


$movie_3 = new Movie('Blade Runner 2049', 'Thriller', 2017);


var_dump($movie_1, $movie_2, $movie_3);
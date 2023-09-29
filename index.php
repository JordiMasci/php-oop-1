<?php

class Movie {
    public $titolo;
    public $genere;
    public $annoUscita;

    // public function 
}

$movie_1 = new Movie();
$movie_1->titolo = 'Storia di un Matrimonio';
$movie_1->genere = 'Drammatico';
$movie_1->annoUscita = 2019;

var_dump($movie_1);
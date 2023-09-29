<?php

class Movie {
    public $titolo;
    public $genere;
    public $annoUscita;

    public function __construct() {
        
    }
}

$movie_1 = new Movie();
$movie_1->titolo = 'Storia di un Matrimonio';
$movie_1->genere = 'Drammatico';
$movie_1->annoUscita = 2019;

$movie_2 = new Movie();
$movie_2->titolo = 'Parasite';
$movie_2->genere = 'Commedia';
$movie_2->annoUscita = 2018;

$movie_3 = new Movie();
$movie_3->titolo = 'Blade Runner 2049';
$movie_3->genere = 'Thriller';
$movie_3->annoUscita = 2017;

var_dump($movie_1, $movie_2, $movie_3);

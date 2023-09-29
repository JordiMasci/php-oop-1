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
    public function InfoMovies() {
        return "Titolo: $this->titolo, Genere: $this->genere, Anno Di Uscita: $this->annoUscita";
    }
}

// Istanza di 3 oggetti 
$movie_1 = new Movie('Storia di un Matrimonio', 'Drammatico', 2019);
$movie_2 = new Movie('Parasite', 'Commedia', 2018);
$movie_3 = new Movie('Blade Runner 2049', 'Thriller', 2017);


echo ($movie_1->InfoMovies());
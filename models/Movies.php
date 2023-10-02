<?php

// Apro classe php
class Movie extends Production
{
    // Variabili di istanza (attributi)
    public $annoUscita;
    public $durata;

    // Apro un costrutto (metodo)
    // serve ad istanziare gli oggetti

    public function __construct(string $titolo, Genere $genere, int $annoUscita, float $durata)
    {
        parent::__construct($titolo, $genere);
        $this->annoUscita = $annoUscita;
        $this->durata = $durata;
    }


    // Function per stampare Info Movies (metodo)
    public function InfoMovies()
    {
        return "Titolo: $this->titolo -Genere: {$this->genere->tipo} -Anno Di Uscita: $this->annoUscita -Durata: $this->durata";
    }

}
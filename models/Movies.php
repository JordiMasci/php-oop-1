<?php

// Apro classe php
class Movie extends Production
{
   
    public $annoUscita;
    // Apro un costrutto (metodo)
    // serve ad istanziare gli oggetti
    public function __construct(string $titolo, Genere $genere, int $annoUscita)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->annoUscita = $annoUscita;
    }

    // Function per stampare Info Movies (metodo)
    public function InfoMovies()
    {
        return "Titolo: $this->titolo -Genere: {$this->genere->tipo} -Anno Di Uscita: $this->annoUscita";
    }

public function toArray() {
}

}


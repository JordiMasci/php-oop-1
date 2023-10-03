<?php

class Production
{
    // Variabili di istanza (attributi)
    public $titolo;
    public $genere;

    public function __construct(string $titolo, Genere $genere)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    public function getInfo()
    {
        return "Genere: {$this->genere->tipo}";
    }

    public function getAllGenere()
    {

    }
}
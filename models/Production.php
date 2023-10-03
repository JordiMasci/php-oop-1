<?php

class Production
{
    // Variabili di istanza (attributi)
    public $titolo;
    public $genere;

    public function __construct(string $titolo, array $genere)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
    }

    public function getInfo()
    {
        // Utilizza implode per unire i tipi di genere in una stringa separata da virgole
        $tipiGeneri = implode(', ', $this->getAllGenere());

        return "Genere: $tipiGeneri";
    }

    public function getAllGenere()
    {
        $tipiGeneri = [];

        foreach ($this->genere as $genere) {
            $tipiGeneri[] = $genere->tipo;
        }

        return $tipiGeneri;
    }
}
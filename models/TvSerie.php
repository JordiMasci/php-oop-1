<?php

class TvSerie extends Production
{
    public $annoInizio;
    public $numeroEpisodi;
    public $numeroStagioni;

    public function __construct(string $titolo, Genere $genere, float $annoInizio, int $numeroEpisodi, int $numeroStagioni)
    {
        parent::__construct($titolo, $genere);
        $this->annoInizio = $annoInizio;
        $this->numeroEpisodi = $numeroEpisodi;
        $this->numeroStagioni = $numeroStagioni;
    }
}
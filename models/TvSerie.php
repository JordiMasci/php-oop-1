<?php

class TvSerie extends Production
{
    public $annoInizio;
    public $numeroEpisodi;
    public $numeroStagioni;

    public function __construct(string $titolo, Genere $genere, int $annoInizio, int $numeroEpisodi, int $numeroStagioni)
    {
        parent::__construct($titolo, $genere);
        $this->annoInizio = $annoInizio;
        $this->numeroEpisodi = $numeroEpisodi;
        $this->numeroStagioni = $numeroStagioni;
    }

    public function InfoTvSeries()
    {
        return "Titolo: $this->titolo -Genere: $this->genere - Anno Inizio Serie: $this->annoInizio - Numero Episodi: $this->numeroEpisodi - Numero Stagioni: $this->numeroStagioni";
    }
}
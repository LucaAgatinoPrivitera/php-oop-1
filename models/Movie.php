<?php

class Movie
{
    public $nome;
    public $regista;
    public $durata;

    public function filmERegista()
    {
        return "$this->nome, $this->regista";
    }

    function __construct($nome, $regista, $durata)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
    }
}
<?php

class Planta {
    private string $nome;
    private string $especie;
    private float $aguaPorDia;

    public function __construct(string $nome, string $especie, float $aguaPorDia)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->setAguaPorDia($aguaPorDia);
    }

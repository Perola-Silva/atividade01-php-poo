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

    // Metodos

    public function calcularAguaSemanal(float $aguaPorDia): float{
        return $aguaSemanal = $aguaPorDia * 7;
    }



    // Getters
    public function getNome(): string{
        return $this->nome;
    }

    public function getEspecie(): string{
        return $this->especie;
    }
    
    public function getAguaPorDia(): string{
        return $this->aguaPorDia;
    }



    // Setters
    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function setEspecie(string $especie): void{
        $this->especie = $especie;
    }

    public function setAguaPorDia(float $aguaPorDia): void{
        if($aguaPorDia > 0){
            $this->aguaPorDia = $aguaPorDia;
        }
    }
}
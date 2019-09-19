<?php

namespace App\Models;

class Veiculo
{
    protected $placa;
    protected $cor;
    protected $modelo;
    protected $entradas;
    protected $saidas;

    public function getPlaca() : string
    {
        return $this->placa;
    }

    public function getCor() : string
    {
        return $this->cor;
    }

    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function getEntradas() : array
    {
        return $this->entradas;
    }

    public function getSaidas() : array
    {
        return $this->saidas;
    }

    public function getEntrada($order) : Entrada
    {
        return $this->entradas[$order];
    }

    public function getSaida($order) : Saida
    {
        return $this->saidas[$order];
    }

    public function setPlaca(string $value)
    {
        return $this->placa = $value;
    }

    public function setCor(string $value)
    {
        return $this->cor = $value;
    }

    public function setModelo(string $value)
    {
        return $this->modelo = $value;
    }

    public function setEntrada(Entrada $entrada)
    {
        return $this->entradas[] = $entrada;
    }

    public function setSaida(Saida $saida)
    {
        return $this->saidas[] = $saida;
    }
}

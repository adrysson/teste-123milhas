<?php

namespace App\Models;

class Vaga
{
    protected $ocupada;
    protected $veiculo;


    public function getOcupada() : boolean
    {
        return $this->ocupada;
    }

    public function getVeiculo() : Veiculo
    {
        return $this->veiculo;
    }

    public function setOcupada(boolean $boolean)
    {
        return $this->ocupada = $boolean;
    }

    public function setVeiculo(Veiculo $veiculo)
    {
        return $this->veiculo = $veiculo;
    }
}

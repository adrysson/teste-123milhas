<?php

namespace App\Models;

class Movimentacao
{
    protected $data;
    protected $hora;

    public function getData() : string
    {
        return $this->data;
    }

    public function getHora() : string
    {
        return $this->hora;
    }

    public function setData(string $date)
    {
        return $this->data = $date;
    }

    public function setHora(string $hora)
    {
        return $this->data = $hora;
    }
}

<?php

namespace App\Models;

class Entrada extends Movimentacao
{
    public function registrarEntrada(string $dateTime)
    {
        $data = $this->setData(date('Y-m-d', $dateTime));
        $hora = $this->setHora(date('H:i', $dateTime));

        return [
            'data' => $data,
            'hora' => $hora
        ];
    }
}

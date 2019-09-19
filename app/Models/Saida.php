<?php

namespace App\Models;

class Saida extends Movimentacao
{
    public function registrarSaida(string $dateTime)
    {
        $data = $this->setData(date('Y-m-d', $dateTime));
        $hora = $this->setHora(date('H:i', $dateTime));

        return [
            'data' => $data,
            'hora' => $hora
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function form()
    {
        return view('calculadora.form');
    }
}

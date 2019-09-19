<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function form()
    {
        return view('calculadora.form');
    }

    public function calculate(Request $request)
    {
        $a = $request->query('a');
        $b = $request->query('b');
        $c = $request->query('c');
        
        // Descobrindo Delta
        $delta = ($b * $b) - ((4 * $a) * $c);

        if ($delta >= 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return redirect()->action('CalculadoraController@form')->with('x1', $x1)->with('x2', $x2);
        }
        return redirect()->action('CalculadoraController@form')->with('message', 'Delta negativo');
    }
}

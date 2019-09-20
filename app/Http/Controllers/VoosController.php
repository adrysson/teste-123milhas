<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoosController extends Controller
{
    public function form()
    {
        return view('voos.form');
    }

    public function search(Request $request)
    {
        $text = $request->query('text');
        preg_match_all('/(\d*\.?\d{3})/', $text, $matches, PREG_UNMATCHED_AS_NULL);
        $values = current($matches);
        foreach ($values as $key => $value) {
            $values[$key] = number_format(str_replace('.', '', $value), 2, '.', '');
        }
        if (!empty($values)) {
            return redirect()->action('VoosController@form')->with('values', $values);
        }
        return redirect()->action('VoosController@form')->with('message', 'Valores não encontrados');
    }
}

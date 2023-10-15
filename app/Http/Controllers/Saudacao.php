<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $nome = "Treinaweb")
    {
        return view("saudacao")->with("nome",$nome);
    }
}

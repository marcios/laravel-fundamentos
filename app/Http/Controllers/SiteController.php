<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view("home");
    }
    public function sobre() {

        $soma = 10 +9;
        echo "Conteudo dinamico sobre $soma";
    }

    public function contato() {
        echo "Conteudo dinamico sobre contato";
    }

    public function servicos() {
        echo "Conteudo dinamico sobre serviços";
    }

    public function servico(int $id) 
    {
        $servicos = [
            1=>["nome"=>"Lavagem", "descricao"=>"Descricao longa"],
            2=>["nome"=>"Lavagem de coberta", "descricao"=> "descricao muito longa"],
            3=>["nome"=>"Lavagem de Urso", "descricao"=> "descricao muito longa "]
        ];

        echo $servicos[$id]["nome"];
        echo "<br>";
        echo $servicos[$id]["descricao"];
    }
}

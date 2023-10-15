@extends('app')
@section('titulo','Detalhes do cliente')
@section('conteudo')
        <div class="card">
            <div class="card-header">
                Detalhes do cliente {{$client->nome}}
            </div>
            <div class="carrd-body p-3">
                <h5 class="card-title"></h5>
                <p class="card-text"><strong>ID:</strong> {{$client->id}}</p>
                <p class="card-text"><strong>Nome:</strong> {{$client->nome}}</p>
                <p class="card-text"><strong>Endereço:</strong> {{$client->endereco}}</p>
                <p class="card-text"><strong>Observação:</strong> {{$client->observacao}}</p>
                
                <a href="{{route('clients.index')}}" class="btn btn-success">Voltar</a>

            </div>
        </div>
       
 @endsection
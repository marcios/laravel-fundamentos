@extends('app')

@section('titulo','Editar cliente')
@section('conteudo')
<h1>Editar cliente</h1>

<form action="{{route('clients.update', $client)}}" method="post">
    @csrf
    @method('put')
    <div class="class-mb3">
        <label for="nome" class="form-label">Nome</label>
        <input required type="text"id="nome" name="nome" value="{{$client->nome}}" class="form-control" placeholder="Digite o nome">
    </div>
    <div class="class-mb3">
        <label for="endereco" class="form-label">Endereço</label>
        <input required type="text"id="endereco" name="endereco" value="{{$client->endereco}}" class="form-control" placeholder="Digite o endereço">
    </div>
    <div class="class-mb3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3">{{$client->observacao}}</textarea>
    </div>
    <br/>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection
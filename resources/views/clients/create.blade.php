@extends('app')

@section('titulo','Novo cliente')
@section('conteudo')
<h1>Novo cliente</h1>

<form action="{{route('clients.store')}}" method="post">
    @csrf
    <div class="class-mb3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text"id="nome" name="nome" class="form-control" placeholder="Digite o nome" required>
    </div>
    <div class="class-mb3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text"id="endereco" name="endereco" class="form-control" placeholder="Digite o endereço" required>
    </div>
    <div class="class-mb3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
    </div>
    <br/>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>
@endsection
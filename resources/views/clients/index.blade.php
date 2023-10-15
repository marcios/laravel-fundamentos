
@extends('app')

@section('titulo','Lista de clientes')
@section('conteudo')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col" style="width: 200px;">Ações</th>
        </tr>
    </thead>
    <tbody>

        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>
                <a href="{{route('clients.show', $client)}}"> {{$client->nome}}</a>
            </td>
            <td>{{$client->endereco}}</td>

            <td>
                <a href="{{route('clients.edit', $client)}}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{route('clients.destroy', $client)}}" method="post">

                    @csrf
                    @method('delete')
                    <button type="submit" 
                        onclick="return confirm('Deseja realmente excluir {{$client->nome}}')"
                    class="btn btn-sm btn-danger" style="display:inline">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('clients.create')}}" class="btn btn-success">Novo Cliente</a>
@endsection
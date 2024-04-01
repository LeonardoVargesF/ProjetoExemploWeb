@extends('layout.app')
@section('content')
<h1>Brunao é muito bixa</h1>
<div>
    <table>
        <tr>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->nome}}</td>
                <td>{{ $registro->apelido}}</td>
                <td>{{ $registro->cidade}}</td>
                <td>{{ $registro->bairro}}</td>
                <td>{{ $registro->cep}}</td>
                <td>{{ $registro->email}}</td>
                <td>{{ $registro->telefone}}</td>
                <td>
                    <a href="{{ route('autor.edit', $registro->id)}}">Alteração</a>
                    <a href="{{ route('autor.delete', $registro->id)}}">Exclusão</a>
                    <a href="{{ route('autor.show', $registro->id)}}">Consulta</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('autor.create')}}">Incluir</a>
</div>
@endsection
@extends('layout.app')
@section('content')
<h1>Brunao é muito bixa</h1>
<div>
    <x-local-sistema mensagemPrincipal="Listagem de Autores" mensagemSecundaria="Lista de Autores" url="dashboard" navegacao="Pagina Principal" />

    <div clss="container">
        <div class='tile'>
            <div class='tile-body'>


                <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('autor.index') }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label class="visually-hidden" for="pesquisar">Pesquisar:</label>
                        <input id="pesquisar" name="pesquisar" class="form-control" placeholder="Pesquisa" />
                    </div>

                    <div class="col-12">
                        <label class="visually-hidden" for="selecionar">Quantidade:</label>

                        <select class="form-select" id="selecionar" name="perPage">
                            @foreach($pages as $perPage)

                            <option value="{{$perPage}}" @if($item==$perPage) selected @endif>
                                {{$perPage}}
                            </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </div>

                </form>

                <table class="table table-stripped table-bordered table-hover">
                    <tr class="cabecalho">
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
                            <td class="centralizado">
                                <a class="btn btn-secondary btn sm" href="{{ route('autor.edit', $registro->id)}}">Alteração</a>
                                <a class="btn btn-danger btn sm" href="{{ route('autor.delete', $registro->id)}}">Exclusão</a>
                                <a class="btn btn-success btn sm" href="{{ route('autor.show', $registro->id)}}">Consulta</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a type="button" class="btn btn-primary btn-lg" href="{{ route('autor.create')}}">Incluir Novo Autor</a>
            </div>
        </div>
    </div>
</div>
@endsection
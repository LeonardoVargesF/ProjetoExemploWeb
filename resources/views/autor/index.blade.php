@extends('layout.app')
@section('content')
<h1>Brunao é muito bixa</h1>
<div>
    <x-local-sistema mensagemPrincipal="Listagem de Autores" mensagemSecundaria="Lista de Autores" url="dashboard" navegacao="Pagina Principal" />

    <div clss="container">
      @include('layout.alert')
        <div class='tile'>
            <div class='tile-body'>


                <form class="row g-3 align-items-center" action="{{ route('autor.index') }}" method="POST">
                    @csrf
                    <div class="col-7">
                        <label class="visually-hidden" for="pesquisar">Pesquisar:</label>
                        <input id="pesquisar" name="pesquisar" class="form-control" placeholder="Pesquisa" value="{{ isset($filter['pesquisar']) ? isset($filter['pesquisar']) : '' }}" />
                    </div>

                    <div class="col-2">
                        <label class="visually-hidden" for="selecionar">Quantidade:</label>

                        <select class="form-select" id="selecionar" name="perPage">
                            <option value="5" @if($perPage==5) selected @endif>5</option>
                            <option value="10" @if($perPage==10) selected @endif>10</option>
                            <option value="15" @if($perPage==15) selected @endif>15</option>
                            <option value="20" @if($perPage==20) selected @endif>20</option>
                        </select>

                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                    </div>

                </form>

                <br>

                <table class="table table-stripped table-bordered table-hover">
                    <tr class="cabecalho">
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->nome}}</td>
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
                <<div class="pagination justify-content-end">
                    @if(isset($filter))
                        {!! $registros->appends([
                            'filter'=>$filter,
                            'perPage'=>$perPage
                            ])->links() !!}
                    @else
                    {!! $registros->appends(['perPage'=>$perPage])->links() !!}
                    @endif
                </div>
                <a type="button" class="btn btn-primary btn-lg" href="{{ route('autor.create')}}">Incluir Novo Autor</a>
            </div>
        </div>
    </div>
</div>
@endsection
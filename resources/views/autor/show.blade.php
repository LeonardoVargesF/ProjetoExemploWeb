@extends('layout.app')
@section('content')
<div>
    <x-local-sistema mensagemPrincipal="Consulta de Autor" mensagemSecundaria="Consultar registro de Autor" url="autor.index" navegacao="Listagem de Autores" />

    <div class='tile'>
        <div class='tile-body'>
            <form>
                @include('autor.__form')
                <a href="{{route('autor.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layout.app')
@section('content')
<div>
<x-local-sistema 
    mensagemPrincipal="Alteração de Autor"
    mensagemSecundaria="Alterar novo registro de Autor"
    url="autor.index"
    navegacao="Listagem de Autores"
    />

    <div class='tile'>
        <div class='tile-body'>

            <form action="{{route('autor.update', $registro->id ) }}" method="POST">
                @csrf
                @method('PUT')
                @include('autor.__form')
                <button type="submit"
                        class="btn btn-primary"> Salvar registro</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layout.app')
@section('content')
<div>
    <x-local-sistema mensagemPrincipal="Exclusão de Autor" mensagemSecundaria="Excluir novo registro de Autor" url="autor.index" navegacao="Listagem de Autores" />
    <div class="container">
      @include('layout.alert')
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class='tile'>
                    <div class='tile-body'>
                        <form action="{{route('autor.destroy', $registro->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            @include('autor.__form')
                            <button type="submit"> Excluir registro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
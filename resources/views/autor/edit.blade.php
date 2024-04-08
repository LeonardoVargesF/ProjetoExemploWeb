@extends('layout.app')
@section('content')
<div>
    <x-local-sistema mensagemPrincipal="Alteração de Autor" mensagemSecundaria="Alterar novo registro de Autor" url="autor.index" navegacao="Listagem de Autores" />
    <div class="container">
      @include('layout.alert')
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class='tile'>
                    <div class='tile-body'>

                        <form action="{{route('autor.update', $registro->id ) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @include('autor.__form')
                            <button type="submit" class="btn btn-primary"> Salvar registro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
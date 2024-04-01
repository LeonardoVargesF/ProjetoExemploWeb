@extends('layout.app')
@section('content')
<div>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Inclusão de Autores</h1>
            <p>Cadastrar novo registro de autores</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>

    <div class='tile'>
    <div class='tile-body'>
    


    <form action="{{route('autor.store' ) }}" method="POST">
        @csrf
        @include('autor.__form')
        <button type="submit"> Salvar registro</button>
    </form>
    </div>
    </div>
</div>
@endsection
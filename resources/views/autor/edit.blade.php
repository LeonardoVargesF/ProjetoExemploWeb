@extends('layout.app')
@section('content')
    <div>
       <form action="{{route('autor.update', $registro->id ) }}" method="POST">
        @csrf
        @method('PUT')
        @include('autor.__form')
        <button type="submit"> Salvar registro</button>
       </form>
    </div>
@endsection
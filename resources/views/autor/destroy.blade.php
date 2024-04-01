@extends('layout.app')
@section('content')
    <div>
       <form action="{{route('autor.destroy', $registro->id ) }}" method="POST">
        @csrf
        @method('DELETE')
        @include('autor.__form')
        <button type="submit"> Excluir registro</button>
       </form>
    </div>
@endsection
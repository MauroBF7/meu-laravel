@extends('main')


@section('content')
<form method="post" action="/livros/{{$livro->id}}"> 
@csrf
@method('patch')
@include('livros.partials.form')  
</form>
@endsection
    
@extends('main')


@section('content')
<form method="post" action="/livros"> 
@csrf
@include('livros.partials.form')  
</form>
@endsection
    
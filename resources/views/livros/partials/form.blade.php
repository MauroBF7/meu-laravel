@section('javascrips_head')
<script type="text/javascript" src="{{ asset('js/livro.js') }}"></script>
@endsection

Título: <input type="text" name="titulo" value="{{ old('titulo',$livro->titulo) }}">
Autor: <input type="text" name="autor" value="{{old('autor',$livro->autor) }}">
ISBN: <input type="text" class="isbn" name="isbn" value="{{old('isbn',$livro->isbn) }}">

<button type="submit">Enviar </button>
<ul>
<li>{{ $livro->titulo ?? ''}}</li>
  <li>{{ $livro->autor ?? ''}}</li>
  <li>{{ $livro->isbn ?? ''}}</li>
  <li><a href="/livros/{{$livro->id}}/edit">Editar</a></li>
  <li>
     <form action="/livros/{{ $livro->id }} " method="post">
        @csrf
       @method('delete')
       <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
     </form>
  </li>

</ul>
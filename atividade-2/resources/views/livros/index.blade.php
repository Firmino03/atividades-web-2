<html>
<head></head>
<body>    
    <h1 >Lista do Livros</h1>        
       
<table>
  <tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Editora</th>
    <th>Autor</th>
    <th>Ano de publição</th>
    <th>Numero de paginas</th>
    <th>Ações</th>
  </tr>
    @foreach($livros as $livro)
    <tr>
        <td> {{ $livro->id }}</td>
        <td> {{ $livro->titulo }}</td>
        <td> {{ $livro->autor }}</td>
        <td> {{ $livro->editora }}</td>
        <td> {{ $livro->ano de publicação }}</td>
        <td> {{ $livro->numero de paginas }}</td>

        <td>
        <a href="{{ route('livros.show', $livro) }}" >
             Visualizar
        </a>

        <a href="{{ route('livros.edit', $livro) }}" >
             Editar
        </a>


            <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Deseja excluir este autor?')">
                Excluir
                </button>
            </form>

        </td>

    </tr>
    @endforeach
  
</table>   
</div>
</body>
</html>

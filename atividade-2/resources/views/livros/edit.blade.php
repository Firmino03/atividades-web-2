<html>
<head></head>
<body>
    <h1 >Editar livro</h1>

    <form action="{{ route('livros.update', $livro) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <label for="titulo" >titulo</label>
            <input type="text" id="titulo" name="titulo" value='{{$livro->titulo}}' required>            
        </div>
        <div >
            <label for="autor" >autor: </label>
            <input type="text" id="autor" name="autor" value="{{$livro->autor}}" required>            
        </div>

        <div >
            <label for="editora" >Editora: </label>
         <input type="text" id="editora" name="editora" value="{{$livro->editora}}" required>            

        </div>

      <div>
            <label for="ano_publicacao">Ano de Publicação: </label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" min="1900" max="2099" step="1" required>
        </div>

        <div >
            <label for="num_paginas" >Numero de paginas: </label>
            <input type="number" id="num_paginas" name="num_paginas" value="{{$livro->num_paginas}}" required>            
        </div>

        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
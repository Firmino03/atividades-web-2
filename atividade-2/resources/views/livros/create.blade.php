<html>
<head></head>
<body>

    <h1 >Cadastrar Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div >
            <label for="titulo" >Titulo:</label>
            <input type="text" id="titulo" name="titulo" required>            
        </div>
        <div >
            <label for="autor" >Autor: </label>
            <input type="text" id="autor" name="autor" required>            
        </div>

        <div >
            <label for="editora" >Editora: </label>
             <input type="text" id="editora" name="editora" required>     
        </div>

        <div>
            <label for="ano_publicacao">Ano de Publicação: </label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" min="1900" max="2099" step="1" required>
        </div>


        <div >
            <label for="num_paginas" >Quantidade de Páginas: </label>
            <input type="number" id="num_paginas" name="num_paginas" required>            
        </div>
        
        <button type="submit">
            Salvar
        </button>        
    </form>
</body>
</html>
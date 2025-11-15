<html>
    <head></head>
    <body>    
        <h1 >Detalhes do Livro</h1>        
            <div >
                <p><strong>ID:</strong> {{ $livro->id }}</p>
                <p><strong>Título:</strong> {{ $livro->titulo }}</p>
                <p><strong>Autor:</strong> {{ $livro->autor }}</p>
                <p><strong>Editora:</strong> {{ $livro->editora }}</p>
                <p><strong>Ano de Publicação:</strong> {{ $livro->ano_publicacao }}</p>
                <p><strong>Número de Páginas:</strong> {{ $livro->num_paginas }}</p>    
            </div>
    </body>
</html>
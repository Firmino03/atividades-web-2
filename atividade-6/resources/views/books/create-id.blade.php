@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Criar Livro (inserir IDs)</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('books.store.id') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label">ID (opcional)</label>
                    <input type="number" name="id" id="id" class="form-control" value="{{ old('id') }}">
                    <div class="form-text">Se quiser atribuir um ID específico ao livro (se a sua tabela permitir).</div>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label for="publisher_id" class="form-label">Publisher ID</label>
                    <input type="number" name="publisher_id" id="publisher_id" class="form-control" required value="{{ old('publisher_id') }}">
                    <div class="form-text">Informe o ID da editora (ex: 1).</div>
                </div>

                <div class="mb-3">
                    <label for="author_id" class="form-label">Author ID</label>
                    <input type="number" name="author_id" id="author_id" class="form-control" required value="{{ old('author_id') }}">
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category ID</label>
                    <input type="number" name="category_id" id="category_id" class="form-control" required value="{{ old('category_id') }}">
                </div>

                <button type="submit" class="btn btn-primary">Criar Livro</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</div>
@endsection

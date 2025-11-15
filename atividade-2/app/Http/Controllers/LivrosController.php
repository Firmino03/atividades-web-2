<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livros::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livros::create($request->all());
        return view('livros.create');
        
    }

    public function show(Livros $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(string $id)
    {
    $livro = Livros::findOrFail($id);

    return view('livros.edit', compact('livro'));
}

  public function update(Request $request, Livro $livro)
    {
        $livro->update($request->all());
        return view('livros.create');
    }
    
    public function destroy(string $id)
    {
        //
    }
}

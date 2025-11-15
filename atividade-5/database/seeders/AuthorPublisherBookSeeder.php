<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Category;

class AuthorPublisherBookSeeder extends Seeder
{
    public function run(): void
    {
        // Criar alguns autores
        $authors = Author::factory(5)->create();

        // Criar algumas editoras
        $publishers = Publisher::factory(3)->create();

        // Certificar que existam categorias
        $categories = Category::all();
        if ($categories->isEmpty()) {
            $categories = Category::factory(4)->create(); // ou criar categorias manualmente
        }

        // Criar livros e associar autor, editora e categoria aleatórios
        Book::factory(10)->create()->each(function ($book) use ($authors, $publishers, $categories) {
            $book->author_id = $authors->random()->id;
            $book->publisher_id = $publishers->random()->id;
            $book->category_id = $categories->random()->id;
            $book->save();
        });
    }
}

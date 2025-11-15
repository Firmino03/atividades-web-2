<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Exemplo de criação de categorias
        Category::create(['name' => 'Ficção']);
        Category::create(['name' => 'Não-ficção']);
        Category::create(['name' => 'Ciência']);
        Category::create(['name' => 'História']);
    }
}

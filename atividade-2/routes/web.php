<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;	

Route::resource('livros', LivrosController::class);

Route::get('/', function () {
    return view('welcome');
});

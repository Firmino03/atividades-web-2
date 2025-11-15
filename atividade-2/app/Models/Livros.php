<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = ['titulo','autor', 'editora', 'ano_publicacao','num_paginas'];
}

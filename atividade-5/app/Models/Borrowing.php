<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'book_id', 'borrowed_at', 'returned_at'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'borrowings')
                    ->withPivot('borrowed_at', 'returned_at')
                    ->withTimestamps();
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

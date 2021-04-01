<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_image', 'publisher', 'author', 'isbn', 'title', 'price', 'stock'
    ];

    protected $hidden = [
        'id'
    ];
}

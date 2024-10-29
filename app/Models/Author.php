<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Author extends Model
{

    // protected $with=['books'];

    protected $hidden = ['created_at', 'updated_at', 'pivot'];

    function books(){
        return $this->belongsToMany(Book::class, 'author_books');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
class Book extends Model
{
    // protected $with=['authors'];
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
    function authors(){
        return $this->belongsToMany(Author::class, 'author_books');
    }
}

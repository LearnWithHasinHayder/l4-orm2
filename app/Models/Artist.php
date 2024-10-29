<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
use App\Models\Track;

class Artist extends Model
{
    //relation with albums table

    function albums(){
        return $this->hasMany(Album::class);
        // return $this->hasMany('App\Models\Album');
    }

    //relation with tracks table
    function tracks(){
        return $this->hasManyThrough(Track::class, Album::class);
    }
}

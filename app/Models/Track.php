<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
use App\Models\Artist;

class Track extends Model
{
    function album(){
        return $this->belongsTo(Album::class);
    }

    function artist(){
        // return $this->belongsTo(Artist::class);
        return $this->belongsToThrough(Artist::class, Album::class);
    }
}

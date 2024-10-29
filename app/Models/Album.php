<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Track;

class Album extends Model
{
    function artist(){
        return $this->belongsTo(Artist::class);
    }

    function tracks(){
        return $this->hasMany(Track::class);
    }
}

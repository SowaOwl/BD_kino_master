<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;
    public function medias(){
        return $this->belongsToMany(Medias::class);
    }

    public function genres(){
        return $this->belongsToMany(Genres::class);
    }
}

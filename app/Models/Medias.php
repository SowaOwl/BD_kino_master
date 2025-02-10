<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsToMany(Actors::class);
    }
    public function genres(){
        return $this->belongsToMany(Genres::class);
    }
}

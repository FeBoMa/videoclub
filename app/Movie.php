<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function locals(){
        return $this->belongsToMany(Local::class);
    }
}

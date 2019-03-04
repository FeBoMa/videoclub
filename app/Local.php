<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $table = "local";

     public function salas()
    {
        return $this->hasMany(Sala::class);


    }
}
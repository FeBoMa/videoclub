<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = "subscription";


    public function user(){
        return $this->hasMany(User::class);
    }
}

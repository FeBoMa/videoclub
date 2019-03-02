<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $table = "local";
    protected $primaryKey = 'id_local';
    
     public function salas()
    {
    	return $this->hasMany('App\Sala');
       
        
    }
    
}

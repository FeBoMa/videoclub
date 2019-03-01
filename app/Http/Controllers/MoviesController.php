<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function showMovies($id='Hola'){
        //$user = Movie::findOrFail($id);
        
        return $id;
    }
}

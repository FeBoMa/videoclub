<?php

namespace App\Http\Controllers;

use App\Local;
use Illuminate\Http\Request;

class LocalController extends Controller {

    public function getIndex() {
        $local = Local::all();
        return view('local.index', array('arrayLocals' => $local));
        //return view('catalog.index',array('arrayPeliculas'=>$this->arrayPeliculas));
    }

    public function getShow($id){
        $local = Local::findOrFail($id);
        $list = $local->salas;
 
        return view('local.show', compact('list'),array('Local' => $local));
               
        
    }

    public function getCreate() {
        return view('local.create');
    }

    public function postCreate(Request $request) {
        $Local = new Local;
        $Local->address = $request->input('address');
        $Local->telephon = $request->input('telephon');
        $Local->google_maps = $request->input('google_maps');    
        $Local->save();
        // Notification::success('Success message');
        return redirect('/local');
        //return view('catalog.create');
    }

    public function getEdit($id) {
        $local = Local::findOrFail($id);
        return view('local.edit', array('Local' => $local));

        //director=Director::findOrFail($movies->id_director);
        //directors=Director::all();
    }

    public function putEdit(Request $request, $id) {
        $Local = Local::findOrFail($id);
        $Local->address = $request->input('address');
        $Local->telephon = $request->input('telephon');
        $Local->google_maps = $request->input('google_maps');    
        $Local->save();
        //  Notification::success('Success message');
        return redirect('/catalog/local/show/' . $id);
    }

    public function deleteLocal($id) {
        $Local = Local::findOrFail($id);
        $Local->delete();
        // Notification::success('Success Delete');
        return redirect('/local');
    }

}

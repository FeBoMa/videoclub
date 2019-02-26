<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller {

    public function getIndex() {
        $compa = Company::all();
        return view('company.index', array('arrayCompanies' => $compa));
        //return view('catalog.index',array('arrayPeliculas'=>$this->arrayPeliculas));
    }

    public function getShow($id) {
        $compa = Company::findOrFail($id);

        return view('company.show', array('Company' => $compa));
        //return view('catalog.show', array('Pelicula'=>$this->arrayPeliculas[$id],'id'=>$id));
    }

    public function getCreate() {
        return view('company.create');
    }

    public function getEdit($id) {
        $compa = Movie::findOrFail($id);
        return view('company.edit', array('Company' => $compa));
    }

}

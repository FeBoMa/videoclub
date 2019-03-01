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
        //return view('company.show', array('Company'=>$this->arrayCompanies[$id],'id'=>$id));
    }

    public function getCreate() {
        return view('company.create');
    }

    public function postCreate(Request $request) {
        $Company = new Company;
        $Company->companyName = $request->input('company_name');
        $Company->fundation = $request->input('foundation');
        $Company->president = $request->input('president');
        $Company->poster = $request->input('poster');
        $Company->save();
        // Notification::success('Success message');
        return redirect('/catalog/company');
        //return view('catalog.create');
    }

    public function getEdit($id) {
        $compa = Company::findOrFail($id);
        return view('company.edit', array('Company' => $compa));

        //director=Director::findOrFail($movies->id_director);
        //directors=Director::all();
    }

    public function putEdit(Request $request, $id) {
        $Company = Company::findOrFail($id);
        $Company->companyName = $request->input('companyName');
        $Company->fundation = $request->input('fundation');
        $Company->president = $request->input('president');
        $Company->poster = $request->input('poster');
        $Company->save();
      //  Notification::success('Success message');
        return redirect('/catalog/company/show/' . $id);
    }

    public function deleteCompany($id) {
        $Company = Company::findOrFail($id);
        $Company->delete();
        // Notification::success('Success Delete');
        return redirect('/catalog/company');
    }

}

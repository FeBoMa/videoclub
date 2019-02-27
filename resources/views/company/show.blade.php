@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="{{$Company->poster}}" style="height:200px"/>
    </div>
    <div class="col-sm-8">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$Company->companyName}}
        </h4>
          <p>Año: {{$Company->fundation}}</p>
          <p>Director: {{$Company->president}}</p>
          
        <form action="{{action('CompanyController@deleteCompany', $Company->id_company)}}" 
            method="POST" style="display:inline">
            {{ method_field('delete') }}
            {{ csrf_field() }}
             <button type="submit" class="btn btn-danger" style="display:inline">
                Eliminar
            </button>
        </form>
          
          <!--<a class="btn btn-primary" href="#" role="button">Alquilar película</a>-->
          <a class="btn btn-warning" href="/catalog/company/edit/{{$Company->id_company}}" role="button">Editar la compañia</a>
         
          <a class="btn btn-outline-dark" href="/catalog/company" role="button">< Volver al listado</a>
    
    

      




        </div>
</div>
@stop
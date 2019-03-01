@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="{{$Local->google_maps}}" style="height:200px"/>
    </div>
    <div class="col-sm-8">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$Local->address}}
        </h4>
          <p>Telefono: {{$Local->telephon}}</p>
    
          
        <form action="{{action('LocalController@deleteLocal', $Local->id_local)}}" 
            method="POST" style="display:inline">
            {{ method_field('delete') }}
            {{ csrf_field() }}
             <button type="submit" class="btn btn-danger" style="display:inline">
                Eliminar
            </button>
        </form>
          
          <!--<a class="btn btn-primary" href="#" role="button">Alquilar película</a>-->
          <a class="btn btn-warning" href="/catalog/local/edit/{{$Local->id_local}}" role="button">Editar local</a>
         
          <a class="btn btn-outline-dark" href="/catalog/local" role="button">< Volver al listado</a>
    
    

      




        </div>
</div>
@stop
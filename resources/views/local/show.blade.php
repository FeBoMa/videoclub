@extends('layouts.master')

@section('content')
<?php
//print_r($list);

foreach ($list as $key) {
    print_r($key);
    echo "<br><br>";
}
?>

<div class="row">

    <div class="col-sm-4">
        <img src="{{$Local->google_maps}}" style="height:200px"/>
    </div>
    <div class="col-sm-8">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$Local->address}}
        </h4>
        <p>Telefono: {{$Local->telephon}}</p>


        <form action="{{action('LocalController@deleteLocal', $Local->id)}}" 
              method="POST" style="display:inline">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger" style="display:inline">
                Eliminar
            </button>
        </form>

        <!--<a class="btn btn-primary" href="#" role="button">Alquilar película</a>-->
        <a class="btn btn-warning" href="/local/edit/{{$Local->id}}" role="button">Editar local</a>
        <a class="btn btn-warning" href="/sala/{{$Local->id}}" role="button">Salas</a>

        <a class="btn btn-outline-dark" href="/local" role="button">< Volver al listado</a>

    </div>
</div>
@stop
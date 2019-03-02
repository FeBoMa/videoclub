@extends('layouts.master')

@section('content')

<div>
    <ul>
        <li class="nav-item {{  Request::is('catalog/local/sala/create') ? 'active' : ''}}">
            <a  href="{{url('/catalog/local/sala/create')}}">
                Añadir Sala
            </a>
        </li>

</ul>
  
</div>




<div class="row">
    
    $salas = App\Local::find(2)->salas;
    @foreach( $salas as $sala )
    
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/catalog/local/sala/show/' . $sala->id_sala) }}">
            <img src="{{$sala->sala_photo}}" style="height:200px; width:200px;"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$sala->sala_name}}
            </h4>
            
        </a>
    </div>
    @endforeach
</div>


@stop

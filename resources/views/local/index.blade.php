@extends('layouts.master')

@section('content')

  <div style="margin-bottom: 15px;" class="col-md-5" align="left">
     <a href="{{ url('/local/pdf') }}" class="btn btn-danger">PDF</a>
    </div>
<div style="margin-bottom: 15px;" class="col-md-5" align="left">
     <a href="{{ url('/local/excel') }}" class="btn btn-danger">EXCEL</a>
    </div>

<div>
    <ul>
        <li class="nav-item {{  Request::is('catalog/local/create') ? 'active' : ''}}">
            <a  href="{{url('/local/create')}}">
                Añadir Local
            </a>
        </li>

</ul>
  
</div>


<div class="row">
    @foreach( $arrayLocals as $local )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/local/show/' . $local->id)}}">
            <img src="{{$local->google_maps}}" style="height:200px; width:200px;"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$local->address}}
            </h4>
        </a>
    </div>
    @endforeach
</div>


@stop

@extends('layouts.master')

@section('content')

<div class="row">
    @foreach( $arrayCompanies as $company )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/company/show/' . $company->id_company ) }}">
            <img src="{{$company->poster}}" style="height:200px; width:200px;"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$company->companyName}}
            </h4>
        </a>
    </div>
    @endforeach
</div>


@stop

@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
            Modificar Usuario
          </div>
          <div class="card-body" style="padding:30px">
 
             {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form method="POST">
             {{method_field('PUT')}}
             {{-- TODO: Protección contra CSRF --}}
             {{ csrf_field() }}

             <div class="form-group">
                <label for="Nombre">Nombre</label>
             <input type="text" name="name" id="name" class="form-control" value="{{$User->name}}">
             </div>
 
             <div class="form-group">

                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$User->email}}">

             </div>
 
             <div class="form-group">
                <label for="subscription">Subscripción</label>
                <input type="text" name="subscription" id="subscription" class="form-control" value="{{$User->subscription}}">

             </div>
 
             <div class="form-group">
               
                <label for="userAge">Edad</label>
                <input type="number" name="userAge" id="userAge" class="form-control" value="{{$User->userAge}}">
             </div>
 
 
             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 75px;margin-top:25px;">
                    Modificar
                </button>
             </div>
 
             {{-- TODO: Cerrar formulario --}}
            </form>
          </div>
       </div>
    </div>
 </div>


@stop





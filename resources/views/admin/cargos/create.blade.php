@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>dar alta nuevo cargo</h1>
@stop

@section('content')
   <div class="card">
       
       <div class="card-body">
           <!--uso laravel collective para hacer los formularios--> 
            {!!Form::open(['route'=>'admin.cargos.store'])!!}
            
            <div class="form-group">
            {!!Form::label('agru','agru')!!}
            {!!Form::text('agru',null,['class'=>'form-control','palceholder'=>'Ingrese el grupo al que pertenece'])!!}
            
            @error('agru')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            {!!Form::label('cod','cod')!!}
            {!!Form::text('cod',null,['class'=>'form-control','palceholder'=>'Ingrese el codigo'])!!}
           
            @error('cod')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            {!!Form::label('descripcion','descripcion')!!}
            {!!Form::text('descripcion',null,['class'=>'form-control','palceholder'=>'Ingrese una descripcion'])!!}
            @error('descripcion')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            {!!Form::label('tipo_nomenclador','tipo nomenclador')!!}
            {!!Form::text('tipo_nomenclador',null,['class'=>'form-control','palceholder'=>'Ingrese tipo de nomenclador'])!!}
            @error('tipo_nomenclador')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            {!!Form:: submit('Nuevo Cargo',['class'=>'btn btn-primary'])}
            
            {!!Form::close()!!}
       
       </div>

   </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
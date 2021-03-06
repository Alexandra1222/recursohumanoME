@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    
@stop

@section('content')
<div class="card">
       
       <div class="card-body">
           <!--uso laravel collective para hacer los formularios--> 
            {!!Form::open(['route'=>'admin.pofs.store'])!!}
            
            <div class="form-group">
            {!!Form::label('categoria','categoria')!!}
            {!!Form::text('categoria',null,['class'=>'form-control','palceholder'=>'Ingrese la categoria '])!!}
            
            @error('categoria')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


            <div class="form-group">
            {!!Form::label('nomenclador_id','cargo-funcion')!!}
            {!!Form::text('categoria',null,['class'=>'form-control','palceholder'=>'Ingrese la categoria '])!!}
            
            @error('categoria')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            {!!Form::label('apellido_y_nombre_del_agente','apellido_y_nombre_del_agente')!!}
            {!!Form::text('apellido_y_nombre_del_agente',null,['class'=>'form-control','palceholder'=>'apellido_y_nombre_del_agente'])!!}
           
            @error('apellido_y_nombre_del_agente')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            {!!Form::label('dni_del_agente','dni_del_agente')!!}
            {!!Form::text('dni_del_agente',null,['class'=>'form-control','palceholder'=>'Ingrese dni_del_agente sin puntos'])!!}
            @error('dni_del_agente')
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

            {!!Form:: submit('Nuevo Pof',['class'=>'btn btn-primary'])}
            
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
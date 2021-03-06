@extends('adminlte::page')

@section('title', 'Administración cargos')

@section('content_header')
    <h1>cargos</h1>
@stop

@section('content')
    <div class="card">

    <div class="card-header">
    <a class="btn btn-secondary " href="{{route('admin.cargos.create')}}">Agregar Nuevo Cargo</a>
    </div>

        <div class="card-body">
             <table class=" table table-striped">
                <thead>
                   
                   <tr>
                      <th>agru</th>
                      <th>cod</th>
                      <th>descripcion</th>
                      <th>tipo nomenclador</th>
                      <th colspan="2" ></th>
                   </tr>
                
                </thead>

                 <body>
                    @foreach($nomenclador as $cargo)

                     <tr>
                         <td>{{$cargo->agru}}</td>
                         <td>{{$cargo->descripcion}}</td>
                         <td>{{$cargo->tipo_nomenclador}}</td>
                         
                         <td width="10px">
                         <a class="btn btn-primary btn-sm" href="{{route('admin.cargos.edit',$cargo)}}">Editar</a>  
                         </td>

                         <td width="10px">
                            <form action="{{route('admin.cargos.destroy',$cargo)}}" method="POST">
                            @csrf
                            @method('delete')
                               <button type="submit" class="btn btn-danger btn-sm">Eliminar </button>
                            </form>
                         </td>

                        

                         
                     </tr>
                </body>
             </table>
        </div>
    </div>
@stop


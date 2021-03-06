<div class="card">
   
   @if($pofs->count())
   <div class="card-header">
   <input wire:model="search" class="form-control" placeholder="busqueda por dni del agente">
   </div>

    
    <div class="card-body">
   
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Escuela</th>
                <th scope="col">Localidad</th>
                <th scope="col">Departamento</th>
                <th scope="col">Categoria</th>
                <th scope="col">Cargo/Función</th>
                <th scope="col">Apellido y Nombre del Agente</th>
                <th scope="col">Dni del Agente</th>
                <th scope="col">Antigüedad</th>
                <th scope="col">Origen del Cargo-Modalidad de Contratación/Vinculación</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Ultimo Nivel Formación Concluido</th>
                <th scope="col">Número de teléfono</th>
                <th scope="col">Fecha de Carga</th>
                <th scope="col">Estado</th>
                <th colspan="2"></th>
               </tr>
            </thead>

             <tbody>  
               @foreach($pofs as $pof )
                 <tr>
                 <td>{{$pof->escuela}}</td>
                 <td>{{$pof->localidad}}</td>
                 <td>{{$pof->departamento}}</td>
                 <td>{{$pof->categoria}}</td>
                 <td>{{$pof->cargo_función}}</td>
                 <td>{{$pof->apellido_y_nombre_del_agente}}</td>
                 <td>{{$pof->dni_del_agente}}</td>
                 <td>{{$pof->antiguedad}}</td>
                 <td>{{$pof->origen_del_cargo_modalidad_de_contratación}}</td>
                 <td>{{$pof->observaciones}}</td>
                <td>{{$pof->ultimo_nivel_formación_concluido}}</td>
                <td>{{$pof->numero_de_telefono }}</td>
                <td>{{$pof->fecha_carga }}</td>
                <td>{{$pof->estado }}</td>

         
                 <td width="10px">
                 <a class="btn btn-primary btn-sm" href="{{route('admin.pofs.edit',$pof)}}">Editar</a>     
                 </td>

                <td width="10px">
                <form action="{{route('admin.pofs.destroy',$pof)}}" method="POST">
                 @csrf
                 @method('DELETE')
                <button class=" btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
                </td>
               </tr>
            </tbody>
        </table>
    </div>
    <!--msj que se  muestra si no encuentra el registro en la tabla-->
    @else 
    <strong>no se encontró registro</strong>
    @endif
    

<div class="card-footer">
{{$pofs->links()}}
</div>



</div>

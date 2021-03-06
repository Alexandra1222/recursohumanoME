<x-app-layout>

    <div class="container bg-red-600 ">
        
    <table id="pof"class="table table-striped table-bordered shadow-lg mt-4" style="width:70%">

<thead class="bg-danger text-white">
  <tr >
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
    

  </tr>
</thead>
<body>
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


   </tr>

 @endforeach
</body>
</table>

    </div>

</x-app-layout>

@extends('administrador.menuAdmin')
@section('content')
<div class="ks-column ks-page">
   <div class="ks-page-header">
      <section class="ks-title">
         <h3>DONANTES</h3>
      </section>
   </div>
   <div class="table-responsive" style="margin-top:5%;">
      <table id="example" class="hover row-border stripe">
         <thead>
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Tipo de sangre</th>
               <th>Celular</th>
               <th>Género</th>
               <th>Acciones</th>
            </tr>
         </thead>
         <tbody>
            @foreach($donantes as $donante)
            <tr>
               <td>{{ $donante->id }}</td>
               <td>{{ $donante->nombre }}</td>
               <td>{{ $donante->apellido }}</td>
               <td>{{ $donante->tiposangre->nombre }}</td>
               <td>{{ $donante->celular }}</td>
               <td>{{ $donante->genero? 'Masculino' : 'Femenino' }}</td>
               <td>
                  <a href="#" class="btn btn-sm btn-xs btn-warning"><i class="fas fa-pen"></i></a>
                  <a href="#" class="btn btn-sm btn-xs btn-danger"><i class="fa fa-times"></i></a>
               </td>
            </tr>
            @endforeach
         </tbody>
         <tfoot>
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Tipo de sangre</th>
               <th>Celular</th>
               <th>Género</th>
               <th>Acciones</th>
            </tr>
         </tfoot>
      </table>
   </div>
</div>
@stop

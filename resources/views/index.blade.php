@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Libros</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('empresa.create') }}" class="btn btn-info" >Añadir Libro</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Id</th>
               <th>Name</th>
               <th>Email</th>
               <th>Imagen</th>
               <th>Sitio Web</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($empresa->count())  
              @foreach($empresa as $empresa)  
              <tr>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->resumen}}</td>
                <td>{{$empresa->npagina}}</td>
                <td>{{$empresa->edicion}}</td>
                <td>{{$empresa->autor}}</td>
                <td>{{$empresa->precio}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('EmpresaController@edit', $empresa->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EmpresaController@destroy', $empresa->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $empresa->links() }}
    </div>
  </div>
</section>

@endsection
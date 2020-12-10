@extends('adminlte::page')

@section('content_header')
<h1>
    Categoría
    <a href="/Categorias" class="btn btn-primary">Regresar</a>
    
</a>
</h1>
@stop
@section('content')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$categoria->id}}</td>
      <td>{{$categoria->nombre}}</td>
      <td>{{$categoria->descripcion}}</td>
    </tr>
    
  </tbody>
</table>
@endsection 

@extends('adminlte::page')

@section('content_header')
<h1>
    Usuarios
    <a href="Usuarios" class="btn btn-primary">Regresar</a>
</h1>
@stop
@section('content')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de Usuario</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Tipo de Usuario</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$usuario->id}}</td>
      <td>{{$usuario->nombre}}</td>
      <td>{{$usuario->a_paterno}}</td>
      <td>{{$usuario->a_materno}}</td>
      <td>{{$usuario->rol}}</td>
      <td>
          <img src="/fotos/{{$usuario->imagen}}" height="150" width="150 " alt="" class="img-thumnail">
      </td>
    </tr>
    
  </tbody>
</table>
@endsection 

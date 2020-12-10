@extends('adminlte::page')

@section('content_header')
<h1>
    Producto
    <a href="/Productos" class="btn btn-primary">Regresar</a>
</h1>
@stop
@section('content')
<table class="table table-sm">
  <thead>
    <tr>
      
      <th scope="col">Nombre de Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Desripción</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->precio}}</td>
      <td>{{$producto->descripcion}}</td>
     
      <td>
          <img src="/fotos/{{$producto->imagen}}" height="200" width="200 " alt="" class="img-thumnail">
      </td>
    </tr>
    
  </tbody>
</table>
@endsection 

@extends('adminlte::page')

@section('content_header')
<h1>
<h1>
    Editar
    <a href="/Productos" class="btn btn-primary">Regresar</a>
</h1>
</h1>
@stop
@section('content')
@if (session('error'))
<div>
    {{ session('error') }}
</div>
<br>
@endif
<form action="/Productos/{{$producto->id}}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
    </div>


    @can('cambiarPrecio', $producto)
    <div class="form-group">
        <label for="precio">Precio:</label>
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input id="precio" type="number" name="precio" class="form-control" value="{{$producto->precio}}">
        <div class="input-group-append"> 
            <span class="input-group-text">.00</span>
        </div>
    </div>
     @endcan
    <div class="form-group">
        <label for="descrpcion">Descripción:</label>
        <input id="descripcion" type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen del producto:</label>
        <img src="/fotos/{{$producto->imagen}}" height="150" width="150 " alt="" class="img-thumnail">
        <input type="file" name="imagen" id="imagen">
    </div>
    
    
    <input type="submit" class="btn btn-primary" value="Enviar">   



</form>
@endsection
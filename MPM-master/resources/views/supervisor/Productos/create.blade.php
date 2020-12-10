@extends('adminlte::page')

@section('content_header')
<h1>
    Crear
    <a href="/Productos" class="btn btn-primary">Regresar</a>
</h1>
@stop
@section('content')
@if (session('error'))
<div>
    {{ session('error') }}
</div>
<br>
@endif
<form action="/Productos" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre" class="form-control">
    </div>
   
    <div class="form-group">
        <label for="imagen">Imagen del producto:</label>
        <input type="file" name="imagen" id="imagen">
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input id="precio" type="number" name="precio" class="form-control">
    </div>
    <div class="form-group">
        <label for="a_materno">Descripción:</label>
        <textarea id="descripcion" class="form-control" name="descripcion" rows="5"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>
@endsection
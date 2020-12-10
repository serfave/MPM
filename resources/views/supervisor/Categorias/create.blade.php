@extends('adminlte::page')

@section('content_header')
<h1>Crear
<a href="/Categorias" class="btn btn-primary">Regresar</a>
</h1>
  
@stop

@section('content')
@if (session('error'))
<div>
    {{ session('error') }}
</div>
<br>
@endif

<form action="/Categorias" method="post" enctype="multipart/form-data" >
	 @csrf
    <div class="form-group">
      <label for="nombre">Nombre de la sección:</label>
      <input id="nombre" type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion de la sección: </label>
      <textarea id="descripcion" class="form-control" name="descripcion" rows="5"></textarea>
    </div>
  
    <input type="submit" class="btn btn-primary" value="Enviar">  
</form>

  
@endsection 
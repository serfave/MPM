@extends('adminlte::page')

@section('content_header')
<h1>
    Editar
    <a href="/Categorias" class="btn btn-primary">Regresar</a>
</h1>
@stop
@section('content')
<form action="/Categorias/{{$categoria->id}}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="form-group col-md-3">
        <label for="exampleFormControlInput1">Nombre de la categoria</label>
        <input id="nombre" type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Descripcion</label>
         <textarea id="descripcion" class="form-control" name="descripcion" rows="5"></textarea>
    
    
    <br>
    <button class="btn btn-primary" type="submit">Actualizar</button>
    <button class="btn btn-danger" type="submit">Cancelar</button>
</form>
   
@endsection

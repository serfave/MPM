@extends('layout.general')
@section('estilos')
 <script src="/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
  <script src="/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection
@section('breadcumb')
<h1>
    Categoria
    <a href="Categorias/create" class="btn btn-primary">Agregar Categoria</a>
</h1>
@endsection
@section('content')

<table border="1" class="table table-striped">
<thead class="thead-dark">
        <th>Nombre</th>
        
        <th>Acciones</th>
</thead>
<tbody class="thead-light">
    @forelse ($categorias as $categoria)
        <tr>
        <td scope="row" >{{$categoria->nombre}}</td>
       
        <td>
            <a href="{{ url('/Categorias/'.$categoria->id.'/edit') }}" role="button" class="btn btn-success" data-toggle="modal">Editar</a>
            <a href="{{ url('/Categorias/'.$categoria->id.'/show') }}" role="button" class="btn btn-warning" data-toggle="modal">Mostrar</a>


            <form action="{{ url('/Categorias/'.$categoria->id) }}" method="post" style="display: inline;"  onsubmit="return confirm('Desea eliminar');">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
   @empty
        <tr>
            <td colspan="3">Sin categorias registradas</td>
        </tr>

    @endforelse
</tbody> 
</table>

@endsection
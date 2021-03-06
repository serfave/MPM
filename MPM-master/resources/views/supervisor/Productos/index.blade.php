@extends('layout.general')
@section('estilos')
 <script src="/bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
  <script src="/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection
@section('breadcumb')
<h1>
    Productos
    <a href="Productos/create" class="btn btn-primary">Agregar Producto</a>
</h1>
<form class="navbar-form navbar-left pull-right">

<input name="buscar" class="form-control mr-sm-2" type="search" placeholder="nombre del producto" aria-label="Search" autocomplete="on">
<button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
</form>
@endsection
@section('menu')
<li class="dropdown-item"><a class="text-success" href="/tablero">Dashboard</a></li>
<li class="dropdown-item"><a href="/Categorias">Categorias</a></li>
<li class="dropdown-item"><a href="/Usuarios">Usuarios</a></li>
<li class="dropdown-item"><a href="charts.html">Charts</a></li>
<li class="dropdown-item"><a href="elements.html">UI Elements</a></li>
<li><a href="panels.html">Panels</a></li>
<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    </a>
    <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
        </a></li>
        <li><a class="" href="#">
            <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
        </a></li>
    </ul>
</li>
<li><a href="login.html">Logout</a></li>
@endsection
@section('content')

<table border="1" class="table table-striped">
<thead class="thead-dark">
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Acciones</th>
</thead>
<tbody class="thead-light">
    @forelse ($productos as $producto)
        <tr> @if($producto->nombre)
        
        @endif
        
            <td>{{ $producto->nombre }}</td>
            <td> <img src="/fotos/{{$producto->imagen}}" height="150" width="200 " alt="" class="img-thumnail"></td>
            <td>
                <a href="/Productos/{{$producto->id}}/edit" class="btn btn-success">Editar</a>
                <a href="/Productos/{{$producto->id}}" class="btn btn-warning">Mostrar</a>
                <form action="/Productos/{{$producto->id}}" method="post" style="display: inline;"  onsubmit="return confirm('Desea eliminar');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>    
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Sin productos registrados</td>
        </tr>
    @endforelse
</tbody> 
</table>
@endsection
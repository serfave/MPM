@extends('layout.general')
@section('breadcumb')
<li class="active">Dashboard</li>
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
@switch(Auth::user()->rol)
@case( 'Supervisor')
    <div class="card-colums">
        <div class="card">
            <img src="/fotos/usuarios.png" alt="Card image cap" class="card-img-top">
            <div class="card-body">
                <h5 class="card-tittle">Usuarios registrados</h5>
                <p class="card-text">Clientes: {{$clientes ??''}} </p>
                <p class="card-text">Empleados: {{$empleados}} </p>
            </div>
            
        </div>
         <div class="card">
            <img src="/secciones/productoss.png" alt="Card image cap" class="card-img-top">
            <div class="card-body">
                <h5 class="card-tittle">Productos</h5>
                <p class="card-text">Registrados: {{$productos ??''}} </p>
                <p class="card-text">Concesionados: {{$concesionados}} </p>
            </div>
        </div>
         <div class="card">
            <img src="/secciones/categoriass.png" alt="Card image cap" class="card-img-top">
            <div class="card-body">
                <h5 class="card-tittle">Categorias</h5>
                <p class="card-text">Registrados: {{$categorias}} </p>
                
            </div>
        </div>
    </div>
    @break
    @case ('Encargado')
    incio de encargado
    @break


@endsection

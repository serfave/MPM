<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Categoria;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $categorias= Categoria::all();
    return view('welcome');
});

Route::get('/apat', function () {
    return view('layout.apat');
});
Route::get('/amat', function () {
    return view('layout.amat');
});
Route::get('/nombre', function () {
    return view('layout.nombre');
});
Route::get('/salir', function() {
    Auth::logout();
    return view('autenticar'); 
    
});

Route::get('autenticar', function() {
    return view('autenticar'); 
    
});
Route::get('/Categorias', function() {
    return view('supervisor.Categorias.index'); 
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});
/*(Route::get('/tablero', function() {
    return view('tablero'); 
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});*/

Route::get('tablero','InicioControler@tablero');

Route::get('revisar', function() {
    return view('revisar'); 
});
Route::get('cuenta', function() {
    return view('cuenta'); 
});
Route::get('category', function() {
    return view('category'); 
});
Route::post('validar', 'AutenticarControler@validar');


Route::get('listar_por_categoria/{categoria_id}','BuscarControler@listar_por');


Route::get('Categorias','CategoriasControler@index');
Route::post('Categorias','CategoriasControler@store');
Route::get('Categorias/create','CategoriasControler@create');
Route::get('Categorias/{categoria}','CategoriasControler@show');
Route::put('Categorias/{categoria}','CategoriasControler@update');
Route::delete('Categorias/{categoria}','CategoriasControler@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasControler@edit');

Route::resource("Usuarios", "UsuariosControler");
Route::resource("Productos", "ProductosControler");
Route::resource("Cliente", "ClienteControler");
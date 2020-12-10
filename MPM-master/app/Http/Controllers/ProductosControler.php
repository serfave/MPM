<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;




class ProductosControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productos = Producto::all();
        //$productos = Producto::where('usuario_id',Auth::id())->get();
        return view('supervisor.Productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = $request->all();

        $imagen = $request->file('imagen');
        $ruta_destino = public_path('fotos/');
        $nombre_de_archivo = $imagen->getClientOriginalName();
        $imagen->move($ruta_destino, $nombre_de_archivo);    

        $valores['imagen']=$nombre_de_archivo;


        $registro = new Producto();
        $registro->fill($valores);
        $registro->save();

        return redirect("/Productos")->with('mensaje','Producto agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('supervisor.Productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('supervisor.Productos.edit',compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valores = $request->all();

        $imagen = $request->file('imagen');
        if(!is_null($imagen))
        {
            $ruta_destino = public_path('fotos/');
            $nombre_de_archivo = $imagen->getClientOriginalName();
            $imagen->move($ruta_destino, $nombre_de_archivo);        
            $valores['imagen']=$nombre_de_archivo;
        }

        $registro = Producto::find($id);
        $registro->fill($valores);
        $registro->save();

        return redirect("/Productos")->with('mensaje','Producto modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $registro = Producto::find($id);
            $registro->delete();
            return redirect("/Productos")->with('mensaje','Producto modificado correctamente');
        }catch (\Illuminate\Database\QueryException $e) {
            return redirect("/Productos")->with('error',$e->getMessage());
        }

    }

    
}

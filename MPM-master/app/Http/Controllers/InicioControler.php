<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioControler extends Controller
{
    public function tablero()
    {
        switch (Auth::user()->rol) {
            case 'Supervisor':
                $usuario = DB::table('usuarios')->count();
                $cliente = DB::select('SELECT count(*) as cuantos from usuarios where rol ="Cliente"')[0]->cuantos;
                $empleados = DB::select('SELECT count(*) as cuantos from usuarios where rol <> "Cliente"')[0]->cuantos;
                $productos = DB::table('productos')->count();
                $concesionados = DB::select('SELECT count(*) as cuantos from productos where concesionado = 1')[0]->cuantos;
                $categorias = DB::table('categorias')->count();
                return view('tablero', compact('usuarios','clientes','empleados','productos','concesionados','categorias'));

                break;
            
            default:
                return view('tablero');
                break;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Observers;

use App\Models\Categoria;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Auth;

class CategoriaObserver
{
    protected $usuario = null;
    public function __constuct()
    {
        $user = Auth::User();
        if(is_null($user))
            $this->usuario = 'Anonimo';
        else
            $this->usuario = $user->nombre;

    }


    /**
     * Handle the categoria "created" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function created(Categoria $categoria)
    {
         $registro = Bitacora::create([
            'quien' => $this->usuario,
            'accion' => 'Actualizó categoría',
            'que' => $categoria->toJson()
        ]);
    }

    /**
     * Handle the categoria "updated" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function updated(Categoria $categoria)
    {
        
    }

    /**
     * Handle the categoria "deleted" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function deleted(Categoria $categoria)
    {
        $registro = Bitacora::create([
            'quien' => $this->usuario,
            'accion' => 'Eliminó categoría',
            'que' => $categoria->toJson()
        ]);
    }

    /**
     * Handle the categoria "restored" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function restored(Categoria $categoria)
    {
        //
    }

    /**
     * Handle the categoria "force deleted" event.
     *
     * @param  \App\Categoria  $categoria
     * @return void
     */
    public function forceDeleted(Categoria $categoria)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','imagen','precio','descripcion'];


    public function propietario()
    {
        return $this-hasOne('App\Models\Usuario','id','usuario_id');
    }
    public function estaConcesionado()
    {
        if($this->concesionado)
            return "SI";
            else
            return "NO";
    }

    public function usuario()
    {
        return $this-belongsTo('App\Models\Usuario');
    }



}



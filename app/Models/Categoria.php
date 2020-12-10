<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
public $timestamps = false;
protected $fillable = ['nombre','descripcion'];



public function productos()
{
    return $this-hasMany('App\Models\Producto');
}
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Autenticable;

class Usuario extends Autenticable
{
     public $timestamps = false;
    protected $fillable = ['nombre','a_paterno','a_materno','imagen','rol','activo','password'];
}

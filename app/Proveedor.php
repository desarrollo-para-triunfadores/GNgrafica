<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  	protected $table =  "proveedores";

    protected $fillable = ['nombre', 'cuit', 'telefono', 'email'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}

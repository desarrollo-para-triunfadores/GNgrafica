<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  	protected $table =  "proveedores";

    protected $fillable = ['nombre', 'cuit', 'imagen',  'rubro_id', 'telefono', 'email'];

    public function rubro() 
    {
        return $this->belongsTo('App\Rubro');
    }
    
    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}

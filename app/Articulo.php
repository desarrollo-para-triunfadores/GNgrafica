<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
	protected $table =  "articulos";

    protected $fillable = ['nombre', 'proveedor_id', 'stockMin', 'descripcion'];

    public function proveedor()   
    {
        return $this->belongsTo('App\Proveedor');
    }

    public function articulos_venta()
    {
        return $this->hasMany('App\ArticuloVenta');
    }
   
}

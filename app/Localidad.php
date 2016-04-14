<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table =  "localidades";

    protected $fillable = ['nombre', 'provincia_id', 'cod_postal'];

    public function provincia() 
    {
    	return $this->belongsTo('App\Provincia');
    }

    public function empresas() 
    {
    	return $this->hasMany('App\Empresa');
    }

    public function productos() 
    {
    	return $this->hasMany('App\Producto');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gnsolucion extends Model
{
	protected $table =  "gnsoluciones";

    protected $fillable = ['nombre', 'localidad_id','direccion', 'email', 'telefono', 'cuit'];
    
}

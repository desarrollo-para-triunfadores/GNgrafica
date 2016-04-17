<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
protected $table =  "configuraciones";

    protected $fillable = ['nombre', 'localidad_id','direccion', 'imagen', 'email', 'telefono', 'cuit',];
    
    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
}

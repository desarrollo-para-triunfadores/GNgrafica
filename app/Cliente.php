<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table =  "clientes";

    protected $fillable = ['nombre', 'apellido', 'empresa', 'cuit', 'dni', 'telefono', 'email', 'localidad_id', 'direccion'];

    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  	protected $table =  "proveedores";

    protected $fillable = ['nombre', 'cuit', 'localidad_id','imagen', 'web', 'calle', 'altura',
                            'rubro_id', 'telefono', 'celular', 'email', 'horario_atencion'];


    public function rubro() 
    {
        return $this->belongsTo('App\Rubro');
    }
    
    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }


    public function logo_proveedor()
    {
        return $this->hasOne('App\Proveedor');      //Atencion aca!** App/Logo_Proveedor
    }


    /***************** Metodos sacados de Empresa (LaAutentica) **************/
    public function scopeSearchNombres($query, $name)
    {
        if ($name == "-1")
        {
            return $query;
        } else {
            return $query->where('nombre', 'LIKE', $name);
        }

    }

    public function scopeSearchRubro($query, $idrubro)
    {
        if ($idrubro == "-1")
        {
            return $query;
        } else {
            return $query->where('rubro_id', 'LIKE', $idrubro);
        }
    }

    public function scopeSearchOrigen($query, $idOrigen)
    {
        if ($idOrigen == "-1")
        {
            return $query;
        } else {
            return $query->where('localidad_id', 'LIKE', $idOrigen);
        }
    }

    public function scopeSearchValidos($query)
    {
        return $query->where('id',  '>', 1);
    }

 /*************************************************************************/
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Articulo extends Model implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
    ];


	protected $table =  "articulos";

    protected $fillable = ['nombre', 'proveedor_id', 'tipo_id', 'material_id','color','alto','ancho','talle_id', 'stockMin', 'descripcion'];

    public function proveedor()   
    {
        return $this->belongsTo('App\Proveedor');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function material()
    {
        return $this->belongsTo('App\Material');
    }

    public function talle()
    {
        return $this->belongsTo('App\Talle');
    }

    public function articulos_venta()
    {
        return $this->hasMany('App\ArticuloVenta');
    }


/******************************************************************************************************/
    public function scopeSearchNombres($query, $nombre)
    {
        if ($nombre == "-1")
        {
            return $query;
        } else {
            return $query->where('nombre', 'LIKE', $nombre);
        }
    }

    public function scopeSearchEstado($query, $estado)
    {
        if ($estado == "-1")
        {
            return $query;
        } else {
            return $query->where('estado', 'LIKE', $estado);
        }
    }

    public function scopeSearchProveedor($query, $idproveedor)
    {
        if ($idproveedor == "-1")
        {
            return $query;
        } else {
            return $query->where('proveedor_id', 'LIKE', $idproveedor);
        }
    }

    public function scopeSearchActivos($query)
    {
        return $query->where('estado', 'LIKE', 1);
    }

    public function scopeSearchMaterial($query, $idmaterial)
    {
        if ($idmaterial == "-1")
        {
            return $query;
        } else {
            return $query->where('material_id', 'LIKE', $idmaterial);
        }
    }

    public function scopeSearchTalle($query, $idtalle)
    {
        if ($idtalle == "-1")
        {
            return $query;
        } else {
            return $query->where('talle_id', 'LIKE', $idtalle);
        }
    }
   
}

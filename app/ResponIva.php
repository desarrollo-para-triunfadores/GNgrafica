<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponIva extends Model
{
    protected $table = "responIva";

    protected $fillable = ['nombre','iva','factura','descripcion'];

    public function clientes()
    {
        return $this->hasMany('App\Cliente');
    }

    /***************************************************************/
    public function scopeSearchValidos($query)
    {
        return $query->where('id',  '>', 1);
    }
}

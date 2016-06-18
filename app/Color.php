<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "colores";

    protected $fillable = ['nombre'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }

    /*************************************************************/

    public function scopeSearchValidos($query)
    {
        return $query->where('id',  '>', 1);
    }
}

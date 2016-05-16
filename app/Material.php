<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table =  "materiales";

    protected $fillable = ['nombre','descripcion'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}

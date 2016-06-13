<?php namespace App\Http\ViewComposers;

use App\Material;
use App\ResponIva;
use App\Talle;
use App\Tipo;
use Illuminate\Contracts\View\View;
use App\Proveedor;
use App\Articulo;
use App\Color;

class ArticuloComposer {


    public function compose(View $view)
    {
        $proveedores = Proveedor::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $materiales = Material::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $talles = Talle::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $tipos = Tipo::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $colores = Color::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $responiva = ResponIva::orderBy('nombre','ASC')->searchValidos()->lists('nombre','id');
        $articuloslista = Articulo::orderBy('nombre','ASC')->searchActivos()->lists('nombre','nombre');
        $view->with('articuloslista', json_decode($articuloslista, true))
             ->with('proveedores',json_decode($proveedores, true))
             ->with('materiales',json_decode($materiales, true))
             ->with('talles',json_decode($talles, true))
             ->with('colores',json_decode($colores, true))
             ->with('responiva',json_decode($responiva, true))
             ->with('tipos',json_decode($tipos, true));

    }

}
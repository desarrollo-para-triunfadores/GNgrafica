<?php namespace App\Http\ViewComposers;

use App\Material;
use App\Talle;
use App\Tipo;
use Illuminate\Contracts\View\View;
use App\Proveedor;
use App\Color;


class ArticuloComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $proveedores = Proveedor::orderBy('nombre','ASC')->lists('nombre','id');
        $materiales = Material::orderBy('nombre','ASC')->lists('nombre','id');
        $talles = Talle::orderBy('nombre','ASC')->lists('nombre','id');
        $tipos = Tipo::orderBy('nombre','ASC')->lists('nombre','id');
        $colores = Color::orderBy('nombre','ASC')->lists('nombre','id');
        $view->with('proveedores',json_decode($proveedores, true))
             ->with('materiales',json_decode($materiales, true))
             ->with('talles',json_decode($talles, true))
             ->with('tipos',json_decode($tipos, true))
             ->with('colores',json_decode($colores, true));
    }

}

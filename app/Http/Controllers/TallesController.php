<?php

namespace App\Http\Controllers;

use App\Talle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TalleRequestCreate;
use App\Http\Requests\TalleRequestEdit;

class TallesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Espa�ol el manejador de fechas de Laravel
    }

    public function find (Route $route)
    {
        $this->talle = Talle::find($route->getParameter('talle'));  // tipo_producto es el atributo que figura junto al nombre de la ruta en el archivo de rutas.
    }

    public function index()
    {
        $talles = Talle::all();
        return view('admin.parametros.talles.tabla')->with('talles',$talles);
    }

    public function create()
    {
        return view('admin.parametros.talles.create');
    }

    public function store(Request $request)
    {
        $talle = new Talle($request->all());
        $talle->save();
        Flash::success('El talle "'. $talle->talle.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.talles.index');
    }


    public function show($id)
    {
        $talle= Talle::find($id);
        return view('admin.parametros.talles.show')->with('talle',$talle);
    }

    public function update(Request $request, $id)
    {      
        $talle = Talle::find($id);
        $talle->fill($request->all());
        $talle->save();
        Flash::success("Se ha realizado la actualización del registro: ".$talle->nombre.".");
        return redirect()->route('admin.talles.show', $id);
    }

    public function destroy($id)
    {
        $talle = Talle::find($id);
        $talle->delete();
        Flash::error("Se ha eliminado el talle: ".$talle->nombre.".");
        return redirect()->route('admin.talles.index');
    }
}

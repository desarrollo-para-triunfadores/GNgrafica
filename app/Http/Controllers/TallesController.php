<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TallesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    public function find (Route $route)
    {
        $this->tipo = Tipo::find($route->getParameter('tipo'));  // tipo_producto es el atributo que figura junto al nombre de la ruta en el archivo de rutas.
    }

    public function index()
    {
        $talles = Talle::all();
        return view('admin.tipo.tablaTalle')->with('talles',$talles);
    }

    public function create()
    {

    }
}

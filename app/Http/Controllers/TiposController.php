<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TiposController extends Controller
{

    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Espa�ol el manejador de fechas de Laravel
    }

    public function find (Route $route)
    {
        $this->tipo = Tipo::find($route->getParameter('tipo'));  // tipo_producto es el atributo que figura junto al nombre de la ruta en el archivo de rutas.
    }

    public function index()
    {
        $tipos = Tipo::all();
        return view('admin.parametros.tiposArticulos.tabla')->with('tipos',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

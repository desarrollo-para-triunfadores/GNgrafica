<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Localidad;
use App\Provincia;
use Laracasts\Flash\Flash;
use App\Http\Requests\LocalidadRequestCreate;
use App\Http\Requests\LocalidadRequestEdit;
use Illuminate\Routing\Route;

class LocalidadesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->localidad = Localidad::find($route->getParameter('localidades'));  // localidades es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidades = Localidad::all();
        $provincias = Provincia::all()->lists('nombre','id');
        return view('admin.localidades.tabla')->with('localidades',$localidades)->with('provincias', $provincias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.localidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocalidadRequestCreate $request)
    {
        $localidad = new Localidad($request->all());
        $localidad->save();
        Flash::success('La localidad "'. $localidad->nombre.'" ha sido registrada de forma existosa.');
        return redirect()->route('admin.localidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provincias = Provincia::all()->lists('nombre','id');     
        return view('admin.localidades.show')
            ->with('localidad', $this->localidad)
            ->with('provincias', $provincias);       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocalidadRequestEdit $request, $id)
    {
        $this->localidad->fill($request->all());
        $this->localidad->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->localidad->nombre.".");
        return redirect()->route('admin.localidades.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->localidad->delete();
        Flash::error("Se ha realizado la eliminación del registro: ".$this->localidad->nombre.".");
        return redirect()->route('admin.localidades.index');
    }
}

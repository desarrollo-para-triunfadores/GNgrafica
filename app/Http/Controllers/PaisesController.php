<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pais;
use Laracasts\Flash\Flash;
use App\Http\Requests\PaisRequestCreate;
use App\Http\Requests\PaisRequestEdit;
use Illuminate\Routing\Route;

class PaisesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
        $this->beforeFilter('@find',['only'=>['edit', 'show', 'update','destroy']]); // Acá hacemos llamado a la función find para optimizar código y no repetir instrucciones en todos esos métodos.
    }

    public function find (Route $route)
    {
        $this->pais = Pais::find($route->getParameter('paises'));  // paises es el atributo que figura junto al nombre de la ruta en el archivo de rutas.    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        return view('admin.paises.tabla')->with('paises',$paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaisRequestCreate $request)
    {
        $pais = new Pais($request->all());
        $pais->save();
        Flash::success('El país "'. $pais->nombre.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.paises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
        return view('admin.paises.show')->with('pais',$this->pais);
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
    public function update(PaisRequestEdit $request, $id)
    {       
        $this->pais->fill($request->all());
        $this->pais->save();
        Flash::success("Se ha realizado la actualización del registro: ".$this->pais->nombre.".");
        return redirect()->route('admin.paises.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $this->pais->delete();        
        Flash::error("Se ha realizado la eliminación del registro: ".$this->pais->nombre.".");
        return redirect()->route('admin.paises.index');
    }
}


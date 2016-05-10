<?php

namespace App\Http\Controllers;

use App\Material;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequestCreate;
use App\Http\Requests\MaterialRequestEdit;

class MaterialesController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    public function index()
    {
        $materiales = Material::all();
        return view('admin.parametros.materiales.tabla')->with('materiales',$materiales);
    }

    public function parametrosPrincipal()       // hice que que el Slidebar apunte aca y que este te lleve a la pantalla de PARAMETROS
    {

    }

    public function create()
    {
        return view('admin.parametros.materiales.create');
    }

    public function store(MaterialRequestCreate $request)
    {
        $material = new Material($request->all());
        $material->save();
        Flash::success('El material "'. $material->nombre.'" ha sido registrado de forma existosa.');
        return redirect()->route('admin.materiales.index');
    }


    public function show($id)
    {
        $material = Material::find($id);
        return view('admin.materiales.show')->with('pais',$material);
    }


    public function edit($id)
    {
    }


    public function update(MaterialRequestEdit $request, $id)
    {
        $material = Material::find($id);
        $material->fill($request->all());
        $material->save();
        Flash::success("Se ha realizado la actualización del registro: ".$material->nombre.".");
        return redirect()->route('admin.parametros.materiales.show', $id);
    }


    public function destroy($id)
    {
        $material = Material::find($id);
        $material->delete();
        Flash::error("Se ha realizado la eliminación del registro: ".$material->nombre.".");
        return redirect()->route('admin.parametros.materiales.index');
    }
}

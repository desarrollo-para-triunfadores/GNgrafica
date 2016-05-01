<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class ProveedorRequestEdit extends Request
{
    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [            
            'nombre' => 'required|max:100|unique:proveedores,nombre,'.$this->route->getParameter('proveedores'),
            'celular' => 'max:30',
            'telefono' => 'max:30',
            'calle' => 'required|max:50',
            'altura' => 'required|max:5',
            'localidad_id' => 'required',
            'rubro_id' => 'required',
            'email' => 'email|max:100',
            'web'  => 'active_url|max:100',
            'imagen' => 'image|mimes:jpeg,png|max:3072',
            'horario_atencion' => 'max:30',
        ];      
    }
}

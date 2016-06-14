<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticuloRequestEdit extends Request
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
            'proveedor_id' => 'required|max:50',
            'tipo_id' => 'required',
            'talle_id'=> 'max:11',
            'material_id'=> 'max:8',
            'tamaño',
            'ancho',
            'alto',
            'stock',
            'stockMin',
            'descripcion'
        ];
    }
}

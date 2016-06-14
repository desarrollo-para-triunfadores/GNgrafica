<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticuloRequestCreate extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nombre' => 'required|max:50',
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

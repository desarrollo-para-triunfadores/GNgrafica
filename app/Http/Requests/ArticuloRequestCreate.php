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
            'proveedor_id' => 'required',
            'tipo_id' => 'required',
            'talle_id'=> 'required',
            'material_id'=> 'required'

        ];
    }
}

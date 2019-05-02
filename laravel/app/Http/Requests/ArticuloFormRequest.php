<?php

namespace Uawa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:100',
            'deCategoria'=>'required|numeric',
            'codigo'=>'required|max:50',
            'descripcion'=>'nullable|max:512',
            'coste'=>'required|numeric',
            'pvp'=>'required|numeric',

            
        ];

        $data = $request->validate([
		    'nombreVariacion'=>'required|string|max:100',
            'stockVariacion'=>'required|numeric',
            'imagenesVariacion'=>'mimes:jpeg,jpg,png',

            //VALIDAR VARIACIONES
            'nombreVariacion.*'=>'nullable|string|max:100',
            'stockVariacion.*'=>'nullable|numeric',
            'imagenesVariacion.*'=>'nullable|mimes:jpeg,jpg,png'
		]);

    }
}

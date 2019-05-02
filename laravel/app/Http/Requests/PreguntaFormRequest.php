<?php

namespace Uawa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreguntaFormRequest extends FormRequest
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
            'pregunta'=>'required|max:100',
            'respuesta'=>'required|max:1200',
        ];
    }
}

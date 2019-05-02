<?php

namespace Uawa\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagarFormRequest extends FormRequest
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
            'formaPago'=>'required|string|exists:metodos_pago,slug',
            'numero'=>'nullable',
            'pagado'=>'nullable',
            'verificado'=>'nullable',
        ];

        $data = $request->validate([
            'formaPago'=>'required|string|exists:metodos_pago,slug',
            'numero'=>'nullable',
            'pagado'=>'nullable',
            'verificado'=>'nullable',
		]);

    }
}

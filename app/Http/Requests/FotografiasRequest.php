<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotografiasRequest extends FormRequest
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
            'nombre' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'valor' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'EEl nombre es requerido',
            'imagen.required' => 'La imagen es requerida',
            'descripcion.required' => 'La descripcion es requerida',
            'valor.required' => 'El valor es requerido',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255',
            'cedula' => 'required|numeric',
            'direccion' => 'required|max:255',
            'celular' => 'required|numeric',
            'email' => 'required|email',
            'experiencia' => 'required|numeric',
            'fecha_contratacion' => 'required|date',
            
        ];
    }
}

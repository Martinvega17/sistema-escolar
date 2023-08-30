<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarFormRequest extends FormRequest
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
            'producto'=>'required|max:255',
            'precio'=>'required',
            'codigo'=>'required|max:255',
            'cantidad'=>'required|max:255',
            'vendido' =>'required',
        ];
    }
}

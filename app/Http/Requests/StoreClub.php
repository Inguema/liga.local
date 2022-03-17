<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClub extends FormRequest
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
            'nombre' => 'required|max:20'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre del club',
        ];
    }

    public function messages()
    {
        return [
            // Personalizar mensaje de un atributo
        ];
    }
}

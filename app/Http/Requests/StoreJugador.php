<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugador extends FormRequest
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
            'nombre' => 'required|max:20',
            'apellidos' => 'required|max: 30',
            'posicion' => 'required|max:20'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre del jugador',
            'apellidos' => 'apellidos del jugador',

        ];
    }

    public function messages()
    {
        return [
            'posicion.required' => 'Debe incluir la posición del jugador dentro del equipo',
        ];
    }
}

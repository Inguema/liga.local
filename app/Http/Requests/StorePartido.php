<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartido extends FormRequest
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
            'equipo_local_id' => 'required|max:20',
            'equipo_visitante_id' => 'required|max: 30',
            'marcador_local' => 'required|max:10',
            'marcador_visitante' => 'required|max:10'
        ];
    }

    public function attributes()
    {
        return [
            'equipo_local_id' => 'nombre equipo local',
            'equipo_visitante_id' => 'nombre equipo visitante',
            'marcador_local' => 'marcador',
            'marcador_visitante' => 'marcador'
        ];
    }

    public function messages()
    {
        return [
            'marcador_local.required' => 'Debe incorporar el número de goles del equipo local.',
            'marcador_visitante.required' => 'Debe incorporar el número de goles del equipo visitante.'
        ];
    }
}

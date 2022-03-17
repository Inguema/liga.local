<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipo;

class JugadorFactory extends Factory
{
    public function definition()
    {
        $posiciones = [
            'portero',
            'defensa',
            'centrocampista',
            'delantero',
        ];

        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->name(),
            'posicion' => $posiciones[rand(0, 3)],
            'equipo_id' => Equipo::all()->random()->id,
        ];
    }
}

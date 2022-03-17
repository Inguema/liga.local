<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipo;

class PartidoFactory extends Factory
{
    public function definition()
    {
        return [
            'equipo_local_id'       => Equipo::all()->random()->id,
            'equipo_visitante_id'   => Equipo::all()->random()->id,
            'marcador_local'        => $this->faker->numberBetween(0, 10),
            'marcador_visitante'    => $this->faker->numberBetween(0, 10),
        ];
    }
}

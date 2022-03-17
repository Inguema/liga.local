<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Club;

class EquipoFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'club_id' => Club::all()->random()->id,
        ];
    }
}

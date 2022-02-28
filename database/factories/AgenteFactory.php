<?php

namespace Database\Factories;
use App\Models\Agente;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'correo' => $this->faker->unique()->safeEmail(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimentos>
 */
class AlimentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->text(20),
            'tipo'=>$this->faker->text(10),
            'fecha_caducidad'=>$this->faker->date
        ];
    }
}

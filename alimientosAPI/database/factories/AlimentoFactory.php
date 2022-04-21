<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimento>
 */
class AlimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->text(8),
            'descripcion'=>$this->faker->text(20),
            'tipo'=>$this->faker->text(10),
            'fecha_vencimiento'=>$this->faker->date()
        ];
    }
}

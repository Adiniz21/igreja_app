<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Operador;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operador>
 */
class OperadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Operador::class;
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'tipo' => $this->faker->randomElement(['venda', 'gestor', 'administrador']),
            'email' => $this->faker->unique()->safeEmail(),
            'telefone' => $this->faker->phoneNumber(),
        ];
    }
}

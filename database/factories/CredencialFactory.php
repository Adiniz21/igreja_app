<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Credencial;
use App\Models\Operador;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credencial>
 */
class CredencialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Credencial::class;

    public function definition()
    {
        return [
            'operador_id' => Operador::factory(),
            'username' => $this->faker->unique()->userName(),
            'senha' => bcrypt('password'), // ou Hash::make('password')
        ];
    }
}

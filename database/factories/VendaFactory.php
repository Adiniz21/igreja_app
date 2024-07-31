<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venda;
use App\Models\Operador;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venda>
 */
class VendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Venda::class;

    public function definition()
    {
        return [
            'operador_id' => Operador::factory(),
            'data' => $this->faker->dateTime(),
        ];
    }
}

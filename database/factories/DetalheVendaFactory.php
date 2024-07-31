<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DetalheVenda;
use App\Models\Venda;
use App\Models\Produto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalheVenda>
 */
class DetalheVendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = DetalheVenda::class;

    public function definition()
    {
        return [
            'venda_id' => Venda::factory(),
            'produto_id' => Produto::factory(),
            'quantidade' => $this->faker->numberBetween(1, 10),
            'valor' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}

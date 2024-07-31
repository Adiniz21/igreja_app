<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Produto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'imagem' => $this->faker->imageUrl(),
            'detalhamento' => $this->faker->paragraph(),
            'valor' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}

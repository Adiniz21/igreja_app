<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operador;
use App\Models\Credencial;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\DetalheVenda;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Criar 10 operadores e suas credenciais
        Operador::factory(10)->create()->each(function ($operador) {
            Credencial::factory()->create(['operador_id' => $operador->id]);
        });

        // Criar 20 produtos
        Produto::factory(20)->create();

        // Criar 30 vendas com detalhes de vendas
        Venda::factory(30)->create()->each(function ($venda) {
            DetalheVenda::factory(3)->create(['venda_id' => $venda->id]);
        });
    }
}

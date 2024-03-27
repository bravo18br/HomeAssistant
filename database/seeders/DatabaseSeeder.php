<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Situation;
use App\Models\Periodicidade;
use App\Models\Categoria;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $situations = ['Aberta', 'Fechada', 'Atrasada', 'Outros'];

        foreach ($situations as $item) {
            Situation::create([
                'nome' => $item
            ]);
        }

        $periodicidades = ['Única', 'Diária', 'Semanal', 'Mensal', 'Anual'];

        foreach ($periodicidades as $item) {
            Periodicidade::create([
                'nome' => $item
            ]);
        }

        $categorias = ['Lanche', 'Almoço', 'Mercado', 'Sapatos', 'Roupas', 'Combustível', 'Carro', 'Shopping', 'Farmácia', 'Academia','Moradia','Gatos'];

        foreach ($categorias as $item) {
            Categoria::create([
                'nome' => $item
            ]);
        }
    }
}

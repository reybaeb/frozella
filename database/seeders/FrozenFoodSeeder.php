<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FrozenFood;

class FrozenFoodSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Chicken Nugget',
                'description' => 'Nugget ayam beku siap goreng, renyah dan lezat.',
                'price' => 35000,
                'image' => null,
                'stock' => 50
            ],
            [
                'name' => 'Fish Stick',
                'description' => 'Stik ikan beku, cocok untuk camilan atau lauk.',
                'price' => 40000,
                'image' => null,
                'stock' => 30
            ],
            [
                'name' => 'Sosis Sapi',
                'description' => 'Sosis sapi beku, praktis untuk sarapan.',
                'price' => 32000,
                'image' => null,
                'stock' => 40
            ],
            [
                'name' => 'Bakso Ikan',
                'description' => 'Bakso ikan beku, gurih dan kenyal.',
                'price' => 28000,
                'image' => null,
                'stock' => 25
            ],
            [
                'name' => 'Dimsum Ayam',
                'description' => 'Dimsum ayam beku, cocok untuk cemilan keluarga.',
                'price' => 45000,
                'image' => null,
                'stock' => 20
            ],
        ];

        foreach ($products as $product) {
            FrozenFood::create($product);
        }
    }
} 
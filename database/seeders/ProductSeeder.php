<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('products')->truncate();
        // Data dummy produk frozen food (jika ingin tetap ada data dummy)
        $products = [
            [
                'nama' => 'Chicken Nugget',
                'deskripsi' => 'Nugget ayam beku siap goreng, renyah dan lezat.',
                'harga' => 35000,
                'stok' => 50,
                'gambar' => null,
                'kategori' => 'Ayam',
                'slug' => 'chicken-nugget'
            ],
            [
                'nama' => 'Fish Stick',
                'deskripsi' => 'Stik ikan beku, cocok untuk camilan atau lauk.',
                'harga' => 40000,
                'stok' => 30,
                'gambar' => null,
                'kategori' => 'Ikan',
                'slug' => 'fish-stick'
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
} 
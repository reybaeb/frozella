<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ProductSeeder::class
        ]);

        // Seeder user default
        User::create([
            'name' => 'wisnu',
            'email' => 'wisnuhan14@gmail.com',
            'password' => bcrypt('password'), // Ganti password sesuai keinginan
        ]);

        $this->call(FrozenFoodSeeder::class);

        // Tambahkan akun admin default
        User::updateOrCreate([
            'email' => 'admin@frozella.com'
        ], [
            'name' => 'Admin Frozella',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // appeler les seeders dans l'ordre pour éviter les erreurs de clés étrangères
        $this->call([
            CategorySeeder::class,
            MediaSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        // call all seeders {BestellingSeeder, BestellingsregelSeeder, ContactperSeeder, KlantSeeder, LeverancierSeeder, ProductSeeder, VerkoopregelSeeder, VerkoopSeeder} in the right order so no foreighn errors occur
        $this->call([
            ContactperSeeder::class,
            LeverancierSeeder::class,
            BestellingSeeder::class,
            ProductSeeder::class,
            BestellingsregelSeeder::class,
            KlantSeeder::class,
            VerkoopSeeder::class,
            VerkoopregelSeeder::class,
        ]);
    }
}

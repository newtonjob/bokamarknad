<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

         User::factory()->admin()->withPersonalTeam()->create([
             'name'  => 'Admin User',
             'email' => 'admin@example.com',
         ]);

         User::factory()->withPersonalTeam()->create([
             'name'  => 'Customer User',
             'email' => 'customer@example.com',
         ]);
    }
}

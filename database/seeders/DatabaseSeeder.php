<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $tiers = ['SS', 'S', 'A', 'B', 'C'];

    foreach ($tiers as $tier) {
        Tier::create([
            'name' => $tier,
        ]);
    }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
    }
}

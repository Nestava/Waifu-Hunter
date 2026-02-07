<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tier;
use App\Models\Type;
use App\Models\Origin;
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
        $tiers = [
            ['name' => 'SS', 'slug' => 'ss'],
            ['name' => 'S', 'slug' => 's'],
            ['name' => 'A', 'slug' => 'a'],
            ['name' => 'B', 'slug' => 'b'],
            ['name' => 'C', 'slug' => 'c'],
        ];

        $types = [
            ['name' => 'Kuudere', 'slug' => 'kuudere'],
            ['name' => 'Yandere', 'slug' => 'yandere'],
            ['name' => 'Tsundere', 'slug' => 'tsundere'],
            ['name' => 'Dandere', 'slug' => 'dandere'],
            ['name' => 'Deredere', 'slug' => 'deredere'],
            ['name' => 'Himedere', 'slug' => 'himedere'],
            ['name' => 'Kamidere', 'slug' => 'kamidere'],
            ['name' => 'Mayadere', 'slug' => 'mayadere'],
            ['name' => 'Undere', 'slug' => 'undere'],
            ['name' => 'Goudere', 'slug' => 'goudere'],
            ['name' => 'Coodere', 'slug' => 'Coodere'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }

        foreach ($tiers as $tier) {
            Tier::create($tier);
        }

        Origin::create([
            'name' => 'Uma Musume',
            'slug' => 'uma-musume',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);


    }
}

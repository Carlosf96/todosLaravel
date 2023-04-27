<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Todo::create([
            'title' => 'Clean room',
            'description' => 'Sweep and mop room',
            'priority' => 'high'
        ]);

        Todo::create([
            'title' => 'Clean living room',
            'description' => 'Sweep and mop living room',
            'priority' => 'mediuem'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

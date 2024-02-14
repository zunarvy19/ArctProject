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
        // \App\Models\User::factory(3)->create();

        \App\Models\User::factory()->create([
            'name' => 'Zunnatul Arvy',
            'email' => 'arvy977@gmail.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'superadmin',
            'email' => 'superadmin@example.org',
            'password' => bcrypt('password')
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Dappa',
            'email' => 'dappa@example.com',
            'password' => Hash::make('dappa123'),
            'jabatan' => 'walaaee',
            'role' => 'Super Admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Amay',
            'email' => 'amay123@example.com',
            'password' => Hash::make('amay123'),
            'jabatan' => 'walaaee',
            'role' => 'User',
        ]);
    }
}

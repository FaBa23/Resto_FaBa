<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan Anda mengimpor Model User
use Illuminate\Support\Facades\Hash; // Untuk meng-hash password

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin (Role: admin)
        User::create([
            'name' => 'Admin Resto',
            'email' => 'admin@resto.com',
            'password' => Hash::make('pass12345'), // Ganti 'password' dengan password yang kuat
            'role' => 'admin', // ROLE KRUSIAL
        ]);

        // 2. Akun User Biasa (Role: user)
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@resto.com',
            'password' => Hash::make('password'),
            'role' => 'user', // ROLE KRUSIAL
        ]);

        // Opsional: Buat beberapa user lagi
        // User::factory(10)->create();
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Menu::insert([
            ['name' => 'Nasi Goreng', 'category' => 'makanan', 'subcategory' => 'utama', 'price' => 20000, 'description' => 'Nasi goreng spesial', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mie Ayam', 'category' => 'makanan', 'subcategory' => 'pembuka', 'price' => 18000, 'description' => 'Mie ayam sebagai pembuka', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Es Teh', 'category' => 'minuman', 'subcategory' => null, 'price' => 6000, 'description' => 'Es teh segar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jus Jeruk', 'category' => 'minuman', 'subcategory' => null, 'price' => 12000, 'description' => 'Jus jeruk alami', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
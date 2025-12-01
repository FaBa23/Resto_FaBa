<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu; // Pastikan menggunakan Model yang benar

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Data menu Anda yang sudah diformat
        $menus = [
            // --- RESTO'S TOP PICKS ---
            ['category' => "Resto's Top Picks", 'name' => "Telur Mayo", 'description' => null, 'price' => 11000, 'is_top_pick' => true],
            ['category' => "Resto's Top Picks", 'name' => "Sate Taichan Bakar Kulit", 'description' => null, 'price' => 23000, 'is_top_pick' => true],
            ['category' => "Resto's Top Picks", 'name' => "Sate Taichan Bakar Dada", 'description' => null, 'price' => 24000, 'is_top_pick' => true],
            ['category' => "Resto's Top Picks", 'name' => "Telur Keju Spesial", 'description' => null, 'price' => 13000, 'is_top_pick' => true],
            ['category' => "Resto's Top Picks", 'name' => "Duren Pisang Keju", 'description' => null, 'price' => 15000, 'is_top_pick' => true],

            // --- SURABI DUREN ---
            ['category' => 'Surabi Duren', 'name' => 'Duren Polos/Biasa', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Coklat', 'description' => '+Coklat Didalamnya', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Strowberry', 'description' => 'Strowbeerry Didalam Toping Durian', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Pisang', 'description' => 'Pisang Di Dalam Toping Durian', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Coklat Keju', 'description' => '+ Coklat', 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Strowberry Keju', 'description' => '+ Strowberry Dan Keju', 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Nangka', 'description' => '+ Nangka', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Duren', 'name' => 'Duren Nangka + Keju', 'description' => '+ Nangka Keju', 'price' => 15000, 'is_top_pick' => false],

            // --- SURABI KINCA ---
            ['category' => 'Surabi Kinca', 'name' => 'Surabi Kinca Gula Merah', 'description' => null, 'price' => 8000, 'is_top_pick' => false],

            // --- SURABI KEJU ---
            ['category' => 'Surabi Keju', 'name' => 'Keju Susu', 'description' => '+Keju Susu', 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Keju', 'name' => 'Keju Vanilla', 'description' => 'Keju Dan Vanila', 'price' => 13000, 'is_top_pick' => false],

            // --- SURABI COKLAT ---
            ['category' => 'Surabi Coklat', 'name' => 'Coklat Susu', 'description' => '+ Coklat Susu', 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Surabi Coklat', 'name' => 'Coklat Vanilla', 'description' => '+ Coklat Vanilla', 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Coklat', 'name' => 'Coklat Keju', 'description' => '+ Coklat Keju', 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Coklat', 'name' => 'Coklat Keju Special', 'description' => '+ Coklat, Vanilla Dan Keju', 'price' => 13000, 'is_top_pick' => false],

            // --- SURABI TELUR ---
            ['category' => 'Surabi Telur', 'name' => 'Telur Biasa', 'description' => 'Hanya Surabi Telur Dan Saus', 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Surabi Telur', 'name' => 'Telur Mayo', 'description' => 'Telur + Toping Mayonaise', 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Telur', 'name' => 'Telur Sosis Spesial', 'description' => 'Surabi Telur + Sosis Toping Mayonaise', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Telur', 'name' => 'Telur Keju Spesial', 'description' => 'Surabi Telur + Keju Mayonaise', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Telur', 'name' => 'Telur Sosis Keju Spesial', 'description' => 'Surabi Telur Pakai Sosis Dan Mayonaise', 'price' => 15000, 'is_top_pick' => false],

            // --- SURABI AYAM ---
            ['category' => 'Surabi Ayam', 'name' => 'Ayam Biasa', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Surabi Ayam', 'name' => 'Ayam Mayo', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Surabi Ayam', 'name' => 'Ayam Sosis Spesial', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Surabi Ayam', 'name' => 'Ayam Keju Spesial', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Ayam', 'name' => 'Ayam Sosis Keju Spesial', 'description' => null, 'price' => 15000, 'is_top_pick' => false],

            // --- SURABI SOSIS ---
            ['category' => 'Surabi Sosis', 'name' => 'Sosis Biasa', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Surabi Sosis', 'name' => 'Sosis Mayo', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Surabi Sosis', 'name' => 'Sosis Keju Spesial', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Surabi Sosis', 'name' => 'Sosis Telur Keju Spesial', 'description' => null, 'price' => 15000, 'is_top_pick' => false],

            // --- SOP DUREN ---
            ['category' => 'Sop Duren', 'name' => 'Sop Duren Keju', 'description' => 'Sop Duren Parutan Keju', 'price' => 16000, 'is_top_pick' => false],
            ['category' => 'Sop Duren', 'name' => 'Sop Duren Roti', 'description' => 'Sop Duren Dan Roti Saja', 'price' => 16000, 'is_top_pick' => false],
            ['category' => 'Sop Duren', 'name' => 'Sop Duren Roti Keju', 'description' => 'Sop Duren + Roti', 'price' => 18000, 'is_top_pick' => false],

            // --- INDOMIE ---
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Biasa', 'description' => 'Indomie Goreng / Rebus Tanpa Telur', 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Telur', 'description' => 'Indomie Telur', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Kornet', 'description' => '+Kornet', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Keju', 'description' => '+Keju', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Telur Kornet', 'description' => 'Pakai Telur Dan Kornet', 'price' => 18000, 'is_top_pick' => false],
            ['category' => 'Indomie', 'name' => 'Indomie Goreng/Rebus Telur Keju', 'description' => '+Telur Dan Kornet', 'price' => 18000, 'is_top_pick' => false],

            // --- MENU SPESIAL SOSIS /KENTANG GORENG ---
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Sosis Biasa', 'description' => 'Sosis + Saus', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Sosis Mayo', 'description' => 'Sosis + Mayonaise', 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Sosis Keju Spc', 'description' => '+Irisan Keju Mayonaise', 'price' => 18000, 'is_top_pick' => false],
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Kentang Biasa', 'description' => 'Kentang Dan Saus', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Kentang Mayo', 'description' => 'Kentang Mayonaise', 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Menu Spesial Sosis /Kentang Goreng', 'name' => 'Kentang Keju Spc', 'description' => 'Keju + Mayonaise', 'price' => 18000, 'is_top_pick' => false],

            // --- ANEKA MINUMAN ---
            ['category' => 'Aneka Minuman', 'name' => 'Coffe Mix', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Teh Tarik', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Bandrek Susu', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Teh Manis', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Coklat Panas', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Coklat+Susu', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Kopi Item', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Kopi Susu', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Teh Tarik', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Teh Manis', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Ea Teh Tawar', 'description' => null, 'price' => 5000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Batu', 'description' => null, 'price' => 4000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Teh Tawar', 'description' => null, 'price' => 4000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Orange', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Melon', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Jambu', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Strowberry', 'description' => '+ Strowberry', 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Mangga', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Alpukat', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Juice Naga Merah', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Jeruk Panas', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Lemon Tea', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Nutrisari Hot', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Cappucino', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Milo/Ovaltine', 'description' => null, 'price' => 9000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Latte Cream Hot', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Nescafe Cream', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Mocaccino Cream', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Teh Susu', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Teh Botol', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Fruite Tea/Tebs', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Air Mineral 600ml', 'description' => null, 'price' => 8000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Jeruk', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Lemon Tea', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Nutrisari', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Cappucino', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Milo/Ovaltine', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Teh Susu', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Aneka Minuman', 'name' => 'Es Mocaccino', 'description' => null, 'price' => 13000, 'is_top_pick' => false],

            // --- SATE TAICHAN ---
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Bakar Kulit', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 23000, 'is_top_pick' => false],
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Bakar Dada', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 24000, 'is_top_pick' => false],
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Bakar Paha', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 24000, 'is_top_pick' => false],
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Goreng Dada', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 24000, 'is_top_pick' => false],
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Goreng Kulit', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 24000, 'is_top_pick' => false],
            ['category' => 'Sate Taichan', 'name' => 'Sate Taichan Goreng Paha', 'description' => 'Sate 10 Tusuk + Sambal + Jeruk Nipis', 'price' => 24000, 'is_top_pick' => false],

            // --- PISANG BAKAR ---
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Coklat', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Coklat Spesial', 'description' => null, 'price' => 11000, 'is_top_pick' => false],
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Keju Spesial', 'description' => null, 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Coklat Keju', 'description' => null, 'price' => 15000, 'is_top_pick' => false],
            ['category' => 'Pisang Bakar', 'name' => 'Pisbak Coklat Keju Spesial', 'description' => null, 'price' => 15000, 'is_top_pick' => false],

            // --- ROTI BAKAR MANIS ---
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Coklat', 'description' => null, 'price' => 10000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Coklat Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Pisang Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Kacang Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Strawberry Keju', 'description' => null, 'price' => 13000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Pisang Coklat Keju', 'description' => null, 'price' => 16000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Kacang Coklat Keju', 'description' => null, 'price' => 16000, 'is_top_pick' => false],
            ['category' => 'Roti Bakar Manis', 'name' => 'Roti Bakar Strawberry Coklat Keju', 'description' => null, 'price' => 16000, 'is_top_pick' => false],
        ];

        // Masukkan data ke database
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Jangan lupa import Model Anda

class MenuController extends Controller
{
    /**
     * Menampilkan semua item menu, dikelompokkan berdasarkan kategori.
     */
    public function fullMenu()
    {
        // 1. Ambil semua data menu, diurutkan agar kategori top picks tampil pertama
        $allMenus = Menu::orderByDesc('is_top_pick')
            ->orderBy('category')
            ->get();

        // 2. Kelompokkan data berdasarkan kolom 'category'
        $groupedMenus = $allMenus->groupBy('category');

        // 3. Kirim data yang sudah dikelompokkan ke view
        return view('menu', [
            'groupedMenus' => $groupedMenus
        ]);
    }
}
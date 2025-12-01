<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // Daftar kategori yang digunakan di form create/edit
    protected $kategoriList = ['Durian', 'Manis', 'Gurih', 'Lauk', 'Minuman Panas', 'Minuman Dingin', 'Juice', 'Sate Taichan', 'Indomie', 'Pisang Bakar', 'Roti Bakar', 'Sosis & Kentang'];

    // READ (Tampilkan daftar menu di Admin Panel)
    public function index()
    {
        $menus = Menu::orderBy('kategori')->paginate(10);
        return view('admin.menus.index', compact('menus'));
    }

    // CREATE (Tampilkan form tambah menu)
    public function create()
    {
        return view('admin.menus.create', ['kategori' => $this->kategoriList]);
    }

    // CREATE (Simpan data menu baru)
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/menu_images');
            $data['gambar'] = Storage::url($path); // Simpan path publik
        }

        Menu::create($data);

        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil ditambahkan!');
    }

    // UPDATE (Tampilkan form edit)
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', ['menu' => $menu, 'kategori' => $this->kategoriList]);
    }

    // UPDATE (Simpan perubahan data menu)
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($menu->gambar) {
                $old_path = str_replace('/storage', 'public', $menu->gambar);
                Storage::delete($old_path);
            }
            // Simpan gambar baru
            $path = $request->file('gambar')->store('public/menu_images');
            $data['gambar'] = Storage::url($path);
        }

        $menu->update($data);

        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil diperbarui!');
    }

    // DELETE (Hapus data menu)
    public function destroy(Menu $menu)
    {
        if ($menu->gambar) {
            $old_path = str_replace('/storage', 'public', $menu->gambar);
            Storage::delete($old_path);
        }

        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil dihapus!');
    }
}
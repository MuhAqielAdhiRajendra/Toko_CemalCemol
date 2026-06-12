<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    // ==========================================
    // 1. SIMPAN MENU BARU (Logic Lama Kamu)
    // ==========================================
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name'        => 'required|string',
            'price'       => 'required|numeric',
            'image'       => 'required|image|max:2048', // Maksimal 2MB
            'description' => 'nullable|string',
            'badge'       => 'nullable|string',
        ]);

        // Ambil data input
        $data = $request->only(['name', 'description', 'price', 'badge']);

        // 2. Upload Gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Simpan ke folder 'menus' di dalam disk 'public'
            $image->storeAs('menus', $image->hashName(), 'public');
            $data['image'] = $image->hashName();
        }

        // 3. Simpan ke Database
        Menu::create($data);

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan! 🍔');
    }

    // ==========================================
    // 2. UPDATE MENU (FITUR BARU)
    // ==========================================
    public function update(Request $request, $id)
    {
        // 1. Validasi (Image jadi nullable/boleh kosong karena user mungkin gak ganti gambar)
        $request->validate([
            'name'        => 'required|string',
            'price'       => 'required|numeric',
            'image'       => 'nullable|image|max:2048', 
            'description' => 'nullable|string',
            'badge'       => 'nullable|string',
        ]);

        // 2. Cari Menu
        $menu = Menu::findOrFail($id);
        
        // Ambil input text aja dulu
        $data = $request->only(['name', 'description', 'price', 'badge']);

        // 3. Cek apakah user upload gambar baru?
        if ($request->hasFile('image')) {
            
            // Hapus gambar lama biar memori gak penuh
            // Kita pakai disk('public') biar jalurnya pas sama waktu upload
            if ($menu->image) {
                Storage::disk('public')->delete('menus/' . $menu->image);
            }

            // Upload gambar baru
            $image = $request->file('image');
            $image->storeAs('menus', $image->hashName(), 'public');
            $data['image'] = $image->hashName();
        }

        // 4. Update Database
        $menu->update($data);

        return redirect()->back()->with('success', 'Menu berhasil diperbarui! ✨');
    }

    // ==========================================
    // 3. HAPUS MENU (Logic Lama Kamu + Rapih)
    // ==========================================
    public function destroy($id)
    {
        // 1. Cari datanya
        $menu = Menu::findOrFail($id);

        // 2. Hapus File Gambarnya
        // Menggunakan disk 'public' agar konsisten dengan saat upload
        if ($menu->image) {
            Storage::disk('public')->delete('menus/' . $menu->image);
        }

        // 3. Hapus data database
        $menu->delete();

        return redirect()->back()->with('success', 'Menu dan fotonya berhasil dihapus!');
    }
}
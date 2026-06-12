<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Menu; 
use App\Models\Preorder;
use App\Models\Order; // <--- [PENTING] Model Order WAJIB di-import di sini
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    // ==========================================
    // 1. FRONTEND (Untuk Pembeli)
    // ==========================================
    
    public function index(Request $request)
    {
        // Siapkan Query untuk KEDUA tabel
        $productQuery = Product::query();
        $menuQuery    = Menu::query();

        // Logika Pencarian
        if ($request->has('keyword') && $request->keyword != null) {
            $keyword = $request->keyword;

            // 1. Filter di Tabel Produk
            $productQuery->where(function($q) use ($keyword) {
                $q->where('name', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('description', 'LIKE', '%'.$keyword.'%');
            });

            // 2. Filter di Tabel Menu
            $menuQuery->where(function($q) use ($keyword) {
                $q->where('name', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('description', 'LIKE', '%'.$keyword.'%');
            });
        }

        // Eksekusi Query
        $products = $productQuery->with('preorder')->latest()->get();
        $menus    = $menuQuery->latest()->get();

        // Kirim ke View Homepage
        return view('index', compact('products', 'menus'));
    }

    // ==========================================
    // 2. ADMIN DASHBOARD (YANG TADI ERROR)
    // ==========================================
    
    public function adminIndex(Request $request)
{
    // 1. FILTER PESANAN (Cari berdasarkan Nama Pembeli atau ID)
    $orderQuery = Order::query();
    if ($request->has('search_order') && $request->search_order != null) {
        $orderQuery->where('customer_name', 'LIKE', '%' . $request->search_order . '%')
                   ->orWhere('id', 'LIKE', '%' . $request->search_order . '%');
    }
    // appends() berguna agar saat klik halaman 2, hasil pencarian tidak hilang
    $orders = $orderQuery->latest()->paginate(5)->appends(['search_order' => $request->search_order]);

    // 2. FILTER PRODUK (Cari Nama Produk)
    $productQuery = Product::with('preorder');
    if ($request->has('search_product') && $request->search_product != null) {
        $productQuery->where('name', 'LIKE', '%' . $request->search_product . '%');
    }
    $products = $productQuery->latest()->get();

    // 3. FILTER MENU (Cari Nama Menu)
    $menuQuery = Menu::query();
    if ($request->has('search_menu') && $request->search_menu != null) {
        $menuQuery->where('name', 'LIKE', '%' . $request->search_menu . '%');
    }
    $menus = $menuQuery->latest()->get();

    return view('products.dashboard', compact('products', 'menus', 'orders'));
}

    // ==========================================
    // 3. FITUR CRUD PRODUK (STORE, UPDATE, DELETE)
    // ==========================================

    // A. PROSES SIMPAN PRODUK BARU
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'name'          => 'required|min:3',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'stock'         => 'required|integer|min:0',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'badge'         => 'nullable|string',
            // Validasi tanggal PO
            'po_start'      => 'nullable|date',
            'po_end'        => 'nullable|date|after_or_equal:po_start',
            'delivery_date' => 'nullable|date|after:po_end',
        ]);

        // 2. Pisahkan Data Produk
        $productData = $request->only(['name', 'description', 'price', 'stock', 'badge']);
        $productData['slug'] = Str::slug($request->name);

        // 3. Upload Gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('products', $image->hashName(), 'public'); 
            $productData['image'] = $image->hashName();
        }

        // 4. Simpan ke Tabel Products
        $product = Product::create($productData);

        // 5. Simpan Data Preorder (Jika dicentang)
        if ($request->has('is_preorder') && $request->is_preorder == 1) {
            Preorder::create([
                'product_id'    => $product->id,
                'start_date'    => $request->po_start,
                'end_date'      => $request->po_end,
                'delivery_date' => $request->delivery_date,
            ]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil ditambahkan! 🚀');
    }

    // B. PROSES UPDATE PRODUK
    public function update(Request $request, Product $product)
    {
        // 1. Validasi
        $request->validate([
            'name'        => 'required|min:3',
            'description' => 'required',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer|min:0',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'badge'       => 'nullable|string',
        ]);

        // 2. Pisahkan Data Produk
        $productData = $request->only(['name', 'description', 'price', 'stock', 'badge']);
        $productData['slug'] = Str::slug($request->name);

        // 3. Cek Gambar Baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($product->image) {
                if (Storage::disk('public')->exists('products/' . $product->image)) {
                    Storage::disk('public')->delete('products/' . $product->image);
                }
            }
            // Upload baru
            $image = $request->file('image');
            $image->storeAs('products', $image->hashName(), 'public');
            $productData['image'] = $image->hashName();
        }

        // 4. Update Tabel Products
        $product->update($productData);

        // 5. Update Logika Preorder
        if ($request->has('is_preorder') && $request->is_preorder == 1) {
            $product->preorder()->updateOrCreate(
                ['product_id' => $product->id],
                [
                    'start_date'    => $request->po_start,
                    'end_date'      => $request->po_end,
                    'delivery_date' => $request->delivery_date,
                ]
            );
        } else {
            // Jika admin mematikan PO, hapus datanya
            $product->preorder()->delete();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil diperbarui! ✨');
    }

    // C. HAPUS PRODUK
    public function destroy(Product $product)
    {
        // 1. Cek apakah produk ini punya gambar & apakah filenya ada di storage
        if ($product->image && Storage::disk('public')->exists('products/' . $product->image)) {
            // Hapus file fisik gambar biar gak jadi sampah
            Storage::disk('public')->delete('products/' . $product->image);
        }

        // 2. Hapus Data dari Database
        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil dihapus! 🗑️');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; // Wajib import ini biar Auth::check() jalan
use Illuminate\Support\Facades\Storage; // Buat hapus/cek gambar
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class OrderController extends Controller
{
    // =========================================================
    // 1. LOGIC KERANJANG (SESSION)
    // =========================================================

    public function cart()
    {
        return view('cart'); 
    }

    public function addToCart(Request $request, $id)
    {
        // [FIX] Pakai Auth::check() biar aman dari error undefined
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Eits, login dulu wak biar bisa masukin keranjang! ');
        }

        $qtyToAdd = (int) $request->input('quantity', 1);
        if ($qtyToAdd < 1) $qtyToAdd = 1;

        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        // Cek stok
        if($product->stock < $qtyToAdd) {
             return redirect()->back()->with('error', 'Stok tidak cukup!');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $qtyToAdd;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => $qtyToAdd,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Masuk keranjang! 🛒');
    }

    public function removeCart($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Produk dihapus dari keranjang');
    }

    public function adjustCart($id, $qty)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, (int)$qty);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Jumlah pesanan disesuaikan!');
    }

    // =========================================================
    // 2. PROSES CHECKOUT (UPDATE BARU: HP, Payment, Bukti)
    // =========================================================
    public function checkout(Request $request)
    {
        // 1. Ambil Keranjang
        $cart = session()->get('cart');

        if(!$cart || count($cart) <= 0) {
            return redirect()->route('home')->with('error', 'Keranjang kosong wak, belanja dulu!');
        }

        // 2. VALIDASI UPDATE (Tambah Phone, Payment, Proof)
        $request->validate([
            'name' => 'required|string',
            'phone' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/'], // Validasi No HP berawalan 08
            'address' => 'required|string',
            'payment_method' => 'required|in:cod,qris', // Cuma boleh COD atau QRIS
            // Bukti transfer wajib DIUPLOAD kalau pilih QRIS
            'payment_proof' => 'required_if:payment_method,qris|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'phone.regex' => 'Nomor WhatsApp harus berawalan 08 dan valid.',
        ]);

        // 3. CEK STOK (Logic Anti Overselling)
        foreach ($cart as $id => $item) {
            $product = Product::find($id);
            
            if (!$product) {
                return redirect()->back()->with('error', 'Produk "' . $item['name'] . '" sudah tidak ada.');
            }
            if ($product->stock < $item['quantity']) {
                return redirect()->back()->with('stock_warning', [
                    'id' => $id,
                    'name' => $item['name'],
                    'stock' => $product->stock
                ]);
            }
        }

        try {
            DB::beginTransaction();

            // Hitung Total
            $totalPrice = 0;
            foreach ($cart as $item) {
                $totalPrice += $item['price'] * $item['quantity'];
            }

            // [LOGIC BARU] Upload Bukti Transfer (Kalau ada)
            $proofPath = null;
            if ($request->hasFile('payment_proof')) {
                $file = $request->file('payment_proof');
                // Simpan ke storage/app/public/payment_proofs
                $file->storeAs('public/payment_proofs', $file->hashName());
                $proofPath = $file->hashName();
            }

            // 4. SIMPAN ORDER (Update Kolom Baru)
            $order = Order::create([
                'user_id' => Auth::check() ? Auth::id() : null,
                'customer_name' => $request->name,
                'customer_phone' => $request->phone,          // <--- Masuk Database
                'customer_address' => $request->address,
                'total_price' => $totalPrice,
                'payment_method' => $request->payment_method, // <--- Masuk Database
                'payment_proof' => $proofPath,                // <--- Masuk Database
                'status' => 'pending',
            ]);

            // 5. Simpan Item & Kurangi Stok
            foreach ($cart as $id => $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);

                $product = Product::find($item['id']);
                $product->decrement('stock', $item['quantity']);
            }

            // 6. Bersihkan Keranjang
            session()->forget('cart');

            DB::commit();

            return redirect()->route('home')->with('success', 'Pesanan berhasil! Kode Order: #' . $order->id);

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal checkout: ' . $e->getMessage());
        }
    }

    // =========================================================
    // 3. KHUSUS ADMIN (Lihat Order)
    // =========================================================

    public function index(Request $request)
    {
        $query = Order::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('customer_name', 'like', "%{$search}%")
                  ->orWhere('id', 'like', "%{$search}%");
        }

        $orders = $query->latest()->get();
        // Sesuai konfirmasi kamu, nama filenya 'products.order' (tanpa s)
        return view('products.order', compact('orders')); 
    }

    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        return view('products.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Status diperbarui!');
    }

    // =========================================================
    // 4. KHUSUS CUSTOMER (Riwayat Belanja)
    // =========================================================

    public function history()
{
    // CARA 1: Paling Simpel (Recommended)
    // latest() otomatis mengurutkan berdasarkan 'created_at' (Waktu dibuat)
    // Yang baru dibuat (Waktu sekarang) bakal paling atas.
    
    $orders = Order::where('user_id', Auth::id())
                   ->latest() // <--- INI KUNCINYA WAK!
                   ->get();

    return view('user.history', compact('orders'));
}

    public function historyDetail($id)
    {
        $order = Order::where('id', $id)
                      ->where('user_id', Auth::id())
                      ->with('items.product')
                      ->firstOrFail();

        return view('user.detail', compact('order'));
    }
}
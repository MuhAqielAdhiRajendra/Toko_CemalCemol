<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| 1. ROUTE PUBLIC (Bisa diakses SIAPA SAJA)
|--------------------------------------------------------------------------
*/

// Halaman Depan (Katalog Produk)
Route::get('/', [ProductController::class, 'index'])->name('home');

// --- FITUR KERANJANG (CART) ---
// Menggunakan OrderController yang baru kita update

// 1. Lihat Keranjang
Route::get('/cart', [OrderController::class, 'cart'])->name('cart.index');

// 2. Tambah Barang ke Keranjang
Route::post('/cart/add/{id}', [OrderController::class, 'addToCart'])->name('cart.add');

// 3. Hapus Barang dari Keranjang
Route::get('/cart/remove/{id}', [OrderController::class, 'removeCart'])->name('cart.remove');

// 3.5. Sesuaikan Jumlah Keranjang
Route::get('/cart/adjust/{id}/{qty}', [OrderController::class, 'adjustCart'])->name('cart.adjust');

// 4. Proses Checkout (Simpan Pesanan)
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout.process');


/*
|--------------------------------------------------------------------------
| 2. ROUTE AUTH (Login, Register, Logout)
|--------------------------------------------------------------------------
*/

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| 3. ROUTE ADMIN (HANYA ADMIN yang bisa akses)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'cekrole:admin'])->group(function () {

    // A. Dashboard (Langsung ke Tabel Produk)
    Route::get('/admin/dashboard', [ProductController::class, 'adminIndex'])->name('admin.dashboard');

    // B. Manajemen Produk (CRUD Lengkap)
    Route::resource('preorders', ProductController::class)->parameters(['preorders' => 'product']);

    // C. Manajemen Order (Admin Cek Pesanan Masuk)
    // Ingat: View-nya ada di folder resources/views/products/orders.blade.php
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::put('/orders/{id}/update', [OrderController::class, 'updateStatus'])->name('orders.update');
    //D. Menu 
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
    Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');
    Route::resource('orders', OrderController::class)->except(['index', 'show', 'update']);
    Route::resource('menus', MenuController::class)->except(['store', 'destroy']);
});


/*
|--------------------------------------------------------------------------
| 4. ROUTE USER BIASA (Setelah Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        // Kalau user biasa login, lempar balik ke halaman depan buat belanja
        return redirect()->route('home'); 
    })->name('user.home');
});
/*
|--------------------------------------------------------------------------
| 5. ROUTE USER BIASA (Setelah Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    
    // Redirect Home (Yang lama)
    Route::get('/home', function () { return redirect()->route('home'); })->name('user.home');

    // [BARU] Riwayat Pesanan
    Route::get('/my-orders', [OrderController::class, 'history'])->name('orders.history');
    Route::get('/my-orders/{id}', [OrderController::class, 'historyDetail'])->name('orders.history.detail');

});
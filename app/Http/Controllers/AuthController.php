<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Jangan lupa import ini

class AuthController extends Controller
{
    // 1. Tampilkan Halaman Login
    public function index()
    {
        return view('auth.login'); // Pastikan file view loginmu ada di sini
    }

    // 2. Proses Login & Cek Role
    public function login(Request $request)
{
    // 1. Validasi Input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // 2. Coba Login
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // 3. CEK ROLE (Ini Logika Pentingnya!)
        $user = Auth::user();

        if ($user->role === 'admin') {
            // Kalau Admin -> Lempar ke Dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Kalau User Biasa -> Lempar ke Home/Landing Page
            return redirect()->route('home');
        }
    }

    // 4. Kalau Gagal Login
    return back()->withErrors([
        'email' => 'Email atau password salah wak!',
    ])->onlyInput('email');
}

    // 3. Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
 
   }
   // 1. Tampilkan Form Register
    public function showRegister()
    {
        return view('auth.register');
    }

    // 2. Proses Simpan User Baru
    public function processRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // confirmed ngecek password_confirmation
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role user biasa
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
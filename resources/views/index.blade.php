<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Risoles Mayo Terenak di Solo & Termurah - Cemal Cemol</title>
    <meta name="description" content="Hubungi 0857-2655-9608 (085726559608) untuk pesan Risoles Mayo Terenak & Termurah di Solo. Cemal Cemol menyediakan snack box, risol lumer, dan jajanan CFD Solo.">
    <meta name="keywords" content="risoles mayo solo, risol mayo terenak, kuliner solo murah, jajanan cfd solo, risol mayo termurah, cemal cemol">
    <meta name="author" content="Cemal Cemol Solo">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; scroll-padding-top: 5rem; }
        body { font-family: 'Poppins', sans-serif; }
        
        /* Animasi Tombol WA */
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce-slow { animation: bounce-slow 3s infinite; }
        .animate-fade-in-down { animation: fadeInDown 0.5s ease-out; }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        /* Hide scrollbar */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    @php
        $hasOpenPreorder = false;
        $today = date('Y-m-d');
        if(isset($products)) {
            foreach($products as $p) {
                if($p->preorder && $today >= $p->preorder->start_date && $today <= $p->preorder->end_date) {
                    $hasOpenPreorder = true;
                    break;
                }
            }
        }
    @endphp

    @if($hasOpenPreorder)
    <a href="#preorder" 
       class="fixed bottom-6 left-6 bg-pink-500 text-white p-3 md:p-4 rounded-full shadow-2xl hover:bg-pink-600 transition duration-300 z-50 group flex items-center gap-2 border-4 border-white animate-bounce-slow">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 md:w-6 md:h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>
        <span class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 ease-in-out whitespace-nowrap font-bold hidden md:inline">Preorder Tersedia</span>
    </a>
    @endif

    <a href="https://wa.me/6285726559608?text=Halo%20Admin,%20mau%20pesan%20Risol%20Mayo%20Terenak%20di%20Solo%20dong..." target="_blank" 
       class="fixed bottom-6 right-6 bg-green-500 text-white p-3 md:p-4 rounded-full shadow-2xl hover:bg-green-600 transition duration-300 z-50 group flex items-center gap-2 border-4 border-white animate-bounce-slow">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
        <span class="max-w-0 overflow-hidden group-hover:max-w-xs transition-all duration-500 ease-in-out whitespace-nowrap font-bold hidden md:inline">Pesan Risol Enak</span>
    </a>

    <nav class="w-full bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-extrabold tracking-tight text-slate-900">
                        Cemal<span class="text-pink-500">Cemol.</span>
                    </a>
                </div>
                
                <div class="flex items-center gap-4 md:hidden">
                    <a href="{{ route('cart.index') }}" class="relative text-slate-500 hover:text-pink-500 transition p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                        <span class="absolute -top-1 -right-1 bg-pink-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full ring-2 ring-white">{{ count((array) session('cart')) }}</span>
                    </a>
                    <button id="mobile-menu-btn" class="text-slate-600 transition-transform duration-300">
                        <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Beranda</a>
                    <a href="#tentang-kami" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Tentang Kami</a>
                    <a href="#menu" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Menu Spesial</a>
                    <a href="#preorder" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Preorder</a>
                    <div class="h-6 w-px bg-gray-200 mx-2"></div>
                    @guest
                        <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Masuk</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white bg-pink-500 rounded-full hover:bg-pink-600 transition-all shadow-sm shadow-pink-500/20 active:scale-95">Daftar</a>
                    @endguest
                    @auth
                        <a href="{{ route('cart.index') }}" class="relative text-slate-500 hover:text-pink-500 transition p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                            <span class="absolute top-0 right-0 bg-pink-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full ring-2 ring-white">{{ count((array) session('cart')) }}</span>
                        </a>
                        <a href="{{ route('orders.history') }}" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors"> History Pesanan</a>
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="bg-slate-100 text-slate-700 px-3 py-1 rounded-lg text-xs font-bold border border-slate-200">Dashboard</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf <button type="submit" class="text-rose-500 hover:bg-rose-50 p-2 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h4a3 3 0 013 3v1" /></svg></button>
                        </form>
                    @endauth
                </div>
            </div>

            <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 py-4 px-4 flex flex-col gap-4 animate-fade-in-down z-40">
                <div class="flex flex-col items-end gap-3 px-2 border-b border-gray-100 pb-4 mb-2 text-right">
                    <a href="#beranda" class="text-sm font-medium text-slate-600 hover:text-pink-500">Beranda</a>
                    <a href="#tentang-kami" class="text-sm font-medium text-slate-600 hover:text-pink-500">Tentang Kami</a>
                    <a href="#menu" class="text-sm font-medium text-slate-600 hover:text-pink-500">Menu Spesial</a>
                    <a href="#preorder" class="text-sm font-medium text-slate-600 hover:text-pink-500">Preorder</a>
                </div>
                @auth
                    <div class="px-2 pb-2 mb-2 border-b border-gray-100 text-right">
                        <p class="text-xs text-slate-500">Halo,</p>
                        <p class="font-bold text-slate-800">{{ Auth::user()->name }}</p>
                    </div>
                    <a href="{{ route('orders.history') }}" class="block px-2 text-slate-700 text-right"> History Pesanan Saya</a>
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="block px-2 text-slate-700 font-bold text-right"> Dashboard Admin</a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="w-full text-right px-2 text-rose-500 font-bold">Keluar</button></form>
                @else
                    <a href="{{ route('login') }}" class="block text-center border border-slate-200 text-slate-700 px-4 py-2 rounded-full font-bold mx-2">Masuk</a>
                    <a href="{{ route('register') }}" class="block text-center bg-pink-500 text-white px-4 py-2 rounded-full font-bold mx-2">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <section id="beranda" class="relative bg-white pt-24 pb-32 md:pt-32 md:pb-40 overflow-hidden flex flex-col justify-center">
        <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[radial-gradient(#fdf2f8_1.5px,transparent_1.5px)] [background-size:24px_24px] opacity-70"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center flex flex-col items-center">
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight leading-[1.15] max-w-4xl mb-6">
                Rasakan Sensasi Lumer di Setiap <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">Gigitan.</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mb-10 leading-relaxed font-light">
                Cemal Cemol menghadirkan risoles mayo kualitas premium tanpa pengawet. Kulit super crispy di luar dengan isian mayo melimpah yang memanjakan lidah Anda.
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a href="#menu-section" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-pink-500 rounded-full hover:bg-pink-600 transition-all shadow-lg shadow-pink-500/30 active:scale-95">
                    Lihat Menu
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                
                <a href="https://wa.me/6285726559608" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-slate-700 bg-white border border-slate-200 rounded-full hover:bg-slate-50 hover:text-slate-900 hover:border-slate-300 transition-all active:scale-95">
                    Pesan WhatsApp
                </a>
            </div>
            
            <div class="mt-16 md:mt-20 pt-8 md:pt-10 border-t border-slate-100 flex flex-wrap justify-center gap-10 md:gap-20">
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">10k+</span>
                    <span class="text-sm font-medium text-slate-500 mt-1">Risol Terjual</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">4.9<span class="text-xl text-slate-400">/5</span></span>
                    <span class="text-sm font-medium text-slate-500 mt-1">Rating Rasa</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">100%</span>
                    <span class="text-sm font-medium text-slate-500 mt-1">Bahan Premium</span>
                </div>
            </div>
            
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#menu" class="text-slate-400 hover:text-pink-500 transition-colors flex flex-col items-center gap-2">
                    <span class="text-xs font-medium uppercase tracking-widest hidden md:block">Scroll</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 mb-6 mt-6">
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 flex items-start gap-3 shadow-sm animate-fade-in-down">
            <div class="text-yellow-500 flex-shrink-0 mt-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 5.75a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0112 5.75zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="text-xs text-yellow-800 leading-relaxed">
                <h4 class="font-bold text-sm mb-1">Info Penting:</h4>    
                <div class="border-t border-yellow-200 pt-2 mt-1">
                    <p>
                        ️ <b>Verifikasi Keaslian:</b> Jika Anda ragu website ini palsu, silakan buka link resmi langsung dari profil Instagram 
                        <a href="https://instagram.com/aqieladhir" target="_blank" class="font-bold underline hover:text-yellow-600 transition">
                            @aqieladhir
                        </a>. Kami adalah produsen
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-grow">
        
        <section id="menu" class="container mx-auto px-4 py-20 md:py-32">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-8">
            <form action="{{ route('home') }}" method="GET" class="w-full md:w-auto md:flex-1 max-w-md relative shrink-0">
                <input type="text" name="keyword" value="{{ request('keyword') }}" class="block w-full p-3.5 pl-12 text-sm text-gray-900 border border-gray-200 rounded-full focus:ring-2 focus:ring-pink-300 focus:outline-none bg-white shadow-sm" placeholder="Cari menu spesial (contoh: risol pedas)...">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <button type="submit" class="absolute right-1.5 bottom-1.5 bg-pink-600 text-white hover:bg-pink-700 font-bold rounded-full text-sm px-6 py-2 transition duration-300">Cari</button>
            </form>

            <div class="flex flex-wrap gap-2 w-full md:w-auto">
                <a href="{{ route('home', ['badge' => 'Recommended']) }}" class="filter-btn shrink-0 px-4 py-2 bg-pink-50 text-pink-600 border border-pink-200 rounded-full text-xs font-bold hover:bg-pink-100 transition whitespace-nowrap">Recommended</a>
                <a href="{{ route('home', ['badge' => 'Best Seller']) }}" class="filter-btn shrink-0 px-4 py-2 bg-yellow-50 text-yellow-600 border border-yellow-200 rounded-full text-xs font-bold hover:bg-yellow-100 transition whitespace-nowrap">Best Seller</a>
                <a href="{{ route('home', ['badge' => 'Pedas']) }}" class="filter-btn shrink-0 px-4 py-2 bg-red-50 text-red-600 border border-red-200 rounded-full text-xs font-bold hover:bg-red-100 transition whitespace-nowrap">Pedas</a>
                <a href="{{ route('home', ['badge' => 'Manis']) }}" class="filter-btn shrink-0 px-4 py-2 bg-blue-50 text-blue-600 border border-blue-200 rounded-full text-xs font-bold hover:bg-blue-100 transition whitespace-nowrap">Manis</a>
                <a href="{{ route('home') }}" class="filter-btn shrink-0 px-4 py-2 bg-gray-50 text-gray-600 border border-gray-200 rounded-full text-xs font-bold hover:bg-gray-100 transition whitespace-nowrap">Clear Filter</a>
            </div>
        </div>

        <div class="mb-12">
            <span class="text-pink-500 font-bold tracking-wider uppercase text-sm mb-2 block">Menu Spesial</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Pilihan Menu Kami</h2>
            <div id="menu-section">
                @if(isset($menus) && count($menus) > 0)
                    <div class="flex flex-col md:grid md:grid-cols-3 gap-4">
                    @foreach($menus as $menu)
                        <div class="bg-white rounded-xl shadow-sm border border-yellow-100 overflow-hidden flex flex-row md:flex-col hover:shadow-lg transition duration-200">
                            <div class="relative w-28 h-28 md:w-full md:h-48 flex-shrink-0 order-last md:order-first bg-gray-100 group">
                                <img src="{{ asset('storage/menus/'.$menu->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Risol Mayo {{ $menu->name }} Solo">
                                @if($menu->badge)
                                    <span class="absolute top-2 right-2 bg-yellow-400 text-yellow-900 text-[10px] font-bold px-2 py-0.5 rounded-full shadow z-10">{{ $menu->badge }}</span>
                                @endif
                            </div>

                            <div class="flex-1 p-3 md:p-4 flex flex-col justify-between">
                                <div>
                                    <h3 class="font-bold text-gray-800 text-base mb-1">{{ $menu->name }}</h3>
                                    <p class="text-xs text-gray-500 line-clamp-2 leading-relaxed mb-2">{{ $menu->description }}</p>
                                </div>
                                <div class="flex justify-between items-end mt-auto">
                                    <span class="text-yellow-700 font-bold text-sm md:text-lg bg-yellow-50 px-2 py-1 rounded">
                                        Rp {{ number_format($menu->price, 0, ',', '.') }}
                                    </span>
                                    <a href="https://wa.me/6285726559608?text=Halo%20kak,%20mau%20pesan%20menu%20{{ $menu->name }}%20dong" target="_blank" class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full border border-green-200 hover:bg-green-100 transition flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
                                        Chat
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @else
                    <div class="col-span-full py-10 text-center text-gray-500 bg-white rounded-xl border border-dashed border-gray-300">
                        <p>Menu tidak ditemukan.</p>
                    </div>
                @endif
            </div>
        </div>

        </section>

        <section id="preorder" class="container mx-auto px-4 py-20 md:py-32 border-t border-gray-100">
            <div class="mb-12">
                <span class="text-pink-500 font-bold tracking-wider uppercase text-sm mb-2 block">Special Order</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Produk Preorder</h2>
            </div>

        <div class="flex flex-col md:grid md:grid-cols-4 gap-4">
            @forelse($products as $product)
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-row md:flex-col p-3 md:p-0 gap-3 md:gap-0 hover:shadow-lg transition duration-200">
                    
                    <div class="relative w-28 h-28 md:w-full md:h-48 flex-shrink-0 order-last md:order-first rounded-lg md:rounded-none overflow-hidden bg-gray-100 group">
                        @if($product->image)
                            <img src="{{ asset('storage/products/'.$product->image) }}" class="w-full h-full object-cover" alt="Jual {{ $product->name }} Solo Murah">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.008v.008h-.008V8z"></path></svg></div>
                        @endif

                        @php
                            $po = $product->preorder; $today = date('Y-m-d');
                            $status = 'ready';
                            if($po) {
                                if($today < $po->start_date) $status = 'soon';
                                elseif($today >= $po->start_date && $today <= $po->end_date) $status = 'open';
                                else $status = 'closed';
                            }
                        @endphp

                        @if($status == 'open') <span class="absolute top-2 left-2 bg-pink-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded shadow z-20">PO</span>
                        @elseif($status == 'closed') <span class="absolute top-2 left-2 bg-gray-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded shadow z-20">Tutup</span>
                        @endif

                        @if($product->badge)
                            <span class="absolute top-2 right-2 bg-yellow-400 text-yellow-900 text-[10px] font-bold px-2 py-0.5 rounded-full shadow z-20">
                                {{ $product->badge }}
                            </span>
                        @endif


                    </div>

                    <div class="flex-1 flex flex-col md:p-4 justify-between">
                        <div>
                            <h3 class="font-bold text-gray-800 text-base md:text-lg leading-tight mb-1">{{ $product->name }}</h3>
                            <p class="text-xs text-gray-500 line-clamp-2 mb-2 leading-relaxed">{{ $product->description }}</p>
                            
                            <p class="text-[10px] text-gray-400 font-medium mb-1">Stok: {{ $product->stock }}</p>

                            @if($status == 'open')
                                <p class="text-[10px] text-pink-500 font-semibold mb-1"> Kirim: {{ \Carbon\Carbon::parse($po->delivery_date)->format('d M') }}</p>
                            @endif
                        </div>

                        <div class="mt-auto flex flex-col md:flex-row justify-between items-start md:items-end gap-3 md:gap-2">
                            <span class="text-gray-900 font-bold text-sm md:text-xl">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            
                            @if(($status == 'ready' || $status == 'open') && $product->stock > 0)
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex items-center bg-gray-50 md:bg-white p-1 rounded-full shadow-sm border border-gray-200 w-full md:w-auto justify-between md:justify-start">
                                @csrf
                                <div class="flex items-center">
                                    <button type="button" onclick="const input = this.nextElementSibling; if(input.value > 1) input.value--;" class="w-7 h-7 md:w-6 md:h-6 flex items-center justify-center text-gray-500 hover:bg-gray-200 md:hover:bg-gray-100 rounded-full font-bold transition">-</button>
                                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}" class="w-8 text-center text-xs font-bold text-gray-700 focus:outline-none bg-transparent" style="-moz-appearance: textfield; appearance: none;" readonly>
                                    <button type="button" onclick="const input = this.previousElementSibling; if(parseInt(input.value) < {{ $product->stock }}) input.value++;" class="w-7 h-7 md:w-6 md:h-6 flex items-center justify-center text-gray-500 hover:bg-gray-200 md:hover:bg-gray-100 rounded-full font-bold transition">+</button>
                                </div>
                                <div class="w-px h-5 md:h-4 bg-gray-300 mx-2 md:mx-1"></div>
                                <button type="submit" class="text-white md:text-green-600 bg-green-500 md:bg-transparent text-xs font-bold px-4 md:px-2 py-1.5 md:py-0.5 rounded-full hover:bg-green-600 md:hover:bg-green-50 transition active:scale-95 flex-1 md:flex-none text-center">
                                    Tambah
                                </button>
                            </form>
                            @endif
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full py-10 text-center text-gray-500 bg-white rounded-xl border border-dashed border-gray-300">
                    <p>Belum ada produk yang tersedia saat ini.</p>
                </div>
            @endforelse
        </div>

        </section>
    </main>

    <section id="tentang-kami" class="bg-white pt-20 md:pt-32 pb-32 md:pb-40">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-pink-500 font-bold tracking-wider uppercase text-sm mb-2 block">Kenapa Kami?</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">Kualitas Bintang Lima</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4 group hover:-translate-y-1 transition duration-300">
                    <div class="bg-pink-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center text-pink-600 mb-3 group-hover:bg-pink-600 group-hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.687" /></svg></div>
                    <h3 class="font-bold text-gray-800 text-sm">Risol Terenak di Solo</h3>
                    <p class="text-xs text-gray-500 mt-1">Rasa bintang lima</p>
                </div>
                <div class="p-4 group hover:-translate-y-1 transition duration-300">
                    <div class="bg-pink-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center text-pink-600 mb-3 group-hover:bg-pink-600 group-hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" /></svg></div>
                    <h3 class="font-bold text-gray-800 text-sm">Bahan Premium Original</h3>
                    <p class="text-xs text-gray-500 mt-1">Tanpa pengawet</p>
                </div>
                <div class="p-4 group hover:-translate-y-1 transition duration-300">
                    <div class="bg-pink-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center text-pink-600 mb-3 group-hover:bg-pink-600 group-hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
                    <h3 class="font-bold text-gray-800 text-sm">Harga Termurah</h3>
                    <p class="text-xs text-gray-500 mt-1">Mulai Rp 2.000an</p>
                </div>
                <div class="p-4 group hover:-translate-y-1 transition duration-300">
                    <div class="bg-pink-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center text-pink-600 mb-3 group-hover:bg-pink-600 group-hover:text-white transition"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" /></svg></div>
                    <h3 class="font-bold text-gray-800 text-sm">COD / CFD Solo</h3>
                    <p class="text-xs text-gray-500 mt-1">Siap antar & tersedia di CFD</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-pink-50 pt-24 pb-10 rounded-t-[3rem] md:rounded-t-[4rem] -mt-16 relative z-10 shadow-[0_-15px_40px_-15px_rgba(236,72,153,0.15)]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-16">
                <!-- Brand Info -->
                <div class="md:col-span-2">
                    <a href="#beranda" class="text-2xl font-extrabold tracking-tight text-slate-900 mb-6 block">
                        Cemal<span class="text-pink-500">Cemol.</span>
                    </a>
                    <p class="text-slate-500 text-sm leading-relaxed max-w-sm mb-6">
                        Menghadirkan risoles mayo kualitas premium tanpa pengawet. Teman terbaik untuk setiap momen spesial Anda.
                    </p>
                    <!-- Social Links Mini -->
                    <div class="flex space-x-4">
                        <a href="https://instagram.com/aqieladhir" target="_blank" class="text-slate-400 hover:text-pink-500 transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://wa.me/6285726559608" target="_blank" class="text-slate-400 hover:text-green-500 transition">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.027 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Pembayaran -->
                <div>
                    <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-6">Pembayaran</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="bg-white p-2 rounded flex items-center justify-center border border-pink-200 shadow-sm">
                                <span class="text-[10px] font-extrabold text-blue-800 tracking-tight">QRIS</span>
                            </div>
                            Transfer Praktis
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600">
                            <div class="bg-white p-2 rounded flex items-center justify-center border border-pink-200 shadow-sm">
                                <span class="text-[10px] font-extrabold text-green-700 tracking-tight">CASH</span>
                            </div>
                            Tunai (COD/CFD)
                        </li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-pink-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>CFD Solo (Depan Hotel Diamond)<br>Setiap Hari Minggu</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-pink-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="https://wa.me/6285726559608" class="hover:text-pink-500 transition">+62 857-2655-9608</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-pink-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500">
                    &copy; {{ date('Y') }} CemalCemol Solo. All rights reserved.
                </p>
                <div class="flex space-x-6 text-sm text-slate-500 font-medium">
                    <a href="#" class="hover:text-pink-500 transition">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-pink-500 transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                this.classList.remove('rotate-90');
            } else {
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                this.classList.add('rotate-90');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonColor: '#ec4899', // text-pink-500
                confirmButtonText: 'Lanjut Belanja',
                timer: 3000,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Oops...',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonColor: '#ec4899'
            });
        @endif
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault(); // Mencegah reload halaman
                    const url = this.getAttribute('href');
                    const menuSection = document.getElementById('menu-section');

                    // Hapus state aktif dari semua tombol filter
                    filterBtns.forEach(b => {
                        b.classList.remove('ring-2', 'ring-offset-2', 'ring-pink-500', 'scale-105', 'shadow-md', 'opacity-100');
                        b.classList.add('opacity-70');
                    });
                    
                    // Tambahkan state aktif ke tombol yang diklik
                    this.classList.remove('opacity-70');
                    this.classList.add('ring-2', 'ring-offset-2', 'ring-pink-500', 'scale-105', 'shadow-md', 'opacity-100');

                    // Tampilkan indikator loading
                    if (menuSection) {
                        menuSection.innerHTML = `
                            <div class="flex flex-col items-center justify-center py-16">
                                <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-pink-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <p class="text-gray-500 font-medium">Mencari menu...</p>
                            </div>
                        `;
                    }

                    // Ambil data menggunakan Fetch API
                    fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                        .then(response => response.text())
                        .then(html => {
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(html, 'text/html');
                            const newMenuSection = doc.getElementById('menu-section');
                            
                            const currentMenuSection = document.getElementById('menu-section');
                            if (newMenuSection && currentMenuSection) {
                                currentMenuSection.innerHTML = newMenuSection.innerHTML;
                            } else if (currentMenuSection) {
                                currentMenuSection.innerHTML = '<div class="col-span-full py-10 text-center text-gray-500 bg-white rounded-xl border border-dashed border-gray-300"><p>Menu tidak ditemukan.</p></div>';
                            }
                        })
                        .catch(err => {
                            console.error('Error fetching data:', err);
                            const currentMenuSection = document.getElementById('menu-section');
                            if (currentMenuSection) {
                                currentMenuSection.innerHTML = '<div class="col-span-full py-10 text-center text-red-500 bg-white rounded-xl border border-dashed border-gray-300"><p>Terjadi kesalahan, silakan coba lagi.</p></div>';
                            }
                        });
                });
            });
        });
    </script>
</body>
</html>
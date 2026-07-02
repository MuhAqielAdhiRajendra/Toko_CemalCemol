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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Newsreader', 'serif'],
                    },
                    colors: {
                        base: '#fdf2f8', // pink-50
                        surface: '#FFFFFF',
                        primary: '#db2777', // pink-600
                        secondary: '#6b7280', // gray-500
                        border: '#fbcfe8', // pink-200
                        pastel: {
                            red: { bg: '#FDEBEC', text: '#9F2F2D' },
                            blue: { bg: '#E1F3FE', text: '#1F6C9F' },
                            green: { bg: '#EDF3EC', text: '#346538' },
                            yellow: { bg: '#FBF3DB', text: '#956400' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; scroll-padding-top: 5rem; }
        body { font-family: 'Inter', sans-serif; background-color: #fdf2f8; color: #db2777; line-height: 1.6; }
        h1, h2, h3, h4, h5, h6, .font-serif { font-family: 'Newsreader', serif; }
        
        /* Subtle scroll entry animation */
        .fade-in-up {
            opacity: 0;
            transform: translateY(12px);
            transition: opacity 600ms cubic-bezier(0.16, 1, 0.3, 1), transform 600ms cubic-bezier(0.16, 1, 0.3, 1);
        }
        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hide scrollbar */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-base text-primary flex flex-col min-h-screen antialiased selection:bg-primary selection:text-white">

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
       class="fixed bottom-6 left-6 bg-surface text-primary p-3 md:px-4 md:py-3 border border-border rounded-md shadow-sm hover:shadow-md transition-all duration-200 z-50 group flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>
        <span class="text-sm font-medium hidden md:inline">Preorder Open</span>
    </a>
    @endif

    <a href="https://wa.me/6285726559608?text=Halo%20Admin,%20mau%20pesan%20Risol%20Mayo%20Terenak%20di%20Solo%20dong..." target="_blank" 
       class="fixed bottom-6 right-6 bg-primary text-white p-3 md:px-4 md:py-3 rounded-md hover:scale-[0.98] transition-transform duration-200 z-50 group flex items-center gap-2 shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
        <span class="text-sm font-medium hidden md:inline">Contact</span>
    </a>

    <nav class="w-full bg-surface/90 backdrop-blur-md sticky top-0 z-50 border-b border-border">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="/" class="text-xl font-serif font-medium tracking-tight text-primary">
                        CemalCemol.
                    </a>
                </div>
                
                <div class="flex items-center gap-4 md:hidden">
                    <a href="{{ route('cart.index') }}" class="relative text-secondary hover:text-primary transition p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                        <span class="absolute -top-1 -right-1 bg-primary text-white text-[10px] font-medium px-1.5 py-0.5 rounded-full">{{ count((array) session('cart')) }}</span>
                    </a>
                    <button id="mobile-menu-btn" class="text-secondary transition-transform duration-300">
                        <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-sm text-secondary hover:text-primary transition-colors">Beranda</a>
                    <a href="#tentang-kami" class="text-sm text-secondary hover:text-primary transition-colors">Tentang</a>
                    <a href="#menu" class="text-sm text-secondary hover:text-primary transition-colors">Menu</a>
                    <a href="#preorder" class="text-sm text-secondary hover:text-primary transition-colors">Preorder</a>
                    <div class="h-4 w-px bg-border mx-2"></div>
                    @guest
                        <a href="{{ route('login') }}" class="text-sm text-secondary hover:text-primary transition-colors">Masuk</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-black transition-all active:scale-[0.98]">Daftar</a>
                    @endguest
                    @auth
                        <a href="{{ route('cart.index') }}" class="relative text-secondary hover:text-primary transition p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                            <span class="absolute top-0 right-0 bg-primary text-white text-[10px] font-medium px-1.5 py-0.5 rounded-full">{{ count((array) session('cart')) }}</span>
                        </a>
                        <a href="{{ route('orders.history') }}" class="text-sm text-secondary hover:text-primary transition-colors">History</a>
                        @if(Auth::user()->role == 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="bg-base text-primary px-3 py-1 rounded-md text-xs font-medium border border-border">Dashboard</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf <button type="submit" class="text-secondary hover:text-primary p-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h4a3 3 0 013 3v1" /></svg></button>
                        </form>
                    @endauth
                </div>
            </div>

            <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-surface border-b border-border py-4 px-6 flex flex-col gap-4 shadow-sm z-40">
                <div class="flex flex-col gap-3 border-b border-border pb-4 text-left">
                    <a href="#beranda" class="text-sm text-primary">Beranda</a>
                    <a href="#tentang-kami" class="text-sm text-secondary">Tentang Kami</a>
                    <a href="#menu" class="text-sm text-secondary">Menu Spesial</a>
                    <a href="#preorder" class="text-sm text-secondary">Preorder</a>
                </div>
                @auth
                    <div class="pb-2 border-b border-border text-left">
                        <p class="text-xs text-secondary">Logged in as</p>
                        <p class="font-medium text-primary">{{ Auth::user()->name }}</p>
                    </div>
                    <a href="{{ route('orders.history') }}" class="block text-sm text-secondary text-left">History Pesanan</a>
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="block text-sm text-primary font-medium text-left">Dashboard Admin</a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="w-full text-left text-sm text-secondary">Keluar</button></form>
                @else
                    <div class="flex flex-col gap-2 mt-2">
                        <a href="{{ route('login') }}" class="block text-center border border-border text-primary px-4 py-2 rounded-md font-medium text-sm">Masuk</a>
                        <a href="{{ route('register') }}" class="block text-center bg-primary text-white px-4 py-2 rounded-md font-medium text-sm">Daftar</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <section id="beranda" class="relative bg-base pt-32 pb-32 md:pt-48 md:pb-40 overflow-hidden flex flex-col justify-center border-b border-border fade-in-up is-visible">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 flex flex-col items-start w-full">
            <h1 class="text-5xl md:text-7xl font-serif text-primary tracking-tight leading-[1.1] mb-6 max-w-3xl">
                Artisanal Risoles.<br/>
                <span class="text-secondary italic">Crafted in Solo.</span>
            </h1>

            <p class="text-lg text-secondary max-w-lg mb-10 leading-relaxed">
                Premium ingredients, completely preservative-free. A meticulous balance of crisp exterior and rich, savory interior.
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                <a href="#menu-section" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-white bg-primary rounded-md hover:bg-black transition-all active:scale-[0.98]">
                    Explore Menu
                </a>
                
                <a href="https://wa.me/6285726559608" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-primary bg-surface border border-border rounded-md hover:bg-gray-50 transition-all active:scale-[0.98]">
                    Order via WhatsApp
                </a>
            </div>
            
        </div>
    </section>



    <main class="flex-grow">
        
        <section id="menu" class="max-w-5xl mx-auto px-6 lg:px-8 py-20 md:py-32 fade-in-up">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-4 mb-10">
            <form action="{{ route('home') }}" method="GET" class="w-full md:w-auto md:flex-1 max-w-md relative shrink-0">
                <input type="text" name="keyword" value="{{ request('keyword') }}" class="block w-full p-3 pl-10 text-sm text-primary border border-border rounded-md focus:border-primary focus:outline-none bg-surface" placeholder="Search menu...">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-secondary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <button type="submit" class="absolute right-1 bottom-1 bg-primary text-white hover:bg-black font-medium rounded text-xs px-4 py-2 transition-all">Search</button>
            </form>

            <div class="flex flex-wrap gap-2 w-full md:w-auto">
                <a href="{{ route('home', ['badge' => 'Recommended']) }}" class="filter-btn shrink-0 px-3 py-1 bg-[#FDEBEC] text-[#9F2F2D] rounded-full text-xs font-semibold tracking-wide uppercase transition hover:opacity-80">Recommended</a>
                <a href="{{ route('home', ['badge' => 'Best Seller']) }}" class="filter-btn shrink-0 px-3 py-1 bg-[#FBF3DB] text-[#956400] rounded-full text-xs font-semibold tracking-wide uppercase transition hover:opacity-80">Best Seller</a>
                <a href="{{ route('home', ['badge' => 'Pedas']) }}" class="filter-btn shrink-0 px-3 py-1 bg-[#E1F3FE] text-[#1F6C9F] rounded-full text-xs font-semibold tracking-wide uppercase transition hover:opacity-80">Pedas</a>
                <a href="{{ route('home', ['badge' => 'Manis']) }}" class="filter-btn shrink-0 px-3 py-1 bg-[#EDF3EC] text-[#346538] rounded-full text-xs font-semibold tracking-wide uppercase transition hover:opacity-80">Manis</a>
                <a href="{{ route('home') }}" class="filter-btn shrink-0 px-3 py-1 bg-surface text-secondary border border-border rounded-full text-xs font-semibold tracking-wide uppercase transition hover:bg-gray-50">Clear</a>
            </div>
        </div>

        <div class="mb-12">
            <span class="text-secondary font-mono text-xs uppercase tracking-widest mb-3 block">Special Menu</span>
            <h2 class="text-3xl font-serif text-primary tracking-tight">Our Selections</h2>
            <div class="h-px w-full bg-border mt-4 mb-8"></div>
            
            <div id="menu-section">
                @if(isset($menus) && count($menus) > 0)
                    <div class="flex flex-col md:grid md:grid-cols-3 gap-6">
                    @foreach($menus as $menu)
                        <div class="bg-surface rounded-lg border border-border overflow-hidden flex flex-row md:flex-col hover:shadow-sm transition duration-200">
                            <div class="relative w-28 h-28 md:w-full md:h-48 flex-shrink-0 order-last md:order-first bg-[#F7F6F3]">
                                <img src="{{ asset('storage/menus/'.$menu->image) }}" class="w-full h-full object-cover opacity-90" alt="Risol {{ $menu->name }}">
                                @if($menu->badge)
                                    <span class="absolute top-3 right-3 bg-surface text-primary text-[10px] font-semibold px-2 py-1 rounded-full shadow-sm border border-border uppercase tracking-wider">{{ $menu->badge }}</span>
                                @endif
                            </div>

                            <div class="flex-1 p-4 md:p-5 flex flex-col justify-between border-t border-border md:border-t-0 md:border-t border-border">
                                <div>
                                    <h3 class="font-medium text-primary text-base mb-2">{{ $menu->name }}</h3>
                                    <p class="text-sm text-secondary line-clamp-2 leading-relaxed mb-4">{{ $menu->description }}</p>
                                </div>
                                <div class="flex justify-between items-end mt-auto pt-4 border-t border-border/50">
                                    <span class="text-primary font-mono text-sm">
                                        Rp {{ number_format($menu->price, 0, ',', '.') }}
                                    </span>
                                    <a href="https://wa.me/6285726559608?text=Halo%20kak,%20mau%20pesan%20menu%20{{ $menu->name }}%20dong" target="_blank" class="text-xs font-medium text-primary bg-surface border border-border px-3 py-1.5 rounded hover:bg-gray-50 transition flex items-center gap-1.5 active:scale-[0.98]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                        Inquire
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @else
                    <div class="col-span-full py-16 text-center text-secondary bg-surface rounded-lg border border-border">
                        <p class="font-mono text-sm">No items found.</p>
                    </div>
                @endif
            </div>
        </div>

        </section>

        <section id="preorder" class="max-w-5xl mx-auto px-6 lg:px-8 py-20 md:py-32 border-t border-border fade-in-up">
            <div class="mb-12">
                <span class="text-secondary font-mono text-xs uppercase tracking-widest mb-3 block">Special Order</span>
                <h2 class="text-3xl font-serif text-primary tracking-tight">Preorder Items</h2>
                <div class="h-px w-full bg-border mt-4 mb-8"></div>
            </div>

        <div class="flex flex-col md:grid md:grid-cols-4 gap-6">
            @forelse($products as $product)
                <div class="bg-surface rounded-lg border border-border overflow-hidden flex flex-row md:flex-col p-0 hover:shadow-sm transition duration-200">
                    
                    <div class="relative w-28 h-28 md:w-full md:h-48 flex-shrink-0 order-last md:order-first border-l md:border-l-0 md:border-b border-border bg-[#F7F6F3]">
                        @if($product->image)
                            <img src="{{ asset('storage/products/'.$product->image) }}" class="w-full h-full object-cover opacity-90" alt="{{ $product->name }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-secondary"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.008v.008h-.008V8z"></path></svg></div>
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

                        @if($status == 'open') <span class="absolute top-3 left-3 bg-[#E1F3FE] text-[#1F6C9F] text-[10px] font-semibold px-2 py-0.5 rounded-full uppercase tracking-widest border border-[#1F6C9F]/20">PO</span>
                        @elseif($status == 'closed') <span class="absolute top-3 left-3 bg-surface text-secondary text-[10px] font-semibold px-2 py-0.5 rounded-full uppercase tracking-widest border border-border">Closed</span>
                        @endif

                        @if($product->badge)
                            <span class="absolute top-3 right-3 bg-surface text-primary text-[10px] font-semibold px-2 py-0.5 rounded-full border border-border uppercase tracking-widest">
                                {{ $product->badge }}
                            </span>
                        @endif
                    </div>

                    <div class="flex-1 flex flex-col p-4 justify-between">
                        <div>
                            <h3 class="font-medium text-primary text-base leading-tight mb-2">{{ $product->name }}</h3>
                            <p class="text-xs text-secondary line-clamp-2 mb-4 leading-relaxed">{{ $product->description }}</p>
                            
                            <p class="font-mono text-[10px] text-secondary mb-1 uppercase">Stock: {{ $product->stock }}</p>

                            @if($status == 'open')
                                <p class="font-mono text-[10px] text-primary mb-1 uppercase"> Ship: {{ \Carbon\Carbon::parse($po->delivery_date)->format('d M') }}</p>
                            @endif
                        </div>

                        <div class="mt-4 pt-4 border-t border-border flex flex-col gap-3">
                            <span class="text-primary font-mono text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            
                            @if(($status == 'ready' || $status == 'open') && $product->stock > 0)
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex items-center w-full gap-2">
                                @csrf
                                <div class="flex items-center border border-border rounded flex-shrink-0">
                                    <button type="button" onclick="const input = this.nextElementSibling; if(input.value > 1) input.value--;" class="w-7 h-7 flex items-center justify-center text-secondary hover:bg-gray-50 transition">-</button>
                                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}" class="w-8 text-center text-xs font-mono text-primary focus:outline-none bg-transparent" style="-moz-appearance: textfield; appearance: none;" readonly>
                                    <button type="button" onclick="const input = this.previousElementSibling; if(parseInt(input.value) < {{ $product->stock }}) input.value++;" class="w-7 h-7 flex items-center justify-center text-secondary hover:bg-gray-50 transition">+</button>
                                </div>
                                <button type="submit" class="flex-1 bg-primary text-white text-xs font-medium px-3 py-1.5 rounded hover:bg-black transition active:scale-[0.98] text-center">
                                    Add
                                </button>
                            </form>
                            @endif
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full py-16 text-center text-secondary bg-surface rounded-lg border border-border">
                    <p class="font-mono text-sm">No items available.</p>
                </div>
            @endforelse
        </div>

        </section>
    </main>

    <section id="tentang-kami" class="bg-base pt-24 md:pt-40 pb-32 md:pb-48 border-t border-border fade-in-up">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="mb-16">
                <span class="text-secondary font-mono text-xs uppercase tracking-widest mb-3 block">Philosophy</span>
                <h2 class="text-3xl font-serif text-primary tracking-tight">The Core Principles</h2>
                <div class="h-px w-full bg-border mt-4"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-start border border-border p-6 rounded-lg bg-surface hover:shadow-sm transition">
                    <div class="text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" /></svg></div>
                    <h3 class="font-medium text-primary text-base">Uncompromised Quality</h3>
                    <p class="text-sm text-secondary mt-2 leading-relaxed">The finest taste standard in Solo.</p>
                </div>
                <div class="flex flex-col items-start border border-border p-6 rounded-lg bg-surface hover:shadow-sm transition">
                    <div class="text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z" /></svg></div>
                    <h3 class="font-medium text-primary text-base">Premium Organics</h3>
                    <p class="text-sm text-secondary mt-2 leading-relaxed">100% natural, no preservatives.</p>
                </div>
                <div class="flex flex-col items-start border border-border p-6 rounded-lg bg-surface hover:shadow-sm transition">
                    <div class="text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" /></svg></div>
                    <h3 class="font-medium text-primary text-base">Accessible Value</h3>
                    <p class="text-sm text-secondary mt-2 leading-relaxed">Starting from Rp 2.000.</p>
                </div>
                <div class="flex flex-col items-start border border-border p-6 rounded-lg bg-surface hover:shadow-sm transition">
                    <div class="text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg></div>
                    <h3 class="font-medium text-primary text-base">COD / CFD Solo</h3>
                    <p class="text-sm text-secondary mt-2 leading-relaxed">Available for local delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-surface pt-20 pb-10 border-t border-border relative z-10">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-16">
                <!-- Brand Info -->
                <div class="md:col-span-2">
                    <a href="#beranda" class="text-xl font-serif font-medium tracking-tight text-primary mb-6 block">
                        CemalCemol.
                    </a>
                    <p class="text-secondary text-sm leading-relaxed max-w-sm mb-6">
                        Menghadirkan risoles mayo kualitas premium tanpa pengawet. Teman terbaik untuk setiap momen spesial Anda.
                    </p>
                    <!-- Social Links Mini -->
                    <div class="flex space-x-4">
                        <a href="https://instagram.com/aqieladhir" target="_blank" class="text-secondary hover:text-primary transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://wa.me/6285726559608" target="_blank" class="text-secondary hover:text-primary transition">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.027 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Pembayaran -->
                <div>
                    <h4 class="text-xs font-medium text-primary uppercase tracking-widest mb-6">Payment</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-sm text-secondary">
                            <span class="text-[10px] font-mono text-primary bg-base px-2 py-1 rounded border border-border">QRIS</span>
                            Transfer
                        </li>
                        <li class="flex items-center gap-3 text-sm text-secondary">
                            <span class="text-[10px] font-mono text-primary bg-base px-2 py-1 rounded border border-border">CASH</span>
                            COD/CFD
                        </li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="text-xs font-medium text-primary uppercase tracking-widest mb-6">Contact</h4>
                    <ul class="space-y-4 text-sm text-secondary">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-primary shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                            <span>CFD Solo (Depan Hotel Diamond)<br>Setiap Hari Minggu</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                            <a href="https://wa.me/6285726559608" class="hover:text-primary transition">+62 857-2655-9608</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-border pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-secondary">
                    &copy; {{ date('Y') }} CemalCemol Solo. All rights reserved.
                </p>
                <div class="flex space-x-6 text-sm text-secondary">
                    <a href="#" class="hover:text-primary transition">Privacy</a>
                    <a href="#" class="hover:text-primary transition">Terms</a>
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
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonColor: '#db2777',
                confirmButtonText: 'Continue',
                timer: 3000,
                timerProgressBar: true,
                customClass: {
                    popup: 'border border-border rounded-lg shadow-sm',
                    title: 'text-primary font-serif',
                    htmlContainer: 'text-secondary text-sm'
                }
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Oops...',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonColor: '#db2777',
                customClass: {
                    popup: 'border border-border rounded-lg shadow-sm',
                    title: 'text-primary font-serif',
                    htmlContainer: 'text-secondary text-sm'
                }
            });
        @endif
        
        // Scroll entry animation logic
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
        });
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
                        b.classList.remove('ring-1', 'ring-offset-1', 'ring-primary', 'scale-105', 'shadow-sm', 'opacity-100');
                        b.classList.add('opacity-70');
                    });
                    
                    // Tambahkan state aktif ke tombol yang diklik
                    this.classList.remove('opacity-70');
                    this.classList.add('ring-1', 'ring-offset-1', 'ring-primary', 'scale-105', 'shadow-sm', 'opacity-100');

                    // Tampilkan indikator loading
                    if (menuSection) {
                        menuSection.innerHTML = `
                            <div class="flex flex-col items-center justify-center py-16 col-span-full">
                                <svg class="animate-spin -ml-1 mr-3 h-8 w-8 text-primary mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <p class="text-secondary font-mono text-xs uppercase tracking-widest">Searching...</p>
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
                                currentMenuSection.innerHTML = '<div class="col-span-full py-16 text-center text-secondary bg-surface rounded-lg border border-border"><p class="font-mono text-sm">No items found.</p></div>';
                            }
                        })
                        .catch(err => {
                            console.error('Error fetching data:', err);
                            if (menuSection) {
                                menuSection.innerHTML = '<div class="col-span-full py-16 text-center text-secondary bg-surface rounded-lg border border-border"><p class="font-mono text-sm">Gagal memuat menu. Silakan coba lagi.</p></div>';
                            }
                        });
                });
            });
        });
    </script>
</body>
</html>
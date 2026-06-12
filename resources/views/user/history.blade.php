<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Quicksand', sans-serif; 
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="text-slate-600 min-h-screen flex flex-col">

    <nav class="glass-effect fixed w-full z-50 border-b border-slate-200 transition-all duration-300">
        <div class="container mx-auto px-4 md:px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-pink-500 hover:text-pink-600 transition flex items-center gap-2">
                Cemal<span class="bg-pink-500 text-white px-2 py-1 rounded-xl transform -rotate-2">Cemol</span>
            </a>

            <a href="{{ route('home') }}" class="text-sm font-bold text-slate-500 hover:text-pink-600 transition flex items-center gap-2 bg-slate-50 hover:bg-pink-50 px-4 py-2 rounded-full border border-slate-200 hover:border-pink-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                <span class="hidden sm:inline">Belanja Lagi</span>
            </a>
        </div>
    </nav>

    <div class="container mx-auto px-4 md:px-6 py-8 mt-24 flex-grow max-w-5xl">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-slate-800 tracking-tight">📦 Riwayat Pesanan</h1>
                <p class="text-slate-500 mt-1 text-sm">Pantau terus barang jajanmu sampai depan rumah.</p>
            </div>
            <div class="bg-white px-4 py-2 rounded-xl border border-slate-200 shadow-sm text-sm font-bold text-slate-600 flex items-center gap-2">
                <span>Total Pesanan:</span>
                <span class="bg-pink-100 text-pink-600 px-2 py-0.5 rounded-lg">{{ $orders->count() }}</span>
            </div>
        </div>

        <div class="space-y-6">
            @forelse($orders as $order)
                @php
                    $statusColor = match($order->status) {
                        'pending' => 'bg-amber-100 text-amber-700 border-amber-200',
                        'paid' => 'bg-blue-100 text-blue-700 border-blue-200',
                        'shipped' => 'bg-purple-100 text-purple-700 border-purple-200',
                        'completed' => 'bg-emerald-100 text-emerald-700 border-emerald-200',
                        'cancelled' => 'bg-rose-100 text-rose-700 border-rose-200',
                        default => 'bg-gray-100 text-gray-700 border-gray-200'
                    };
                    $statusLabel = match($order->status) {
                        'pending' => '⏳ Menunggu',
                        'paid' => '💰 Sudah Bayar',
                        'shipped' => '🚚 Dikirim',
                        'completed' => '✅ Selesai',
                        'cancelled' => '❌ Dibatalkan',
                        default => 'Unknown'
                    };
                @endphp

                <div class="bg-white rounded-3xl p-5 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] border border-slate-100 hover:shadow-lg hover:border-pink-200 transition duration-300 group relative overflow-hidden">
                    
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-50 to-transparent rounded-bl-full -mr-8 -mt-8 opacity-50 group-hover:opacity-100 transition"></div>

                    <div class="flex flex-col md:flex-row justify-between md:items-center gap-6 relative z-10">
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                <span class="text-2xl">🛍️</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                   <span class="font-black text-slate-800 text-lg">Order #{{ $order->id }}</span>
                                   <span class="font-black text-slate-800 text-lg">Pesanan Ke-{{ $loop->iteration }}</span>
                                    <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wide border {{ $statusColor }}">
                                        {{ $statusLabel }}
                                    </span>
                                </div>
                                <p class="text-xs text-slate-400 font-medium">
                                    📅 {{ $order->created_at->format('d M Y, H:i') }} WIB
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-row md:flex-col lg:flex-row items-center justify-between md:justify-end gap-4 md:gap-8 w-full md:w-auto border-t md:border-t-0 border-dashed border-slate-200 pt-4 md:pt-0 mt-2 md:mt-0">
                            
                            <div class="text-left md:text-right">
                                <p class="text-xs text-slate-400 font-bold uppercase mb-1">Total Tagihan</p>
                                <p class="text-xl font-black text-pink-600">Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                            </div>

                            <a href="{{ route('orders.history.detail', $order->id) }}" class="bg-white text-slate-700 hover:text-pink-600 hover:bg-pink-50 border-2 border-slate-100 hover:border-pink-200 font-bold text-sm px-6 py-3 rounded-xl transition shadow-sm flex items-center gap-2 group/btn">
                                <span>Lihat Detail</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover/btn:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="text-center py-20 bg-white rounded-3xl border border-dashed border-slate-200">
                    <div class="bg-pink-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800">Belum ada pesanan</h3>
                    <p class="text-slate-500 mb-6 text-sm">Riwayat belanjamu masih bersih nih wak.</p>
                    <a href="{{ route('home') }}" class="inline-block bg-pink-600 text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-pink-600/30 hover:bg-pink-700 hover:-translate-y-1 transition">
                        Gas Belanja Dulu! 🚀
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <footer class="mt-auto py-6 text-center text-xs font-bold text-slate-400">
        <p>&copy; {{ date('Y') }} TokoQL. All rights reserved.</p>
    </footer>

</body>
</html>
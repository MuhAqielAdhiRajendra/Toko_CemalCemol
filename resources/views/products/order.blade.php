<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - TokoQL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen">

    <nav class="bg-white shadow-sm border-b border-pink-100 px-6 py-4 flex justify-between items-center sticky top-0 z-40">
        <div class="flex items-center gap-3">
            <div class="bg-pink-600 text-white p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <h1 class="text-xl font-bold text-gray-800">Admin<span class="text-pink-600">Panel</span></h1>
        </div>
        
        <div class="flex gap-4">
            <a href="{{ route('home') }}" class="text-gray-500 hover:text-pink-600 font-medium text-sm flex items-center gap-1">
                Lihat Website ↗
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="text-rose-500 font-bold text-sm hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto p-6 lg:p-10">
        
        <div class="mb-6">
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-pink-600 transition duration-200 font-medium group">
                <div class="bg-white border border-gray-200 p-2 rounded-lg group-hover:border-pink-300 group-hover:bg-pink-50 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 group-hover:-translate-x-1 transition-transform">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </div>
                <span>Kembali ke Dashboard</span>
            </a>
        </div>

        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-8 gap-6">
            <div class="w-full lg:w-auto flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 flex-grow">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Daftar Pesanan</h2>
                    <p class="text-gray-500 text-sm mt-1">Kelola semua pesanan masuk di sini.</p>
                </div>
                
                <form action="{{ route('orders.index') }}" method="GET" class="flex w-full sm:w-auto">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Pelanggan/ID..." class="w-full sm:w-64 border border-gray-200 rounded-l-xl px-4 py-2 focus:ring-2 focus:ring-pink-500 focus:outline-none text-sm">
                    <button type="submit" class="bg-pink-600 text-white px-5 py-2 rounded-r-xl hover:bg-pink-700 font-bold text-sm shadow-sm transition">Cari</button>
                </form>
            </div>
            
            <div class="flex gap-4 w-full lg:w-auto overflow-x-auto pb-2 lg:pb-0 scrollbar-hide">
                <div class="bg-white p-4 rounded-xl shadow-sm border border-pink-100 flex items-center gap-3 shrink-0">
                    <div class="bg-yellow-100 p-2 rounded-lg text-yellow-600"></div>
                    <div>
                        <p class="text-xs text-gray-500 font-bold uppercase">Pending</p>
                        <p class="text-lg font-bold">{{ $orders->where('status', 'pending')->count() }}</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm border border-pink-100 flex items-center gap-3 shrink-0">
                    <div class="bg-green-100 p-2 rounded-lg text-green-600"></div>
                    <div>
                        <p class="text-xs text-gray-500 font-bold uppercase">Lunas</p>
                        <p class="text-lg font-bold">{{ $orders->where('status', '!=', 'pending')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ID & Tgl</th>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Customer</th>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Pembayaran</th>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Total</th>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="p-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($orders as $order)
                        <tr class="hover:bg-pink-50/30 transition duration-150">
                            <td class="p-4">
                                <span class="font-bold text-gray-800">#{{ $order->id }}</span>
                                <div class="text-xs text-gray-400 mt-1">{{ $order->created_at->format('d M Y') }}</div>
                                <div class="text-xs text-gray-400">{{ $order->created_at->format('H:i') }} WIB</div>
                            </td>

                            <td class="p-4">
                                <div class="font-bold text-gray-800">{{ $order->customer_name }}</div>
                                <a href="https://wa.me/{{ $order->customer_phone }}" target="_blank" class="text-xs text-green-600 hover:underline flex items-center gap-1 mt-1">
                                     {{ $order->customer_phone }}
                                </a>
                                <div class="text-xs text-gray-500 mt-1 truncate w-40" title="{{ $order->customer_address }}">
                                     {{ Str::limit($order->customer_address, 30) }}
                                </div>
                            </td>

                            <td class="p-4">
                                @if($order->payment_method == 'cod')
                                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded border border-gray-200 bg-gray-50 text-xs font-semibold text-gray-600">
                                         COD
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded border border-blue-200 bg-blue-50 text-xs font-semibold text-blue-600">
                                         QRIS
                                    </span>
                                    @if($order->payment_proof)
                                        <div class="mt-1 text-[10px] text-green-600"> Ada Bukti</div>
                                    @else
                                        <div class="mt-1 text-[10px] text-red-500"> Belum Upload</div>
                                    @endif
                                @endif
                            </td>

                            <td class="p-4 font-bold text-pink-600">
                                Rp {{ number_format($order->total_price, 0, ',', '.') }}
                            </td>

                            <td class="p-4">
                                @php
                                    $statusColor = match($order->status) {
                                        'pending' => 'bg-yellow-100 text-yellow-700',
                                        'paid' => 'bg-blue-100 text-blue-700',
                                        'dikirim' => 'bg-purple-100 text-purple-700',
                                        'completed' => 'bg-green-100 text-green-700',
                                        'cancelled' => 'bg-red-100 text-red-700',
                                        default => 'bg-gray-100 text-gray-700'
                                    };
                                @endphp
                                <span class="px-3 py-1 rounded-full text-xs font-bold uppercase {{ $statusColor }}">
                                    {{ $order->status }}
                                </span>
                            </td>

                            <td class="p-4 text-center">
                                <button onclick="openModal('modal-{{ $order->id }}')" 
                                        class="bg-pink-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-pink-700 shadow-lg shadow-pink-500/30 transition transform hover:-translate-y-1">
                                    Detail
                                </button>

                                <div id="modal-{{ $order->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto text-left" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal('modal-{{ $order->id }}')"></div>

                                    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                                        <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-4xl border border-pink-100">
                                            
                                            <div class="bg-pink-600 px-6 py-4 flex justify-between items-center rounded-t-2xl">
                                                <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                                    <span>Order #{{ $order->id }}</span>
                                                    <span class="bg-white/20 text-xs px-2 py-1 rounded text-white">{{ strtoupper($order->status) }}</span>
                                                </h3>
                                                <button onclick="closeModal('modal-{{ $order->id }}')" class="text-pink-100 hover:text-white text-2xl font-bold transition">&times;</button>
                                            </div>

                                            <div class="px-6 py-6 bg-gray-50 grid grid-cols-1 md:grid-cols-3 gap-6">
                                                
                                                <div class="md:col-span-2 space-y-6">
                                                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                                                        <h4 class="text-sm font-bold text-gray-500 uppercase mb-3 border-b pb-2">Barang Dipesan</h4>
                                                        <div class="space-y-3">
                                                            @foreach($order->items as $item)
                                                                <div class="flex justify-between items-center text-sm">
                                                                    <div class="flex items-center gap-3">
                                                                        <div class="h-10 w-10 bg-gray-200 rounded overflow-hidden">
                                                                            @if($item->product && $item->product->image)
                                                                                <img src="{{ asset('storage/products/'.$item->product->image) }}" class="h-full w-full object-cover">
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            <div class="font-bold text-gray-800">{{ $item->product->name ?? 'Produk Dihapus' }}</div>
                                                                            <div class="text-xs text-gray-500">{{ $item->quantity }} x Rp {{ number_format($item->price, 0, ',', '.') }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="font-bold text-gray-700">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="mt-4 pt-3 border-t flex justify-between items-center">
                                                            <span class="font-bold text-gray-600">Total Harga</span>
                                                            <span class="font-bold text-xl text-pink-600">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                                                        <h4 class="text-sm font-bold text-gray-500 uppercase mb-3 border-b pb-2">Info Pengiriman</h4>
                                                        <div class="grid grid-cols-2 gap-4 text-sm">
                                                            <div>
                                                                <p class="text-gray-500 text-xs">Penerima</p>
                                                                <p class="font-bold text-gray-800">{{ $order->customer_name }}</p>
                                                                <a href="https://wa.me/{{ $order->customer_phone }}" target="_blank" class="text-green-600 hover:underline text-xs">
                                                                    {{ $order->customer_phone }} (WhatsApp)
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <p class="text-gray-500 text-xs">Alamat</p>
                                                                <p class="text-gray-800 leading-relaxed">{{ $order->customer_address }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-y-6">
                                                    @if($order->payment_method == 'qris')
                                                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                                                        <h4 class="text-sm font-bold text-gray-500 uppercase mb-3 border-b pb-2">Bukti Transfer</h4>
                                                        @if($order->payment_proof)
                                                            <a href="{{ asset('storage/payment_proofs/' . $order->payment_proof) }}" target="_blank">
                                                                <img src="{{ asset('storage/payment_proofs/' . $order->payment_proof) }}" class="w-full rounded border hover:opacity-90 transition cursor-zoom-in" alt="Bukti Transfer">
                                                            </a>
                                                        @else
                                                            <div class="bg-red-50 text-red-500 p-4 rounded text-center text-sm font-bold">Belum upload</div>
                                                        @endif
                                                    </div>
                                                    @else
                                                    <div class="bg-blue-50 p-4 rounded-xl border border-blue-100 text-center">
                                                        <div class="text-4xl mb-2"></div>
                                                        <h4 class="font-bold text-blue-800">COD</h4>
                                                    </div>
                                                    @endif

                                                    <div class="bg-pink-50 p-4 rounded-xl border border-pink-100">
                                                        <h4 class="text-sm font-bold text-gray-700 uppercase mb-3">Update Status</h4>
                                                        <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <select name="status" class="w-full border border-gray-300 rounded-lg p-2.5 mb-3 focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm">
                                                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                                                <option value="dikirim" {{ $order->status == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                                                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            </select>
                                                            <button type="submit" class="w-full bg-pink-600 text-white py-2 rounded-lg font-bold text-sm hover:bg-pink-700 shadow transition">
                                                                Simpan
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="p-10 text-center text-gray-500">
                                Belum ada pesanan masuk.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>

</body>
</html>
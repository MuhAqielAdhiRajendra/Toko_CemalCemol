<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Order #{{ $order->id }} - TokoQL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-3xl rounded-2xl shadow-xl overflow-hidden">
        
        <div class="bg-gradient-to-r from-pink-500 to-rose-500 text-white p-8 flex justify-between items-center relative overflow-hidden">
            <div class="relative z-10">
                <h1 class="text-3xl font-bold tracking-tight">Invoice #{{ $order->id }}</h1>
                <p class="text-pink-100 text-sm mt-1">{{ $order->created_at->format('d F Y, H:i') }} WIB</p>
            </div>
            
            <div class="relative z-10">
                @php
                    $statusColor = match($order->status) {
                        'pending' => 'bg-yellow-400 text-yellow-900',
                        'paid' => 'bg-blue-400 text-blue-900',
                        'dikirim' => 'bg-purple-400 text-purple-900',
                        'completed' => 'bg-green-400 text-green-900',
                        'cancelled' => 'bg-red-400 text-red-900',
                        default => 'bg-gray-400 text-gray-900'
                    };
                @endphp
                <span class="px-4 py-2 rounded-lg font-bold text-sm uppercase shadow-lg {{ $statusColor }}">
                    {{ $order->status }}
                </span>
            </div>

            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
        </div>

        <div class="p-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 pb-8 border-b border-gray-100">
                <div>
                    <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-2">Penerima</h3>
                    <p class="text-xl font-bold text-gray-800">{{ $order->customer_name }}</p>
                    <p class="text-gray-500 text-sm mt-1">{{ Auth::user()->email }}</p>
                    <p class="text-gray-500 text-sm">{{ $order->customer_phone ?? '-' }}</p>
                </div>
                <div>
                    <h3 class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-2">Alamat Pengiriman</h3>
                    <p class="text-gray-600 leading-relaxed bg-gray-50 p-4 rounded-lg border border-gray-100">
                        {{ $order->customer_address }}
                    </p>
                </div>
            </div>

            <h3 class="text-gray-800 font-bold mb-4 flex items-center gap-2">
                ️ Rincian Barang
            </h3>
            
            <div class="space-y-4 mb-8">
                @foreach($order->items as $item)
                    <div class="flex items-center justify-between p-4 bg-white rounded-xl border border-gray-100 hover:border-pink-200 hover:shadow-sm transition duration-200">
                        <div class="flex items-center gap-4">
                            <div class="h-16 w-16 bg-gray-100 rounded-lg overflow-hidden border border-gray-200 flex-shrink-0">
                                @if($item->product && $item->product->image)
                                    <img src="{{ asset('storage/products/'.$item->product->image) }}" class="h-full w-full object-cover">
                                @elseif($item->product && $item->product->preorder && $item->product->preorder->image)
                                    <img src="{{ asset('storage/products/'.$item->product->preorder->image) }}" class="h-full w-full object-cover">
                                @else
                                    <div class="flex items-center justify-center h-full text-gray-300 text-xs">No Img</div>
                                @endif
                            </div>
                            
                            <div>
                                <p class="font-bold text-gray-800 text-lg">{{ $item->product->name ?? 'Produk Dihapus' }}</p>
                                <p class="text-sm text-gray-500">
                                    {{ $item->quantity }} x Rp {{ number_format($item->price, 0, ',', '.') }}
                                </p>
                                
                                @if($item->product && $item->product->preorder)
                                    <span class="inline-block mt-1 text-[10px] bg-pink-100 text-pink-600 px-2 py-0.5 rounded border border-pink-200 font-bold">
                                         Pre-Order
                                    </span>
                                @endif
                            </div>
                        </div>
                        <span class="font-bold text-gray-800 text-lg">
                            Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                        </span>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-6 border-t border-gray-100 gap-4">
                <a href="{{ route('orders.history') }}" class="text-gray-500 hover:text-pink-600 font-medium flex items-center gap-2 transition group">
                    <span class="group-hover:-translate-x-1 transition">←</span> Kembali ke Riwayat
                </a>
                
                <div class="text-right bg-pink-50 p-4 rounded-xl border border-pink-100 w-full md:w-auto">
                    <span class="block text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Total Pembayaran</span>
                    <span class="text-3xl font-bold text-pink-600">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Order #{{ $order->id }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <div>
                <h2 class="text-2xl font-bold">Order #{{ $order->id }}</h2>
                <span class="text-sm text-gray-500">{{ $order->created_at->format('d M Y, H:i') }} WIB</span>
            </div>
            <a href="{{ route('orders.index') }}" class="text-gray-500 hover:text-gray-800">← Kembali</a>
        </div>

       <div class="mb-6 bg-blue-50 p-6 rounded grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <div>
                <h3 class="font-bold text-lg mb-2">Data Pengiriman</h3>
                <p><strong>Nama:</strong> {{ $order->customer_name }}</p>
                <p><strong>Alamat:</strong> {{ $order->customer_address }}</p>
                <p class="mt-2">
                    <strong>Status Saat Ini:</strong> 
                    <span class="px-2 py-1 rounded text-xs font-bold uppercase 
                        {{ $order->status == 'pending' ? 'bg-yellow-200 text-yellow-800' : '' }}
                        {{ $order->status == 'paid' ? 'bg-green-200 text-green-800' : '' }}
                        {{ $order->status == 'dikirim' ? 'bg-blue-200 text-blue-800' : '' }}
                    ">
                        {{ $order->status }}
                    </span>
                </p>
            </div>

            <div class="bg-white p-4 rounded shadow-sm">
                <h3 class="font-bold text-gray-700 mb-2">Ubah Status Pesanan</h3>
                
                <form action="{{ route('orders.update', $order->id) }}" method="POST" class="flex gap-2">
                    @csrf
                    @method('PUT') <select name="status" class="border p-2 rounded w-full">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending (Menunggu Bayar)</option>
                        <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid (Sudah Dibayar)</option>
                        <option value="dikirim" {{ $order->status == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed (Selesai)</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled (Batal)</option>
                    </select>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 font-bold">
                        Update
                    </button>
                </form>
            </div>
            
        </div>

        <h3 class="font-bold mb-3">Rincian Barang:</h3>
        <table class="w-full border mb-6">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 text-left">Produk</th>
                    <th class="p-2 text-center">Qty</th>
                    <th class="p-2 text-right">Harga Satuan</th>
                    <th class="p-2 text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr class="border-b">
                    <td class="p-2">
                        {{ $item->product ? $item->product->name : 'Produk Telah Dihapus' }}
                    </td>
                    <td class="p-2 text-center">{{ $item->quantity }}</td>
                    <td class="p-2 text-right">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td class="p-2 text-right font-bold">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right text-xl font-bold">
            Total Bayar: <span class="text-blue-600">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
        </div>

    </div>

</body>
</html>
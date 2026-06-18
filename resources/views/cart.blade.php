<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - TokoQL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Quicksand', sans-serif; 
            background-color: #fff1f2; 
            background-image: radial-gradient(#fecdd3 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="text-gray-700">

    <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-pink-100 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-pink-500 hover:text-pink-600 transition flex items-center gap-2">
                Cemal<span class="bg-pink-500 text-white px-2 py-1 rounded-xl transform -rotate-2">Cemol</span>
            </a>
            <a href="{{ route('home') }}" class="text-pink-500 hover:text-pink-700 font-bold text-sm bg-pink-50 px-4 py-2 rounded-full border border-pink-100 hover:shadow-md transition">
                ← Jajan Lagi
            </a>
        </div>
    </nav>

    <div class="container mx-auto px-4 md:px-6 py-8 mb-12">
        
        @php
            $cart = session('cart');
            $cartIsEmpty = empty($cart) || count($cart) == 0;
            $total = 0;
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl shadow-xl shadow-pink-100 border border-pink-50 overflow-hidden">
                    <div class="bg-pink-500 px-6 py-4 flex items-center gap-2">
                        <span class="text-2xl"></span>
                        <h2 class="text-lg font-bold text-white">Keranjang Jajanmu</h2>
                    </div>
                    
                    <div class="p-6 overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-pink-400 text-sm uppercase tracking-wider border-b border-pink-100">
                                    <th class="py-3 font-bold">Menu</th>
                                    <th class="py-3 font-bold">Harga</th>
                                    <th class="py-3 font-bold text-center">Qty</th>
                                    <th class="py-3 font-bold">Total</th>
                                    <th class="py-3 font-bold text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-pink-50">
                                @if(!$cartIsEmpty)
                                    @foreach($cart as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        
                                        <tr class="group hover:bg-pink-50/50 transition duration-300">
                                            <td class="py-4">
                                                <div class="flex items-center gap-4">
                                                    <div class="h-16 w-16 bg-gray-100 rounded-2xl overflow-hidden border-2 border-pink-100 shadow-sm group-hover:scale-105 transition">
                                                        @if(isset($details['image']) && $details['image'])
                                                            <img src="{{ asset('storage/products/'.$details['image']) }}" class="h-full w-full object-cover">
                                                        @else
                                                            <div class="h-full w-full flex items-center justify-center text-xs text-gray-300">No Img</div>
                                                        @endif
                                                    </div>
                                                    <div class="font-bold text-gray-700 group-hover:text-pink-600 transition">{{ $details['name'] }}</div>
                                                </div>
                                            </td>
                                            
                                            <td class="py-4 text-sm font-semibold text-gray-500">
                                                Rp {{ number_format($details['price'], 0, ',', '.') }}
                                            </td>
                                            
                                            <td class="py-4 text-center">
                                                <span class="bg-pink-100 text-pink-600 font-bold px-3 py-1 rounded-full text-sm">
                                                    x{{ $details['quantity'] }}
                                                </span>
                                            </td>

                                            <td class="py-4 text-sm font-bold text-pink-600">
                                                Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}
                                            </td>
                                            
                                            <td class="py-4 text-center">
                                                <a href="{{ route('cart.remove', $id) }}" class="text-red-300 hover:text-red-500 hover:bg-red-50 p-2 rounded-xl transition inline-block" title="Buang">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="py-16 text-center">
                                            <div class="flex flex-col items-center animate-pulse">
                                                <div class="bg-pink-50 p-6 rounded-full mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-pink-300">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                    </svg>
                                                </div>
                                                <p class="text-gray-500 font-medium">Wah, keranjangmu masih sepi nih.</p>
                                                <a href="/" class="mt-4 bg-pink-500 text-white px-6 py-2 rounded-full font-bold hover:bg-pink-600 hover:shadow-lg transition transform hover:-translate-y-1">Isi Jajanan Yuk! </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-3xl shadow-xl shadow-pink-100 border border-pink-50 p-6 sticky top-24 {{ $cartIsEmpty ? 'opacity-60 grayscale-[50%]' : '' }}">
                    <div class="flex items-center gap-2 mb-6 border-b border-pink-100 pb-4">
                        <span class="text-2xl"></span>
                        <h2 class="text-xl font-bold text-gray-800">Kirim Kemana?</h2>
                    </div>
                    
                    <form action="{{ route('checkout.process') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <fieldset {{ $cartIsEmpty ? 'disabled' : '' }}>
        
        <div class="mb-4">
            <label class="block text-gray-600 text-sm font-bold mb-2 ml-1">Nama Penerima</label>
            <input type="text" name="name" required 
                class="w-full bg-pink-50 border border-pink-100 text-gray-800 text-sm rounded-xl focus:ring-pink-500 focus:border-pink-500 block p-3 transition disabled:cursor-not-allowed @error('name') border-red-500 ring-red-500 @enderror" 
                value="{{ old('name', Auth::user()->name ?? '') }}" placeholder="Nama kamu...">
            @error('name')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-sm font-bold mb-2 ml-1">WhatsApp</label>
            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="phone" required 
                class="w-full bg-pink-50 border border-pink-100 text-gray-800 text-sm rounded-xl focus:ring-pink-500 focus:border-pink-500 block p-3 transition disabled:cursor-not-allowed @error('phone') border-red-500 ring-red-500 @enderror" 
                value="{{ old('phone') }}"
                placeholder="0812xxxxxxxx" pattern="^08[0-9]{8,11}$" title="Nomor HP harus berawalan 08 dan berisi 10-13 angka">
            @error('phone')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-600 text-sm font-bold mb-2 ml-1">Alamat Lengkap</label>
            <textarea name="address" required rows="3" 
                class="block p-3 w-full text-sm text-gray-800 bg-pink-50 rounded-xl border border-pink-100 focus:ring-pink-500 focus:border-pink-500 disabled:cursor-not-allowed @error('address') border-red-500 ring-red-500 @enderror" 
                placeholder="Jalan, RT/RW, Patokan rumah...">{{ old('address') }}</textarea>
            @error('address')
                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-600 text-sm font-bold mb-2 ml-1">Bayar Pakai Apa?</label>
            
            <div class="grid grid-cols-1 gap-3">
                
                <label class="cursor-pointer">
                    <input type="radio" name="payment_method" value="cod" class="peer sr-only" checked>
                    <div class="rounded-2xl border-2 border-pink-100 bg-white p-3 text-center hover:bg-pink-50 peer-checked:border-pink-500 peer-checked:bg-pink-500 peer-checked:text-white transition shadow-sm cursor-pointer peer-disabled:cursor-not-allowed">
                        <div class="text-xl mb-1"></div>
                        <div class="text-xs font-bold">COD (Tunai)</div>
                        <div class="text-[10px] opacity-80">Bayar pas barang sampai</div>
                    </div>
                </label>

                </div>
        </div>

        <div class="bg-gray-50 p-4 rounded-2xl mb-6 flex justify-between items-center border border-gray-100">
            <span class="text-gray-600 font-bold text-sm">Total Jajan:</span>
            <span class="text-2xl font-black text-pink-600">Rp {{ number_format($total, 0, ',', '.') }}</span>
        </div>

        <button type="submit" 
                @if($cartIsEmpty) disabled @endif
                class="w-full py-4 rounded-2xl font-bold shadow-lg transition flex justify-center items-center gap-2
                {{ $cartIsEmpty 
                    ? 'bg-gray-300 text-gray-500 cursor-not-allowed shadow-none' 
                    : 'bg-gradient-to-r from-pink-500 to-rose-500 text-white hover:from-pink-600 hover:to-rose-600 hover:-translate-y-1 active:scale-95' 
                }}">
            @if($cartIsEmpty)
                <span></span> Isi Keranjang Dulu
            @else
                <span></span> Pesan (COD Only)
            @endif
        </button>

    </fieldset>
</form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function toggleProof(method) {
            const proofContainer = document.getElementById('proof-container');
            const proofInput = document.getElementById('proof-input');

            if (method === 'qris') {
                proofContainer.classList.remove('hidden');
                proofContainer.classList.add('animate-pulse');
                setTimeout(() => proofContainer.classList.remove('animate-pulse'), 1000);
                proofInput.required = true;
            } else {
                proofContainer.classList.add('hidden');
                proofInput.required = false;
                proofInput.value = '';
            }
        }

        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonColor: '#ec4899',
                timer: 3000,
                timerProgressBar: true
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

        @if(session('stock_warning'))
            Swal.fire({
                title: 'Stok Tidak Cukup!',
                text: "Menu {{ session('stock_warning')['name'] }} sisa {{ session('stock_warning')['stock'] }}, ingin memesan sisanya?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ec4899',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Sesuaikan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('cart.adjust', ['id' => session('stock_warning')['id'], 'qty' => session('stock_warning')['stock']]) }}";
                }
            });
        @endif
    </script>
</body>
</html>
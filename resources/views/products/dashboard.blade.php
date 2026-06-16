<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - TokoQL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Quicksand', sans-serif; 
            background-color: #fff1f2; 
            background-image: radial-gradient(#fecdd3 1px, transparent 1px);
            background-size: 20px 20px;
        }
        .animate-fade-in-down { animation: fadeInDown 0.5s ease-out; }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="text-gray-700">

    <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-pink-100 px-6 py-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-br from-pink-500 to-rose-500 text-white p-2.5 rounded-xl shadow-lg shadow-pink-500/30 transform -rotate-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Admin<span class="text-pink-500">Panel</span></h1>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" target="_blank" class="bg-pink-50 text-pink-600 hover:bg-pink-100 font-bold text-sm px-4 py-2 rounded-full border border-pink-100 flex items-center gap-2 transition">
                    <span class="hidden sm:inline">Lihat Toko</span>
                </a>
                <div class="h-8 w-px bg-pink-200"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-rose-400 hover:text-rose-600 font-bold text-sm flex items-center gap-1 transition hover:bg-rose-50 px-3 py-2 rounded-full">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-7xl">
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-3xl mb-8 shadow-sm flex justify-between items-center animate-fade-in-down">
                <div class="flex items-center gap-2 font-bold"><span></span><span>{{ session('success') }}</span></div>
                <button onclick="this.parentElement.style.display='none'" class="text-green-500 hover:text-green-800 font-bold text-xl">&times;</button>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-pink-100 border border-pink-50 flex items-center gap-5 hover:-translate-y-1 transition duration-300">
                <div class="bg-gradient-to-br from-pink-400 to-pink-600 p-4 rounded-2xl text-white shadow-lg shadow-pink-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Jumlah Produk</p>
                    <p class="text-3xl font-black text-gray-800">{{ $products->count() }} <span class="text-sm text-gray-400 font-normal">Item</span></p>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-blue-100 border border-blue-50 flex items-center gap-5 hover:-translate-y-1 transition duration-300">
                <div class="bg-gradient-to-br from-blue-400 to-blue-600 p-4 rounded-2xl text-white shadow-lg shadow-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Pesanan Masuk</p>
                    <p class="text-3xl font-black text-gray-800">{{ $orders->total() }} <span class="text-sm text-gray-400 font-normal">Order</span></p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-xl shadow-green-100 border border-green-50 flex items-center gap-5 hover:-translate-y-1 transition duration-300">
                <div class="bg-gradient-to-br from-green-400 to-emerald-600 p-4 rounded-2xl text-white shadow-lg shadow-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <div>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-wider">Total Nilai Aset</p>
                    <p class="text-3xl font-black text-gray-800 text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-600">
                        <span class="text-sm text-gray-500 font-bold">Rp</span> {{ number_format($products->sum(function($p){ return $p->price * $p->stock; }), 0, ',', '.') }}
                    </p>
                </div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-black text-gray-800 flex items-center gap-2">
                <span class="bg-pink-500 w-2 h-8 rounded-full inline-block"></span>
                Daftar Produk Jualan
            </h2>
            <div class="flex flex-col md:flex-row gap-3 w-full md:w-auto">
                <form action="{{ route('admin.dashboard') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search_product" value="{{ request('search_product') }}" placeholder="Cari Produk..." class="border-pink-200 border rounded-xl px-4 py-2 w-full md:w-48 focus:ring-2 focus:ring-pink-500 focus:outline-none">
                    <button type="submit" class="bg-pink-500 text-white px-5 py-2 rounded-xl hover:bg-pink-600 font-bold shadow-sm transition">Cari</button>
                </form>

                <a href="{{ route('orders.index') }}" class="bg-white border-2 border-pink-100 text-gray-600 hover:text-pink-600 hover:border-pink-300 font-bold py-2.5 px-6 rounded-2xl shadow-sm flex items-center transition gap-2 hover:shadow-md justify-center">
                     <span class="hidden sm:inline">Cek Pesanan</span>
                </a>
                <button onclick="openModal('create-product-modal')" class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white font-bold py-2.5 px-6 rounded-2xl shadow-lg shadow-pink-500/30 flex items-center transition transform hover:-translate-y-1 gap-2 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    Tambah Produk
                </button>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-pink-50/50 border border-pink-100 overflow-hidden mb-12">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-pink-500 text-white">
                        <tr>
                            <th class="py-5 px-6 text-xs font-bold uppercase w-16 text-center rounded-tl-3xl">No</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase w-24">Gambar</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase">Nama Produk</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase text-center">Status</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase text-center">Stok</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase text-center">Harga</th>
                            <th class="py-5 px-6 text-xs font-bold uppercase text-center rounded-tr-3xl">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-pink-50">
                        @forelse($products as $key => $product)
                            <tr class="hover:bg-pink-50/60 transition duration-200">
                                <td class="py-4 px-6 text-center text-gray-500 font-bold">{{ $key + 1 }}</td>
                                <td class="py-4 px-6">
                                    <div class="h-14 w-14 rounded-2xl bg-gray-100 border-2 border-pink-50 overflow-hidden shadow-sm">
                                        @if($product->image) <img src="{{ asset('storage/products/'.$product->image) }}" class="h-full w-full object-cover">
                                        @else <div class="flex items-center justify-center h-full text-gray-300 text-[10px] font-bold">No Img</div> @endif
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="font-bold text-gray-800 text-lg">{{ $product->name }}</p>
                                    <p class="text-xs text-gray-400 truncate w-48">{{ Str::limit($product->description, 40) }}</p>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    @php $po = $product->preorder; $today = date('Y-m-d'); @endphp
                                    @if($po)
                                        @if($today < $po->start_date) <span class="bg-purple-100 text-purple-700 text-xs font-bold px-3 py-1 rounded-full border border-purple-200"> Soon</span>
                                        @elseif($today >= $po->start_date && $today <= $po->end_date) <span class="bg-pink-100 text-pink-600 text-xs font-bold px-3 py-1 rounded-full border border-pink-200 animate-pulse"> Open PO</span>
                                        @else <span class="bg-gray-200 text-gray-500 text-xs font-bold px-3 py-1 rounded-full border border-gray-300"> Closed</span>
                                        @endif
                                    @else <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full border border-green-200"> Ready</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <span class="font-black text-lg {{ $product->stock == 0 ? 'text-red-500' : 'text-gray-700' }}">{{ number_format($product->stock, 0, ',', '.') }}</span>
                                </td>
                                <td class="py-4 px-6 text-center font-bold text-gray-700">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="openModal('edit-modal-{{ $product->id }}')" class="bg-blue-50 text-blue-600 p-2.5 rounded-xl hover:bg-blue-500 hover:text-white transition shadow-sm border border-blue-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                                        <form onsubmit="return confirm('Yakin hapus?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="bg-rose-50 text-rose-500 p-2.5 rounded-xl hover:bg-rose-500 hover:text-white transition shadow-sm border border-rose-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                                        </form>
                                    </div>
                                    
                                    <div id="edit-modal-{{ $product->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto text-left" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal('edit-modal-{{ $product->id }}')"></div>
                                        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                                            <div class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl border border-pink-100">
                                                <div class="bg-blue-500 px-6 py-4 flex justify-between items-center rounded-t-3xl"><h3 class="text-lg font-bold text-white">Edit Produk</h3><button onclick="closeModal('edit-modal-{{ $product->id }}')" class="text-white hover:text-blue-100 text-2xl font-bold transition">&times;</button></div>
                                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-6 bg-gray-50">
                                                    @csrf @method('PUT')
                                                    <div class="grid grid-cols-1 gap-4">
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div><label class="block text-sm font-bold mb-1 text-gray-600">Nama Produk</label><input type="text" name="name" value="{{ $product->name }}" class="w-full border-gray-200 rounded-xl p-3 focus:ring-blue-500" required></div>
                                                            <div><label class="block text-sm font-bold mb-1 text-gray-600">Harga (Rp)</label><input type="number" name="price" value="{{ $product->price }}" class="w-full border-gray-200 rounded-xl p-3 focus:ring-blue-500" required></div>
                                                        </div>
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div><label class="block text-sm font-bold mb-1 text-gray-600">Stok</label><input type="number" name="stock" value="{{ $product->stock }}" class="w-full border-gray-200 rounded-xl p-3 focus:ring-blue-500" required></div>
                                                            <div><label class="block text-sm font-bold mb-1 text-gray-600">Ganti Gambar</label><input type="file" name="image" class="w-full border border-gray-200 rounded-xl p-2 text-sm bg-white text-gray-500"></div>
                                                        </div>
                                                        <div><label class="block text-sm font-bold mb-1 text-gray-600">Label</label>
                                                            <select name="badge" class="w-full border-gray-200 rounded-xl p-3 bg-white">
                                                                <option value="">-- Kosong --</option>
                                                                <option value="Best Seller" {{ $product->badge == 'Best Seller' ? 'selected' : '' }}> Best Seller</option>
                                                                <option value="Termurah" {{ $product->badge == 'Termurah' ? 'selected' : '' }}> Termurah</option>
                                                            </select>
                                                        </div>
                                                        <div><label class="block text-sm font-bold mb-1 text-gray-600">Deskripsi</label><textarea name="description" rows="2" class="w-full border-gray-200 rounded-xl p-3" required>{{ $product->description }}</textarea></div>
                                                        
                                                        <div class="bg-yellow-50 p-4 rounded-xl border border-yellow-200">
                                                            <label class="inline-flex items-center cursor-pointer"><input type="checkbox" name="is_preorder" value="1" class="form-checkbox h-5 w-5 text-blue-600 rounded-lg" {{ $product->preorder ? 'checked' : '' }} onclick="togglePO('edit-po-{{ $product->id }}')"><span class="ml-2 text-gray-700 font-bold text-sm">Aktifkan Pre-Order?</span></label>
                                                            <div id="edit-po-{{ $product->id }}" class="{{ $product->preorder ? '' : 'hidden' }} mt-3 grid grid-cols-3 gap-2">
                                                                <div><label class="text-xs font-bold text-gray-500">Mulai</label><input type="date" name="po_start" value="{{ $product->preorder->start_date ?? '' }}" class="w-full border-gray-200 p-2 rounded-lg text-xs"></div>
                                                                <div><label class="text-xs font-bold text-gray-500">Selesai</label><input type="date" name="po_end" value="{{ $product->preorder->end_date ?? '' }}" class="w-full border-gray-200 p-2 rounded-lg text-xs"></div>
                                                                <div><label class="text-xs font-bold text-gray-500">Kirim</label><input type="date" name="delivery_date" value="{{ $product->preorder->delivery_date ?? '' }}" class="w-full border-gray-200 p-2 rounded-lg text-xs"></div>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold hover:bg-blue-700 shadow-lg shadow-blue-500/30 transition transform hover:-translate-y-1">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="8" class="py-12 text-center text-gray-500 font-medium">Belum ada produk jualan. Yuk tambah!</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4 mt-16">
            <h2 class="text-2xl font-black text-gray-800 flex items-center gap-2">
                <span class="bg-yellow-500 w-2 h-8 rounded-full inline-block"></span>
                Daftar Menu Spesial
            </h2>
            <div class="flex flex-col md:flex-row gap-3 w-full md:w-auto">
                <form action="{{ route('admin.dashboard') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search_menu" value="{{ request('search_menu') }}" placeholder="Cari Menu..." class="border-yellow-200 border rounded-xl px-4 py-2 w-full md:w-48 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    <button type="submit" class="bg-yellow-400 text-white px-5 py-2 rounded-xl hover:bg-yellow-500 font-bold shadow-sm transition">Cari</button>
                </form>

                <button onclick="openModal('create-menu-modal')" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2.5 px-6 rounded-2xl shadow-lg shadow-yellow-400/30 flex items-center gap-2 transition transform hover:-translate-y-1 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                    Tambah Menu
                </button>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-yellow-50/50 border border-yellow-100 overflow-hidden mb-12">
            <table class="w-full text-left border-collapse">
                <thead class="bg-yellow-400 text-white">
                    <tr>
                        <th class="py-5 px-6 text-xs font-bold uppercase w-16 text-center rounded-tl-3xl">No</th>
                        <th class="py-5 px-6 text-xs font-bold uppercase w-24">Gambar</th>
                        <th class="py-5 px-6 text-xs font-bold uppercase">Nama Menu</th>
                        <th class="py-5 px-6 text-xs font-bold uppercase text-center">Label</th>
                        <th class="py-5 px-6 text-xs font-bold uppercase text-center">Harga</th>
                        <th class="py-5 px-6 text-xs font-bold uppercase text-center rounded-tr-3xl">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-yellow-50">
                    @forelse($menus ?? [] as $key => $menu)
                        <tr class="hover:bg-yellow-50/40 transition duration-200">
                            <td class="py-4 px-6 text-center text-gray-500 font-bold">{{ $key + 1 }}</td>
                            <td class="py-4 px-6">
                                <div class="h-14 w-14 rounded-2xl bg-gray-100 border-2 border-yellow-50 overflow-hidden shadow-sm">
                                    <img src="{{ asset('storage/menus/'.$menu->image) }}" class="h-full w-full object-cover">
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-bold text-gray-800 text-lg">{{ $menu->name }}</p>
                                <p class="text-xs text-gray-400 truncate w-48">{{ Str::limit($menu->description, 30) }}</p>
                            </td>
                            <td class="py-4 px-6 text-center">
                                @if($menu->badge) <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-3 py-1 rounded-full border border-yellow-200">{{ $menu->badge }}</span>
                                @else <span class="text-gray-300">-</span> @endif
                            </td>
                            <td class="py-4 px-6 text-center font-bold text-yellow-600">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                            <td class="py-4 px-6 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button onclick="openModal('edit-menu-{{ $menu->id }}')" class="bg-blue-50 text-blue-600 p-2.5 rounded-xl hover:bg-blue-500 hover:text-white transition shadow-sm border border-blue-100" title="Edit Menu"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>

                                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin hapus menu ini?');">
                                        @csrf @method('DELETE')
                                        <button class="bg-red-50 text-red-500 p-2.5 rounded-xl hover:bg-red-500 hover:text-white transition shadow-sm border border-red-100" title="Hapus"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                                    </form>
                                </div>

                                <div id="edit-menu-{{ $menu->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto text-left" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal('edit-menu-{{ $menu->id }}')"></div>
                                    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                                        <div class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-xl border border-yellow-100">
                                            <div class="bg-yellow-400 px-6 py-4 flex justify-between items-center rounded-t-3xl"><h3 class="text-lg font-bold text-white">Edit Menu Spesial</h3><button onclick="closeModal('edit-menu-{{ $menu->id }}')" class="text-white hover:text-yellow-100 text-2xl font-bold transition">&times;</button></div>
                                            <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-6 bg-gray-50">
                                                @csrf @method('PUT')
                                                <div class="grid grid-cols-1 gap-4">
                                                    <div><label class="block text-sm font-bold mb-1 text-gray-600">Nama Menu</label><input type="text" name="name" value="{{ $menu->name }}" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400" required></div>
                                                    <div class="grid grid-cols-2 gap-4">
                                                        <div><label class="block text-sm font-bold mb-1 text-gray-600">Harga (Rp)</label><input type="number" name="price" value="{{ $menu->price }}" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400" required></div>
                                                        <div><label class="block text-sm font-bold mb-1 text-gray-600">Label</label>
                                                            <select name="badge" class="w-full border-gray-200 rounded-xl p-3 bg-white focus:ring-yellow-400">
                                                                <option value="">-- Kosong --</option>
                                                                <option value="Best Seller" {{ $menu->badge == 'Best Seller' ? 'selected' : '' }}> Best Seller</option>
                                                                <option value="Recommended" {{ $menu->badge == 'Recommended' ? 'selected' : '' }}> Recommended</option>
                                                                <option value="Pedas" {{ $menu->badge == 'Pedas' ? 'selected' : '' }}>Pedas</option>
                                                                <option value="Manis" {{ $menu->badge == 'Manis' ? 'selected' : '' }}>Manis</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div><label class="block text-sm font-bold mb-1 text-gray-600">Deskripsi</label><textarea name="description" rows="2" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400">{{ $menu->description }}</textarea></div>
                                                    <div><label class="block text-sm font-bold mb-1 text-gray-600">Ganti Gambar</label><input type="file" name="image" class="w-full border border-gray-200 rounded-xl p-2 text-sm bg-white text-gray-500"></div>
                                                    <button type="submit" class="w-full bg-yellow-400 text-white py-3 rounded-xl font-bold hover:bg-yellow-500 shadow-lg shadow-yellow-400/30 transition transform hover:-translate-y-1">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="py-12 text-center text-gray-500 font-medium">Belum ada menu spesial.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <div id="create-product-modal" class="fixed inset-0 z-50 hidden overflow-y-auto text-left" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal('create-product-modal')"></div>
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl border border-pink-100">
                <div class="bg-pink-500 px-6 py-4 flex justify-between items-center rounded-t-3xl"><h3 class="text-lg font-bold text-white">Tambah Produk Jualan</h3><button onclick="closeModal('create-product-modal')" class="text-pink-100 hover:text-white text-2xl font-bold transition">&times;</button></div>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="px-6 py-6 bg-gray-50">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div><label class="block text-gray-600 text-sm font-bold mb-1">Nama Produk</label><input type="text" name="name" class="w-full border-gray-200 rounded-xl p-3 focus:ring-pink-500 focus:border-pink-500 transition" required></div>
                            <div><label class="block text-gray-600 text-sm font-bold mb-1">Harga (Rp)</label><input type="number" name="price" class="w-full border-gray-200 rounded-xl p-3 focus:ring-pink-500 focus:border-pink-500 transition" required></div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label class="block text-gray-600 text-sm font-bold mb-1">Stok</label><input type="number" name="stock" class="w-full border-gray-200 rounded-xl p-3 focus:ring-pink-500 focus:border-pink-500 transition" required></div>
                            <div><label class="block text-gray-600 text-sm font-bold mb-1">Gambar</label><input type="file" name="image" class="w-full border border-gray-200 rounded-xl p-2 bg-white text-sm text-gray-500" required></div>
                        </div>
                        <div><label class="block text-gray-600 text-sm font-bold mb-1">Label (Opsional)</label>
                            <select name="badge" class="w-full border-gray-200 rounded-xl p-3 bg-white focus:ring-pink-500">
                                <option value="">-- Kosong --</option>
                                <option value="Best Seller"> Best Seller</option>
                                <option value="Termurah"> Termurah</option>
                            </select>
                        </div>
                        <div><label class="block text-gray-600 text-sm font-bold mb-1">Deskripsi</label><textarea name="description" rows="3" class="w-full border-gray-200 rounded-xl p-3 focus:ring-pink-500" required></textarea></div>
                        
                        <div class="bg-yellow-50 p-4 rounded-xl border border-yellow-200">
                            <label class="inline-flex items-center cursor-pointer"><input type="checkbox" name="is_preorder" value="1" class="form-checkbox h-5 w-5 text-pink-500 rounded-lg" onclick="togglePO('create-po-dates')"><span class="ml-2 text-gray-700 font-bold">Aktifkan Pre-Order?</span></label>
                            <div id="create-po-dates" class="hidden mt-3 grid grid-cols-1 md:grid-cols-3 gap-3 animate-fade-in-down">
                                <div><label class="block text-gray-500 text-xs font-bold mb-1">Mulai PO</label><input type="date" name="po_start" class="w-full border-gray-200 p-2 rounded-lg text-sm focus:ring-pink-500"></div>
                                <div><label class="block text-gray-500 text-xs font-bold mb-1">Tutup PO</label><input type="date" name="po_end" class="w-full border-gray-200 p-2 rounded-lg text-sm focus:ring-pink-500"></div>
                                <div><label class="block text-gray-500 text-xs font-bold mb-1">Est. Kirim</label><input type="date" name="delivery_date" class="w-full border-gray-200 p-2 rounded-lg text-sm focus:ring-pink-500"></div>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-rose-500 text-white py-3 rounded-xl font-bold hover:from-pink-600 hover:to-rose-600 shadow-lg shadow-pink-500/30 transition transform hover:-translate-y-1"> Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="create-menu-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-hidden="true">
        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm" onclick="closeModal('create-menu-modal')"></div>
        <div class="flex min-h-full items-center justify-center p-4">
            <div class="relative bg-white rounded-3xl shadow-xl w-full max-w-lg border border-yellow-100 animate-fade-in-down">
                <div class="bg-yellow-400 px-6 py-4 flex justify-between items-center rounded-t-3xl"><h3 class="text-lg font-bold text-white">Tambah Menu Baru</h3><button onclick="closeModal('create-menu-modal')" class="text-white text-2xl hover:text-yellow-100 font-bold transition">&times;</button></div>
                <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" class="p-6 bg-gray-50">
                    @csrf
                    <div class="space-y-4">
                        <div><label class="font-bold text-sm text-gray-600">Nama Menu</label><input type="text" name="name" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400" required></div>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label class="font-bold text-sm text-gray-600">Harga (Rp)</label><input type="number" name="price" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400" required></div>
                            <div><label class="font-bold text-sm text-gray-600">Label (Opsional)</label>
                                <select name="badge" class="w-full border-gray-200 rounded-xl p-3 bg-white focus:ring-yellow-400">
                                    <option value="">-- Kosong --</option>
                                    <option value="Best Seller"> Best Seller</option>
                                    <option value="Recommended"> Recommended</option>
                                    <option value="Pedas">Pedas</option>
                                    <option value="Manis">Manis</option>
                                </select>
                            </div>
                        </div>
                        <div><label class="font-bold text-sm text-gray-600">Deskripsi</label><textarea name="description" class="w-full border-gray-200 rounded-xl p-3 focus:ring-yellow-400" rows="2"></textarea></div>
                        <div><label class="font-bold text-sm text-gray-600">Gambar Menu</label><input type="file" name="image" class="w-full border border-gray-200 rounded-xl p-2 text-sm text-gray-500 bg-white" required></div>
                        <button type="submit" class="w-full bg-yellow-400 text-white font-bold py-3 rounded-xl hover:bg-yellow-500 transition shadow-lg shadow-yellow-400/30 transform hover:-translate-y-1">Simpan Menu</button>
                    </div>
                </form>
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
        function togglePO(elementId) {
            const container = document.getElementById(elementId);
            container.classList.toggle('hidden');
        }
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - CemalCemol.</title>
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
                        base: '#fdf2f8', 
                        surface: '#FFFFFF',
                        primary: '#db2777', 
                        secondary: '#6b7280', 
                        border: '#fbcfe8', 
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
        body { font-family: 'Inter', sans-serif; background-color: #fdf2f8; color: #db2777; line-height: 1.6; }
        h1, h2, h3, h4, h5, h6, .font-serif { font-family: 'Newsreader', serif; }
    </style>
</head>
<body class="bg-base text-primary min-h-screen flex flex-col antialiased selection:bg-primary selection:text-white">

    <nav class="w-full bg-surface/90 backdrop-blur-md sticky top-0 z-50 border-b border-border">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 py-4 flex justify-between items-center h-20">
            <a href="/" class="text-xl font-serif font-medium tracking-tight text-primary">
                CemalCemol.
            </a>
            <a href="{{ route('home') }}" class="text-xs font-medium text-secondary hover:text-primary transition-colors border border-border px-4 py-2 rounded-md hover:bg-base">
                &larr; Back to store
            </a>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-8 mb-12 flex-grow w-full">
        
        @php
            $cart = session('cart');
            $cartIsEmpty = empty($cart) || count($cart) == 0;
            $total = 0;
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-surface rounded-lg shadow-sm border border-border overflow-hidden">
                    <div class="border-b border-border px-6 py-4">
                        <h2 class="text-lg font-serif font-medium text-primary">Your Cart</h2>
                    </div>
                    
                    <div class="p-6 overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-secondary text-xs uppercase tracking-wider border-b border-border">
                                    <th class="py-3 font-medium">Item</th>
                                    <th class="py-3 font-medium">Price</th>
                                    <th class="py-3 font-medium text-center">Qty</th>
                                    <th class="py-3 font-medium text-right">Total</th>
                                    <th class="py-3 font-medium text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-border">
                                @if(!$cartIsEmpty)
                                    @foreach($cart as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        
                                        <tr class="group transition duration-300">
                                            <td class="py-4">
                                                <div class="flex items-center gap-4">
                                                    <div class="h-12 w-12 bg-base rounded border border-border overflow-hidden">
                                                        @if(isset($details['image']) && $details['image'])
                                                            <img src="{{ asset('storage/products/'.$details['image']) }}" class="h-full w-full object-cover">
                                                        @else
                                                            <div class="h-full w-full flex items-center justify-center text-[10px] text-secondary">No Img</div>
                                                        @endif
                                                    </div>
                                                    <div class="font-medium text-primary">{{ $details['name'] }}</div>
                                                </div>
                                            </td>
                                            
                                            <td class="py-4 text-sm font-mono text-secondary">
                                                Rp {{ number_format($details['price'], 0, ',', '.') }}
                                            </td>
                                            
                                            <td class="py-4 text-center">
                                                <span class="bg-base border border-border text-primary px-3 py-1 rounded text-xs font-mono">
                                                    x{{ $details['quantity'] }}
                                                </span>
                                            </td>

                                            <td class="py-4 text-sm font-mono text-primary font-medium text-right">
                                                Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}
                                            </td>
                                            
                                            <td class="py-4 text-center">
                                                <a href="{{ route('cart.remove', $id) }}" class="text-secondary hover:text-pastel-red-text transition inline-block text-sm" title="Remove">
                                                    Remove
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="py-16 text-center border-t border-border">
                                            <div class="flex flex-col items-center">
                                                <p class="text-secondary font-medium mb-4 text-sm">Your cart is currently empty.</p>
                                                <a href="/" class="bg-surface border border-border text-primary px-6 py-2 rounded-md font-medium hover:bg-base transition-colors text-sm">Explore Menu</a>
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
                <div class="bg-surface rounded-lg shadow-sm border border-border p-6 sticky top-24 {{ $cartIsEmpty ? 'opacity-50 grayscale' : '' }}">
                    <div class="border-b border-border pb-4 mb-6">
                        <h2 class="text-lg font-serif font-medium text-primary">Checkout Details</h2>
                    </div>
                    
                    <form action="{{ route('checkout.process') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <fieldset {{ $cartIsEmpty ? 'disabled' : '' }}>
        
        <div class="mb-4">
            <label class="block text-secondary text-xs uppercase tracking-wider font-medium mb-2">Recipient Name</label>
            <input type="text" name="name" required 
                class="w-full bg-surface border border-border text-primary text-sm rounded-md focus:border-primary focus:outline-none block p-2.5 transition disabled:cursor-not-allowed @error('name') border-pastel-red-text @enderror" 
                value="{{ old('name', Auth::user()->name ?? '') }}" placeholder="Full name">
            @error('name')
                <p class="text-pastel-red-text text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-secondary text-xs uppercase tracking-wider font-medium mb-2">WhatsApp</label>
            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="phone" required 
                class="w-full bg-surface border border-border text-primary text-sm rounded-md focus:border-primary focus:outline-none block p-2.5 transition disabled:cursor-not-allowed @error('phone') border-pastel-red-text @enderror" 
                value="{{ old('phone') }}"
                placeholder="0812xxxxxxxx" pattern="^08[0-9]{8,11}$" title="Nomor HP harus berawalan 08 dan berisi 10-13 angka">
            @error('phone')
                <p class="text-pastel-red-text text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-secondary text-xs uppercase tracking-wider font-medium mb-2">Address</label>
            <textarea name="address" required rows="3" 
                class="w-full bg-surface border border-border text-primary text-sm rounded-md focus:border-primary focus:outline-none block p-2.5 transition disabled:cursor-not-allowed @error('address') border-pastel-red-text @enderror" 
                placeholder="Full delivery address...">{{ old('address') }}</textarea>
            @error('address')
                <p class="text-pastel-red-text text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-secondary text-xs uppercase tracking-wider font-medium mb-2">Payment Method</label>
            
            <div class="grid grid-cols-1 gap-3">
                <label class="cursor-pointer">
                    <input type="radio" name="payment_method" value="cod" class="peer sr-only" checked>
                    <div class="rounded-md border border-border bg-surface p-3 text-center peer-checked:border-primary peer-checked:bg-base peer-checked:text-primary transition disabled:cursor-not-allowed">
                        <div class="text-sm font-medium">Cash on Delivery</div>
                        <div class="text-xs text-secondary mt-1">Pay upon arrival</div>
                    </div>
                </label>
            </div>
        </div>

        <div class="bg-base border border-border p-4 rounded-md mb-6 flex justify-between items-center">
            <span class="text-secondary font-medium text-sm">Total</span>
            <span class="text-xl font-serif font-medium text-primary">Rp {{ number_format($total, 0, ',', '.') }}</span>
        </div>

        <button type="submit" 
                @if($cartIsEmpty) disabled @endif
                class="w-full py-3 rounded-md font-medium transition-all flex justify-center items-center gap-2
                {{ $cartIsEmpty 
                    ? 'bg-base text-secondary cursor-not-allowed border border-border' 
                    : 'bg-primary text-white hover:bg-black active:scale-[0.98]' 
                }}">
            @if($cartIsEmpty)
                Cart is Empty
            @else
                Place Order (COD)
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

        @if(session('stock_warning'))
            Swal.fire({
                title: 'Stock Limited',
                text: "Menu {{ session('stock_warning')['name'] }} only has {{ session('stock_warning')['stock'] }} left, want to adjust to maximum available?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#db2777',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, adjust it',
                cancelButtonText: 'Cancel',
                customClass: {
                    popup: 'border border-border rounded-lg shadow-sm',
                    title: 'text-primary font-serif',
                    htmlContainer: 'text-secondary text-sm'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('cart.adjust', ['id' => session('stock_warning')['id'], 'qty' => session('stock_warning')['stock']]) }}";
                }
            });
        @endif
    </script>
</body>
</html>
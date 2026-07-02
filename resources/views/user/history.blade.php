<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan - CemalCemol.</title>
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

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-8 mt-12 flex-grow w-full">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-serif text-primary tracking-tight">Order History</h1>
                <p class="text-secondary mt-1 text-sm font-medium">Keep track of your purchases.</p>
            </div>
            <div class="bg-surface px-4 py-2 rounded-md border border-border text-xs uppercase tracking-wider font-medium text-secondary flex items-center gap-2">
                <span>Total Orders:</span>
                <span class="bg-base border border-border text-primary px-2 py-0.5 rounded">{{ $orders->count() }}</span>
            </div>
        </div>

        <div class="space-y-6">
            @forelse($orders as $order)
                @php
                    $statusColor = match($order->status) {
                        'pending' => 'bg-pastel-yellow-bg text-pastel-yellow-text border-pastel-yellow-bg',
                        'paid' => 'bg-pastel-blue-bg text-pastel-blue-text border-pastel-blue-bg',
                        'dikirim' => 'bg-pastel-blue-bg text-pastel-blue-text border-pastel-blue-bg',
                        'completed' => 'bg-pastel-green-bg text-pastel-green-text border-pastel-green-bg',
                        'cancelled' => 'bg-pastel-red-bg text-pastel-red-text border-pastel-red-bg',
                        default => 'bg-base text-secondary border-border'
                    };
                    $statusLabel = match($order->status) {
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'dikirim' => 'Shipped',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                        default => 'Unknown'
                    };
                @endphp

                <div class="bg-surface rounded-lg border border-border p-5 hover:border-primary transition-colors duration-300 relative overflow-hidden group">
                    <div class="flex flex-col md:flex-row justify-between md:items-center gap-6 relative z-10">
                        <div class="flex items-start gap-4">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                   <span class="font-medium text-primary text-sm uppercase tracking-wider">Order #{{ $order->id }}</span>
                                    <span class="px-2 py-0.5 rounded text-[10px] uppercase tracking-wider border {{ $statusColor }}">
                                        {{ $statusLabel }}
                                    </span>
                                </div>
                                <p class="text-xs text-secondary font-mono">
                                     {{ $order->created_at->format('d M Y, H:i') }} WIB
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-row md:flex-col lg:flex-row items-center justify-between md:justify-end gap-4 md:gap-8 w-full md:w-auto border-t md:border-t-0 border-border pt-4 md:pt-0 mt-2 md:mt-0">
                            <div class="text-left md:text-right">
                                <p class="text-[10px] text-secondary uppercase tracking-widest mb-1">Total Amount</p>
                                <p class="text-lg font-mono text-primary font-medium">Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
                            </div>

                            <a href="{{ route('orders.history.detail', $order->id) }}" class="bg-surface text-secondary hover:text-primary hover:bg-base border border-border text-xs uppercase tracking-wider px-4 py-2 rounded transition flex items-center gap-2">
                                <span>View Details</span>
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="text-center py-20 bg-surface rounded-lg border border-border">
                    <p class="text-secondary font-medium mb-6 text-sm">No order history found.</p>
                    <a href="{{ route('home') }}" class="inline-block bg-primary text-white font-medium py-2 px-6 rounded-md hover:bg-black transition-colors">
                        Start Shopping
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <footer class="mt-auto py-6 border-t border-border">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-xs text-secondary font-mono tracking-wider">&copy; {{ date('Y') }} CemalCemol. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
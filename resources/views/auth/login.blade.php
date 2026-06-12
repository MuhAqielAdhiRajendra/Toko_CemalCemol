<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" placeholder="user@toko.com" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" placeholder="********" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 font-bold transition">
                MASUK
            </button>
        </form>

        <div class="mt-4 text-center border-t pt-4">
            <p class="text-sm text-gray-600">Belum punya akun?</p>
            <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline">Daftar Sekarang</a>
        </div>

        <div class="mt-2 text-center">
            <a href="/" class="text-sm text-gray-500 hover:text-gray-300">← Kembali ke Toko</a>
        </div>
    </div>

</body>
</html>
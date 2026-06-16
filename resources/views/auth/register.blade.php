<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-pink-50 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl border border-pink-100 w-96">
        <div class="text-center mb-6">
            <a href="/" class="inline-flex items-center gap-2 text-2xl font-bold text-pink-500 hover:text-pink-600 transition mb-4">
                Cemal<span class="bg-pink-500 text-white px-2 py-1 rounded-xl transform -rotate-2">Cemol</span>
            </a>
            <h2 class="text-xl font-bold text-gray-800">Daftar Akun Baru</h2>
        </div>
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 text-sm">Nama Lengkap</label>
                <input type="text" name="name" class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-500 transition" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 text-sm">Email</label>
                <input type="email" name="email" class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-500 transition" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 text-sm">Password</label>
                <input type="password" name="password" class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-500 transition" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 text-sm">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-pink-500 transition" required>
            </div>

            <div class="mb-6 flex justify-center">
                <div class="g-recaptcha" data-sitekey="{{ config('recaptcha.site_key') }}" data-callback="enableBtn" data-expired-callback="disableBtn"></div>
            </div>

            <button type="submit" id="submitBtn" disabled class="w-full bg-pink-600 text-white p-2.5 rounded-full hover:bg-pink-700 font-bold shadow-md shadow-pink-500/30 transition-transform active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-pink-600 disabled:active:scale-100">
                DAFTAR
            </button>
        </form>

        <script>
            function enableBtn() { document.getElementById('submitBtn').disabled = false; }
            function disableBtn() { document.getElementById('submitBtn').disabled = true; }
        </script>

        <div class="mt-6 text-center border-t border-pink-100 pt-4">
            <p class="text-sm text-gray-600 mb-1">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="text-pink-600 font-bold hover:text-pink-700 hover:underline transition">Login di sini</a>
        </div>
    </div>

</body>
</html>
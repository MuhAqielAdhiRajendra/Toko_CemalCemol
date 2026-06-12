<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">📝 Daftar Akun</h2>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="block text-gray-700 font-bold mb-1">Nama Lengkap</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" required>
            </div>

            <div class="mb-3">
                <label class="block text-gray-700 font-bold mb-1">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" required>
            </div>

            <div class="mb-3">
                <label class="block text-gray-700 font-bold mb-1">Password</label>
                <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border border-gray-300 rounded focus:outline-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700 font-bold transition">
                DAFTAR
            </button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline">Login di sini</a>
        </div>
    </div>

</body>
</html>
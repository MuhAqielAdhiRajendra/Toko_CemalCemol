<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CemalCemol.</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
<body class="bg-base h-screen flex justify-center items-center selection:bg-primary selection:text-white">

    <div class="bg-surface p-8 rounded-lg shadow-sm border border-border w-96">
        <div class="text-center mb-6">
            <a href="/" class="inline-block text-2xl font-serif font-medium tracking-tight text-primary mb-2">
                CemalCemol.
            </a>
            <h2 class="text-lg font-medium text-primary">Sign in to your account</h2>
        </div>

        @if($errors->any())
            <div class="bg-pastel-red-bg text-pastel-red-text p-3 rounded mb-4 text-sm text-center border border-pastel-red-bg">
                {{ $errors->first() }}
            </div>
        @endif

        @if(session('success'))
            <div class="bg-pastel-green-bg text-pastel-green-text p-3 rounded mb-4 text-sm text-center border border-pastel-green-bg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-secondary font-medium mb-2 text-xs uppercase tracking-wider">Email</label>
                <input type="email" name="email" class="w-full p-2.5 bg-surface text-primary border border-border rounded-md focus:outline-none focus:border-primary transition" placeholder="you@example.com" required>
            </div>

            <div class="mb-6">
                <label class="block text-secondary font-medium mb-2 text-xs uppercase tracking-wider">Password</label>
                <input type="password" name="password" class="w-full p-2.5 bg-surface text-primary border border-border rounded-md focus:outline-none focus:border-primary transition" placeholder="••••••••" required>
            </div>

            <div class="mb-6 flex justify-center">
                <div class="g-recaptcha" data-sitekey="{{ config('recaptcha.site_key') }}" data-callback="enableBtn" data-expired-callback="disableBtn"></div>
            </div>

            <button type="submit" id="submitBtn" disabled class="w-full bg-primary text-white p-2.5 rounded hover:bg-black font-medium transition-all active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-primary">
                Sign In
            </button>
        </form>

        <script>
            function enableBtn() { document.getElementById('submitBtn').disabled = false; }
            function disableBtn() { document.getElementById('submitBtn').disabled = true; }
        </script>

        <div class="mt-6 text-center border-t border-border pt-4">
            <p class="text-xs text-secondary mb-1">Don't have an account?</p>
            <a href="{{ route('register') }}" class="text-primary font-medium hover:text-black transition">Create Account</a>
        </div>

        <div class="mt-4 text-center">
            <a href="/" class="text-xs text-secondary hover:text-primary transition">&larr; Back to store</a>
        </div>
    </div>

</body>
</html>
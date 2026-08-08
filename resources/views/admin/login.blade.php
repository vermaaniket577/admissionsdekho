<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AdmissionsDekho Control Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">

    <!-- Login Card -->
    <div class="w-full max-w-md bg-white/95 backdrop-blur-xl border border-slate-200 rounded-3xl p-8 shadow-2xl relative overflow-hidden">
        
        <!-- Background Orbs -->
        <div class="absolute -top-24 -left-24 w-48 h-48 bg-blue-400/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-indigo-400/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10">
            <!-- Brand Header -->
            <div class="text-center mb-8">
                <img src="{{ asset('/images/brand-logo.png') }}" alt="AdmissionsDekho Logo" class="h-16 w-auto object-contain mx-auto mb-3">
                <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Admin Panel Authentication</p>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-2xl text-red-700 text-xs font-semibold">
                    {{ $errors->first() }}
                </div>
            @endif

            <!-- Session Status -->
            @if (session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-2xl text-emerald-800 text-xs font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', 'admin@admissionsdekho.com') }}" required autofocus
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl px-4 py-3 text-sm outline-none transition">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Password</label>
                    <input type="password" name="password" required placeholder="••••••••"
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl px-4 py-3 text-sm outline-none transition">
                </div>

                <div class="flex items-center justify-between text-xs text-slate-600 font-semibold">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-white border-slate-300 text-blue-600 focus:ring-0">
                        <span>Remember Me</span>
                    </label>
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold py-3.5 px-4 rounded-xl shadow-lg shadow-blue-600/20 transition-all text-sm flex items-center justify-center gap-2">
                    <span>Sign In to Dashboard</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>

            <div class="mt-8 text-center text-xs text-slate-500 font-medium border-t border-slate-100 pt-4">
                Default Credentials: <span class="text-slate-800 font-bold">admin@admissionsdekho.com</span> / <span class="text-slate-800 font-bold">password123</span>
            </div>
        </div>
    </div>

</body>
</html>

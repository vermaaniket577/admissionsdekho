<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AdmissionsDekho Control Panel</title>
    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}?v={{ @filemtime(public_path('favicon-32x32.png')) ?? '1' }}">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}?v={{ @filemtime(public_path('favicon.png')) ?? '1' }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}?v={{ @filemtime(public_path('favicon.ico')) ?? '1' }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}?v={{ @filemtime(public_path('apple-touch-icon.png')) ?? '1' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">

    <!-- Login Card -->
    <div x-data="{ showPassword: false, loading: false }" class="w-full max-w-md bg-white/95 backdrop-blur-xl border border-slate-200 rounded-3xl p-8 shadow-2xl relative overflow-hidden">
        
        <!-- Full-Card Submitting Loader Overlay -->
        <div x-show="loading" x-transition
             class="absolute inset-0 bg-white/90 backdrop-blur-md z-50 flex flex-col items-center justify-center space-y-3 rounded-3xl"
             style="display: none;">
            <div class="relative w-16 h-16 flex items-center justify-center">
                <div class="absolute inset-0 rounded-full border-4 border-blue-100 border-t-blue-600 border-r-indigo-600 animate-spin"></div>
                <img src="{{ asset('/images/brand-logo.png') }}" class="h-6 w-auto object-contain animate-pulse">
            </div>
            <div class="text-center">
                <p class="text-xs font-extrabold text-slate-900 tracking-wider uppercase">Authenticating Access</p>
                <p class="text-[11px] text-slate-500 mt-0.5">Redirecting to admin control panel...</p>
            </div>
        </div>

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
            <form action="{{ route('admin.login.submit') }}" method="POST" @submit="loading = true" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', 'admin@admissionsdekho.com') }}" required autofocus
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl px-4 py-3 text-sm outline-none transition">
                </div>

                <!-- Password Input with Show/Hide Toggle -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">Password</label>
                        <button type="button" @click="showPassword = !showPassword" class="text-xs text-blue-600 hover:text-blue-700 font-semibold focus:outline-none flex items-center gap-1">
                            <span x-text="showPassword ? 'Hide Password' : 'Show Password'">Show Password</span>
                        </button>
                    </div>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" required placeholder="••••••••"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-4 pr-12 py-3 text-sm outline-none transition">
                        <button type="button" @click="showPassword = !showPassword"
                                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-700 p-1 transition focus:outline-none"
                                :title="showPassword ? 'Hide Password' : 'Show Password'">
                            <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.02 10.02 0 011.758-.58M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs text-slate-600 font-semibold">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-white border-slate-300 text-blue-600 focus:ring-0">
                        <span>Remember Me</span>
                    </label>
                </div>

                <button type="submit" :disabled="loading"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold py-3.5 px-4 rounded-xl shadow-lg shadow-blue-600/20 transition-all text-sm flex items-center justify-center gap-2 disabled:opacity-75">
                    <svg x-show="loading" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" style="display:none;">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span x-show="!loading">Sign In to Dashboard</span>
                    <span x-show="loading" style="display:none;">Signing In...</span>
                    <svg x-show="!loading" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>

            <div class="mt-8 text-center text-xs text-slate-500 font-medium border-t border-slate-100 pt-4">
                Default Credentials: <span class="text-slate-800 font-bold">admin@admissionsdekho.com</span> / <span class="text-slate-800 font-bold">password123</span>
            </div>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register — {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-2 mb-8">
            <div class="w-9 h-9 rounded-lg bg-gray-900 text-white flex items-center justify-center">
                <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                </svg>
            </div>
            <span class="text-lg font-extrabold tracking-tight">{{ config('app.name', 'ShopMini') }}</span>
        </a>

        {{-- Card --}}
        <div class="w-full max-w-sm">

            <div class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 shadow-sm">

                <div class="mb-6">
                    <h1 class="text-xl font-extrabold tracking-tight">Create your account</h1>
                    <p class="text-sm text-gray-500 mt-1">Start shopping in just a few seconds.</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1.5">Name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="Juan Dela Cruz">
                        <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
                    </div>

                    {{-- Email --}}
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1.5">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="you@example.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                    </div>

                    {{-- Password --}}
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-1.5">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1.5">Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold py-2.5 rounded-xl transition-colors">
                        Create Account
                    </button>

                </form>

            </div>

            {{-- Footer Link --}}
            <p class="text-center text-sm text-gray-500 mt-5">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:underline">Log in</a>
            </p>

        </div>

    </div>

</body>

</html>
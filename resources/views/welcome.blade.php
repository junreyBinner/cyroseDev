<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white text-gray-900">

    {{-- ══════════════════════════════════════ --}}
    {{-- NAVBAR --}}
    {{-- ══════════════════════════════════════ --}}
    <nav class="fixed top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

            {{-- Logo / Brand --}}
            <a href="/" class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-gray-900 text-white flex items-center justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg>
                </div>
                <span class="text-lg font-extrabold tracking-tight">{{ config('app.name', 'ShopMini') }}</span>
            </a>

            {{-- Auth Links --}}
            <div class="flex items-center gap-3">
                @auth
                <a href="/dashboard" class="text-sm font-semibold text-gray-900 hover:text-gray-600 transition-colors">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="text-sm font-semibold text-gray-600 hover:text-gray-900 transition-colors px-4 py-2">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                    class="text-sm font-semibold text-white bg-gray-900 hover:bg-gray-800 px-4 py-2 rounded-xl transition-colors">
                    Register
                </a>
                @endauth
            </div>

        </div>
    </nav>

    {{-- ══════════════════════════════════════ --}}
    {{-- HERO SECTION --}}
    {{-- ══════════════════════════════════════ --}}
    <section class="pt-32 pb-20 sm:pt-40 sm:pb-28 px-4">
        <div class="max-w-3xl mx-auto text-center">

            <span class="inline-block text-xs font-semibold tracking-widest uppercase text-amber-700 bg-amber-50 px-3 py-1.5 rounded-full mb-6">
                Welcome to our store
            </span>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6">
                Shop smarter,
                <span class="text-amber-600">not harder.</span>
            </h1>

            <p class="text-lg text-gray-500 leading-relaxed max-w-xl mx-auto mb-10">
                Discover quality products at great prices. Fast checkout, easy tracking, and a seamless shopping experience — all in one place.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                    Get Started
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 font-semibold px-6 py-3 rounded-xl border border-gray-200 hover:border-gray-300 transition-all text-sm">
                    Browse Products
                </a>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════ --}}
    {{-- FEATURES --}}
    {{-- ══════════════════════════════════════ --}}
    <section class="py-20 bg-gray-50/70 border-t border-gray-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-14">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight mb-3">Why shop with us?</h2>
                <p class="text-gray-500 text-sm max-w-md mx-auto">Simple, reliable, and built for a smooth shopping experience.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                {{-- Feature 1 --}}
                <div class="bg-white border border-gray-200 rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Easy Browsing</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Find what you need quickly with our clean and organized product catalog.</p>
                </div>

                {{-- Feature 2 --}}
                <div class="bg-white border border-gray-200 rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Fast Checkout</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Add to cart and checkout in seconds. No complicated steps, just simple and quick.</p>
                </div>

                {{-- Feature 3 --}}
                <div class="bg-white border border-gray-200 rounded-2xl p-6">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Order Tracking</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Stay updated on your orders with real-time status tracking from your dashboard.</p>
                </div>

            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════ --}}
    {{-- CTA --}}
    {{-- ══════════════════════════════════════ --}}
    <section class="py-20 px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight mb-3">Ready to start shopping?</h2>
            <p class="text-gray-500 text-sm mb-8">Create your free account and explore our products today.</p>
            <a href="{{ route('register') }}"
                class="inline-flex items-center gap-2 bg-amber-600 hover:bg-amber-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors text-sm">
                Create Account
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </section>

    {{-- ══════════════════════════════════════ --}}
    {{-- FOOTER --}}
    {{-- ══════════════════════════════════════ --}}
    <footer class="border-t border-gray-100 py-8 px-4">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} {{ config('app.name', 'ShopMini') }}. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="text-xs text-gray-400 hover:text-gray-600 transition-colors">Log in</a>
                <a href="{{ route('register') }}" class="text-xs text-gray-400 hover:text-gray-600 transition-colors">Register</a>
            </div>
        </div>
    </footer>

</body>

</html>
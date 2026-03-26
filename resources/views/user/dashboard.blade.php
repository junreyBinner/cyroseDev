<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Greeting Section --}}
        <div class="mb-10">
            <span class="inline-block text-xs font-semibold tracking-widest uppercase text-amber-700 bg-amber-50 px-3 py-1.5 rounded-full mb-4">
                Dashboard
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">
                Welcome back, <span class="text-amber-600">{{ auth()->user()->name }}</span>
            </h1>
            <p class="mt-2 text-gray-500 text-base">
                Here's what's happening with your account today.
            </p>
        </div>

        {{-- Quick Actions --}}
        <p class="text-xs font-semibold tracking-widest uppercase text-gray-400 mb-4">Quick Actions</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">

            {{-- Browse Products --}}
            <a href="/products"
                class="group relative bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">Browse Products</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Explore our latest collections and discover new items.</p>
                <span class="absolute top-6 right-6 text-gray-300 group-hover:text-gray-500 group-hover:translate-x-1 transition-all duration-300 text-xl">&rarr;</span>
            </a>

            {{-- My Cart --}}
            <a href="/cart"
                class="group relative bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-5 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">My Cart</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Review your selected items and proceed to checkout.</p>
                <span class="absolute top-6 right-6 text-gray-300 group-hover:text-gray-500 group-hover:translate-x-1 transition-all duration-300 text-xl">&rarr;</span>
            </a>

            {{-- My Orders --}}
            <a href="/my-orders"
                class="group relative bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center mb-5 group-hover:bg-violet-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">My Orders</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Track deliveries and view your complete order history.</p>
                <span class="absolute top-6 right-6 text-gray-300 group-hover:text-gray-500 group-hover:translate-x-1 transition-all duration-300 text-xl">&rarr;</span>
            </a>

        </div>

    </div>

</x-app-layout>
<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Header --}}
        <div class="mb-8">
            <span class="inline-block text-xs font-semibold tracking-widest uppercase text-amber-700 bg-amber-50 px-3 py-1.5 rounded-full mb-4">
                Admin Panel
            </span>
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                Dashboard
            </h1>
            <p class="mt-1 text-gray-500 text-sm">Overview of your store.</p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">

            {{-- Total Products --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-gray-900">{{ $products }}</p>
                <p class="text-sm text-gray-500 mt-1 mb-4">Total Products</p>
                <a href="{{ route('admin.products.create') }}"
                    class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-600 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-lg transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Add Product
                </a>
            </div>

            {{-- Total Orders --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6">
                <div class="w-10 h-10 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-gray-900">{{ $orders }}</p>
                <p class="text-sm text-gray-500 mt-1 mb-4">Total Orders</p>
                <a href="{{ route('admin.orders') }}"
                    class="inline-flex items-center gap-1.5 text-xs font-semibold text-violet-600 hover:text-violet-700 bg-violet-50 hover:bg-violet-100 px-3 py-1.5 rounded-lg transition-colors">
                    View Orders
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- Total Users --}}
            <div class="bg-white border border-gray-200 rounded-2xl p-6">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <p class="text-3xl font-extrabold text-gray-900">{{ $users }}</p>
                <p class="text-sm text-gray-500 mt-1">Total Users</p>
            </div>

        </div>

    </div>

</x-app-layout>
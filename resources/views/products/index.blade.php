<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <a href="/dashboard" class="inline-flex items-center gap-1.5 text-sm text-gray-400 hover:text-gray-600 transition-colors mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 19l-7-7 7-7" />
            </svg>
            Back to Dashboard
        </a>

        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-6">
            Products
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            @foreach($products as $product)

            <div class="bg-white border border-gray-200 rounded-2xl p-5 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">

                <div class="w-10 h-10 rounded-xl bg-violet-50 text-violet-500 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                    </svg>
                </div>

                <h2 class="font-bold text-gray-900 mb-1">
                    {{ $product->name }}
                </h2>

                <p class="text-lg font-bold text-amber-600 mb-4">
                    ₱{{ number_format($product->price, 2) }}
                </p>

                <a href="/products/{{ $product->id }}"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-violet-600 hover:text-violet-700 transition-colors">
                    View Details
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" />
                    </svg>
                </a>

            </div>

            @endforeach

        </div>

    </div>

</x-app-layout>
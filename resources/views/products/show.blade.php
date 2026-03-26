<x-app-layout>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <a href="/products" class="inline-flex items-center gap-1.5 text-sm text-gray-400 hover:text-gray-600 transition-colors mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 19l-7-7 7-7" />
            </svg>
            Back to Products
        </a>

        <div class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8">

            <div class="w-12 h-12 rounded-xl bg-violet-50 text-violet-500 flex items-center justify-center mb-5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                </svg>
            </div>

            <h1 class="text-2xl font-extrabold text-gray-900 mb-3">
                {{ $product->name }}
            </h1>

            <p class="text-gray-500 leading-relaxed mb-6">
                {{ $product->description }}
            </p>

            <div class="flex items-center justify-between border-t border-gray-100 pt-6">

                <p class="text-2xl font-bold text-amber-600">
                    ₱{{ number_format($product->price, 2) }}
                </p>

                <form method="POST" action="/cart/add">

                    @csrf

                    <input type="hidden"
                        name="product_id"
                        value="{{ $product->id }}">

                    <button class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                        Add to Cart
                    </button>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
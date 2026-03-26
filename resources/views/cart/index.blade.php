<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <a href="/dashboard" class="inline-flex items-center gap-1.5 text-sm text-gray-400 hover:text-gray-600 transition-colors mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 19l-7-7 7-7" />
            </svg>
            Back to Dashboard
        </a>

        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-6">
            My Cart
        </h1>

        @if($carts->count())

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full text-sm">

                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/60 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        <th class="px-6 py-3">Product</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3">Qty</th>
                        <th class="px-6 py-3 text-right">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @foreach($carts as $cart)

                    <tr class="hover:bg-gray-50/50 transition-colors">

                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $cart->product->name }}
                        </td>

                        <td class="px-6 py-4 text-gray-600">
                            ₱{{ number_format($cart->product->price, 2) }}
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center justify-center bg-gray-100 text-gray-700 text-xs font-semibold w-8 h-8 rounded-lg">
                                {{ $cart->quantity }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="/cart/remove/{{ $cart->id }}"
                                class="inline-flex items-center gap-1.5 text-xs font-semibold text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M18 6L6 18M6 6l12 12" />
                                </svg>
                                Remove
                            </a>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <form method="POST" action="/checkout" class="mt-4 flex justify-end">

            @csrf

            <button class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold px-6 py-2.5 rounded-xl transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" />
                </svg>
                Checkout
            </button>

        </form>

        @else

        <div class="bg-white border border-gray-200 rounded-2xl p-12 text-center">
            <div class="w-14 h-14 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <circle cx="9" cy="21" r="1" />
                    <circle cx="20" cy="21" r="1" />
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Your cart is empty</h3>
            <p class="text-sm text-gray-500 mb-5">Browse products to add items to your cart.</p>
            <a href="/products" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                Browse Products
            </a>
        </div>

        @endif

    </div>

</x-app-layout>
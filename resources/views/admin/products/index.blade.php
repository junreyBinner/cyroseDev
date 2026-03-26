<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Header --}}
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Product Management</h1>
                <p class="mt-1 text-sm text-gray-500">{{ $products->count() }} {{ Str::plural('product', $products->count()) }} listed</p>
            </div>
            <a href="{{ route('admin.products.create') }}"
                class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                Add Product
            </a>
        </div>

        {{-- Table --}}
        @if($products->count())

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/60 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        <th class="px-6 py-3">Product</th>
                        <th class="px-6 py-3">Price</th>
                        <th class="px-6 py-3">Stock</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($products as $product)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-gray-600">₱{{ number_format($product->price, 2) }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center text-xs font-semibold px-2.5 py-1 rounded-full
                                {{ $product->stock > 10 ? 'bg-emerald-50 text-emerald-700' : ($product->stock > 0 ? 'bg-amber-50 text-amber-700' : 'bg-red-50 text-red-600') }}">
                                {{ $product->stock }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @else

        <div class="bg-white border border-gray-200 rounded-2xl p-12 text-center">
            <div class="w-14 h-14 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">No products yet</h3>
            <p class="text-sm text-gray-500 mb-5">Add your first product to get started.</p>
            <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                Add Product
            </a>
        </div>

        @endif

    </div>

</x-app-layout>
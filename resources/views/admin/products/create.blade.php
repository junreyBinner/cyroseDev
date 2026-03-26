<x-app-layout>

    <div class="max-w-lg mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Back Link --}}
        <a href="{{ route('admin.products') }}" class="inline-flex items-center gap-1.5 text-sm text-gray-400 hover:text-gray-600 transition-colors mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 19l-7-7 7-7" />
            </svg>
            Back to Products
        </a>

        <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-6">
            Add Product
        </h1>

        <div class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8">

            <form method="POST" action="{{ route('admin.products.store') }}">

                @csrf

                {{-- Product Name --}}
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1.5">Product Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                        placeholder="e.g. Wireless Earbuds">
                    @error('name')
                    <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="mb-4">
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-1.5">Description</label>
                    <textarea id="description" name="description" rows="3"
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400 resize-none"
                        placeholder="Brief product description...">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Price & Stock --}}
                <div class="grid grid-cols-2 gap-4 mb-6">

                    <div>
                        <label for="price" class="block text-sm font-semibold text-gray-700 mb-1.5">Price (₱)</label>
                        <input id="price" type="number" name="price" step="0.01" value="{{ old('price') }}"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="0.00">
                        @error('price')
                        <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="stock" class="block text-sm font-semibold text-gray-700 mb-1.5">Stock</label>
                        <input id="stock" type="number" name="stock" value="{{ old('stock') }}"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition placeholder:text-gray-400"
                            placeholder="0">
                        @error('stock')
                        <p class="text-xs text-red-600 mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-gray-900 hover:bg-gray-800 text-white text-sm font-semibold py-2.5 rounded-xl transition-colors">
                    Save Product
                </button>

            </form>

        </div>

    </div>

</x-app-layout>
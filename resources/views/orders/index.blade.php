<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Page Header --}}
        <div class="mb-8">
            <a href="/dashboard" class="inline-flex items-center gap-1.5 text-sm text-gray-400 hover:text-gray-600 transition-colors mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15 19l-7-7 7-7" />
                </svg>
                Back to Dashboard
            </a>
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                My Orders
            </h1>
            <p class="mt-1 text-gray-500 text-sm">
                Showing {{ $orders->count() }} {{ Str::plural('order', $orders->count()) }}
            </p>
        </div>

        {{-- Orders List --}}
        @forelse($orders as $order)

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden mb-4 hover:shadow-md transition-shadow duration-300">

            {{-- Order Header --}}
            <div class="flex flex-wrap items-center justify-between gap-4 px-6 py-4 border-b border-gray-100 bg-gray-50/60">

                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-gray-900">Order #{{ $order->id }}</h2>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    {{-- Status Badge --}}
                    @php
                    $statusStyles = [
                    'pending' => 'bg-amber-50 text-amber-700',
                    'processing' => 'bg-blue-50 text-blue-700',
                    'shipped' => 'bg-indigo-50 text-indigo-700',
                    'delivered' => 'bg-emerald-50 text-emerald-700',
                    'cancelled' => 'bg-red-50 text-red-600',
                    ];
                    $style = $statusStyles[strtolower($order->status)] ?? 'bg-gray-100 text-gray-600';
                    @endphp
                    <span class="inline-flex items-center gap-1.5 text-xs font-semibold px-3 py-1 rounded-full {{ $style }}">
                        <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                        {{ ucfirst($order->status) }}
                    </span>

                    {{-- Total --}}
                    <span class="text-sm font-bold text-gray-900">
                        ₱{{ number_format($order->total_price, 2) }}
                    </span>
                </div>

            </div>

            {{-- Order Items --}}
            <div class="divide-y divide-gray-100">
                @foreach($order->items as $item)
                <div class="flex items-center justify-between px-6 py-3.5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-gray-100 text-gray-400 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-800">{{ $item->product->name }}</span>
                    </div>
                    <span class="text-xs font-semibold text-gray-400 bg-gray-50 px-2.5 py-1 rounded-full">
                        × {{ $item->quantity }}
                    </span>
                </div>
                @endforeach
            </div>

        </div>

        @empty

        {{-- Empty State --}}
        <div class="bg-white border border-gray-200 rounded-2xl p-12 text-center">
            <div class="w-16 h-16 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">No orders yet</h3>
            <p class="text-sm text-gray-500 mb-6">Start shopping to see your orders here.</p>
            <a href="/products" class="inline-flex items-center gap-2 bg-violet-600 hover:bg-violet-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
                Browse Products
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        @endforelse

    </div>

</x-app-layout>
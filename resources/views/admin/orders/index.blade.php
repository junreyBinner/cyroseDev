<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- Header --}}
        <div class="mb-6">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Orders</h1>
            <p class="mt-1 text-sm text-gray-500">{{ $orders->count() }} {{ Str::plural('order', $orders->count()) }} total</p>
        </div>

        {{-- Table --}}
        @if($orders->count())

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-100 bg-gray-50/60 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        <th class="px-6 py-3">Order ID</th>
                        <th class="px-6 py-3">Customer</th>
                        <th class="px-6 py-3">Total</th>
                        <th class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($orders as $order)
                    <tr class="hover:bg-gray-50/50 transition-colors">

                        <td class="px-6 py-4 font-bold text-gray-900">#{{ $order->id }}</td>

                        <td class="px-6 py-4 text-gray-700">{{ $order->user->name }}</td>

                        <td class="px-6 py-4 font-semibold text-gray-900">₱{{ number_format($order->total_price, 2) }}</td>

                        <td class="px-6 py-4">
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
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">No orders yet</h3>
            <p class="text-sm text-gray-500">Orders will appear here once customers start purchasing.</p>
        </div>

        @endif

    </div>

</x-app-layout>
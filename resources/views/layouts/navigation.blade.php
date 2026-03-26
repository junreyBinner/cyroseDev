<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex items-center space-x-4">
                <!-- Logo -->
                <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}"
                    class="text-xl font-bold text-gray-700">
                    Mini E-Commerce
                </a>

                <!-- Nav Links -->
                @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.products') }}" class="text-gray-600 hover:text-gray-900">
                    Products
                </a>
                <a href="{{ route('admin.orders') }}" class="text-gray-600 hover:text-gray-900">
                    Orders
                </a>
                @else
                <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-900">
                    Products
                </a>
                <a href="{{ route('cart.index') }}" class="text-gray-600 hover:text-gray-900">
                    Cart
                </a>
                <a href="{{ route('orders.my') }}" class="text-gray-600 hover:text-gray-900">
                    My Orders
                </a>
                @endif
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:text-gray-700">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger for Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if(auth()->user()->role === 'admin')
            <x-responsive-nav-link :href="route('admin.dashboard')">Dashboard</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.products')">Products</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.orders')">Orders</x-responsive-nav-link>
            @else
            <x-responsive-nav-link :href="route('dashboard')">Dashboard</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products.index')">Products</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('cart.index')">Cart</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('orders.my')">My Orders</x-responsive-nav-link>
            @endif
        </div>
    </div>
</nav>
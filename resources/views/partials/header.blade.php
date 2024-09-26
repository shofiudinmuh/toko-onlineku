<!-- Header -->
<header class="bg-gray-dark sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Left section: Logo -->
        <a href="{{ '/' }}" class="flex items-center">
            <div>
                <img src="{{ asset('assets/images/template-white-logo.png') }}" alt="Logo" class="h-14 w-auto mr-4">
            </div>
        </a>

        <!-- Hamburger menu (for mobile) -->
        <div class="flex lg:hidden">
            <button id="hamburger" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Center section: Menu -->
        <nav class="hidden lg:flex md:flex-grow justify-center">
            <ul class="flex justify-center space-x-4 text-white">
                <li><a href="{{ '/' }}" class="hover:text-secondary font-semibold">Home</a></li>

                <!-- Men Dropdown -->
                <li class="relative group" x-data="{ open: false }">
                    <a href="{{ '/shop' }}" @mouseover="open = true" @mouseleave="open = false"
                        class="hover:text-secondary font-semibold flex items-center">
                        Men
                        <i :class="open ? 'fas fa-chevron-up ml-1 text-xs' : 'fas fa-chevron-down ml-1 text-xs'"></i>
                    </a>
                    <ul x-show="open" @mouseover="open = true" @mouseleave="open = false"
                        class="absolute left-0 bg-white text-black space-y-2 mt-1 p-2 rounded shadow-lg"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Men Item
                                1</a></li>
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Men Item
                                2</a></li>
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Men Item
                                3</a></li>
                    </ul>
                </li>

                <!-- Women Dropdown -->
                <li class="relative group" x-data="{ open: false }">
                    <a href="{{ 'shop' }}" @mouseover="open = true" @mouseleave="open = false" href="#"
                        class="hover:text-secondary font-semibold flex items-center">
                        Women
                        <i :class="open ? 'fas fa-chevron-up ml-1 text-xs' : 'fas fa-chevron-down ml-1 text-xs'"></i>
                    </a>
                    <ul x-show="open" @mouseover="open = true" @mouseleave="open = false"
                        class="absolute left-0 bg-white text-black space-y-2 mt-1 p-2 rounded shadow-lg"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Women
                                Item
                                1</a></li>
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Women
                                Item
                                2</a></li>
                        <li><a href="shop.html"
                                class="min-w-40 block px-4 py-2 hover:bg-primary hover:text-white rounded">Women
                                Item
                                3</a></li>
                    </ul>
                </li>

                <li><a href="{{ 'shop' }}" class="hover:text-secondary font-semibold">Shop</a></li>
                <li><a href="{{ 'product' }}" class="hover:text-secondary font-semibold">Product</a></li>
                <li><a href="{{ 'cart' }}" class="hover:text-secondary font-semibold">Cart</a></li>
            </ul>
        </nav>

        <!-- Right section: Buttons (for desktop) -->
        <div class="hidden lg:flex items-center space-x-4 relative">
            <a href="{{ 'register' }}"
                class="bg-primary border border-primary hover:bg-transparent text-white hover:text-primary font-semibold px-4 py-2 rounded-full inline-block">Register</a>
            <a href="{{ 'login' }}"
                class="bg-primary border border-primary hover:bg-transparent text-white hover:text-primary font-semibold px-4 py-2 rounded-full inline-block">Login</a>
            <div class="relative group cart-wrapper">
                <a href="{{ 'cart' }}">
                    <img src="{{ asset('assets/images/cart-shopping.svg') }}" alt="Cart"
                        class="h-6 w-6 group-hover:scale-120">
                </a>
                <!-- Cart dropdown -->
                <div class="absolute right-0 mt-1 w-80 bg-white shadow-lg p-4 rounded hidden group-hover:block">
                    <div class="space-y-4">
                        <!-- product item -->
                        <div class="flex items-center justify-between pb-4 border-b border-gray-line">
                            <div class="flex items-center">
                                <img src="{{ asset('/assets/images/single-product/1.jpg') }}" alt="Product"
                                    class="h-12 w-12 object-cover rounded mr-2">
                                <div>
                                    <p class="font-semibold">Summer black dress</p>
                                    <p class="text-sm">Quantity: 1</p>
                                </div>
                            </div>
                            <p class="font-semibold">$25.00</p>
                        </div>
                        <!-- product item -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ asset('/assets/images/single-product/2.jpg') }}" alt="Product"
                                    class="h-12 w-12 object-cover rounded mr-2">
                                <div>
                                    <p class="font-semibold">Black suit</p>
                                    <p class="text-sm">Quantity: 1</p>
                                </div>
                            </div>
                            <p class="font-semibold">$125.00</p>
                        </div>
                    </div>
                    <a href="/cart.html"
                        class="block text-center mt-4 border border-primary bg-primary hover:bg-transparent text-white hover:text-primary py-2 rounded-full font-semibold">Go
                        to Cart</a>
                </div>
            </div>
            <a id="search-icon" href="javascript:void(0);" class="text-white hover:text-secondary group">
                <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search"
                    class="h-6 w-6 transition-transform transform group-hover:scale-120">
            </a>
            <!-- Search field -->
            <div id="search-field" class="hidden absolute top-full right-0 mt-2 w-full bg-white shadow-lg p-2 rounded">
                <input type="text" class="w-full p-2 border border-gray-300 rounded"
                    placeholder="Search for products...">
            </div>
        </div>
    </div>
</header>
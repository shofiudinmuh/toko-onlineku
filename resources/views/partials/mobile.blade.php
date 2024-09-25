<!-- Mobile menu -->
<nav id="mobile-menu-placeholder" class="mobile-menu hidden flex flex-col items-center space-y-8 lg:hidden">
    <ul class="w-full">
        <li><a href="{{ '/' }}" class="hover:text-secondary font-bold block py-2">Home</a></li>

        <!-- Men Dropdown -->
        <li class="relative group" x-data="{ open: false }">
            <a @click="open = !open; $event.preventDefault()"
                class="hover:text-secondary font-bold block py-2 flex justify-center items-center cursor-pointer">
                <span>Men</span>
                <span @click.stop="open = !open">
                    <i :class="open ? 'fas fa-chevron-up text-xs ml-2' : 'fas fa-chevron-down text-xs ml-2'"></i>
                </span>
            </a>
            <ul class="mobile-dropdown-menu" x-show="open" x-transition class="space-y-2">
                <li><a href="shop.html" class="hover:text-secondary font-bold block pt-2 pb-3">Shop Men</a></li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Men item
                        1</a>
                </li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Men item
                        2</a>
                </li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Men item
                        3</a>
                </li>
            </ul>
        </li>

        <!-- Women Dropdown -->
        <li class="relative group" x-data="{ open: false }">
            <a @click="open = !open; $event.preventDefault()"
                class="hover:text-secondary font-bold block py-2 flex justify-center items-center cursor-pointer">
                <span>Women</span>
                <span @click.stop="open = !open">
                    <i :class="open ? 'fas fa-chevron-up text-xs ml-2' : 'fas fa-chevron-down text-xs ml-2'"></i>
                </span>
            </a>
            <ul class="mobile-dropdown-menu" x-show="open" x-transition class="pl-4 space-y-2">
                <li><a href="shop.html" class="hover:text-secondary font-bold block py-2">Shop Women</a></li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Women item
                        1</a></li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Women item
                        2</a></li>
                <li><a href="single-product-page.html" class="hover:text-secondary font-bold block py-2">Women item
                        3</a></li>
            </ul>
        </li>

        <li><a href="shop.html" class="hover:text-secondary font-bold block py-2">Shop</a></li>
        <li><a href="{{ '/product' }}" class="hover:text-secondary font-bold block py-2">Product</a></li>
        <li><a href="checkout.html" class="hover:text-secondary font-bold block py-2">Checkout</a></li>
    </ul>
    <div class="flex flex-col mt-6 space-y-2 items-center">
        <a href="register.html"
            class="bg-primary hover:bg-transparent text-white hover:text-primary border border-primary font-semibold px-4 py-2 rounded-full inline-block flex items-center justify-center min-w-[110px]">Register</a>
        <a href="register.html"
            class="bg-primary hover:bg-transparent text-white hover:text-primary border border-primary font-semibold px-4 py-2 rounded-full inline-block flex items-center justify-center min-w-[110px]">Login</a>
        <a href="register.html"
            class="bg-primary hover:bg-transparent text-white hover:text-primary border border-primary font-semibold px-4 py-2 rounded-full inline-block flex items-center justify-center min-w-[110px]">Cart
            -&nbsp;<span>5</span>&nbsp;items</a>
    </div>
    <!-- Search field -->
    <div class="  top-full right-0 mt-2 w-full bg-white shadow-lg p-2 rounded">
        <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Search for products...">
    </div>
</nav>
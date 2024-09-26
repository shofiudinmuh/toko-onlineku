<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ 'node_modules/swiper/swiper-bundle.css' }}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7">
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
                            <i
                                :class="open ? 'fas fa-chevron-up ml-1 text-xs' : 'fas fa-chevron-down ml-1 text-xs'"></i>
                        </a>
                        <ul x-show="open" @mouseover="open = true" @mouseleave="open = false"
                            class="absolute left-0 bg-white text-black space-y-2 mt-1 p-2 rounded shadow-lg"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
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
                            <i
                                :class="open ? 'fas fa-chevron-up ml-1 text-xs' : 'fas fa-chevron-down ml-1 text-xs'"></i>
                        </a>
                        <ul x-show="open" @mouseover="open = true" @mouseleave="open = false"
                            class="absolute left-0 bg-white text-black space-y-2 mt-1 p-2 rounded shadow-lg"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
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
                        <a href="{{ 'cart' }}"
                            class="block text-center mt-4 border border-primary bg-primary hover:bg-transparent text-white hover:text-primary py-2 rounded-full font-semibold">Go
                            to Cart</a>
                    </div>
                </div>
                <a id="search-icon" href="javascript:void(0);" class="text-white hover:text-secondary group">
                    <img src="{{ asset('assets/images/search-icon.svg') }}" alt="Search"
                        class="h-6 w-6 transition-transform transform group-hover:scale-120">
                </a>
                <!-- Search field -->
                <div id="search-field"
                    class="hidden absolute top-full right-0 mt-2 w-full bg-white shadow-lg p-2 rounded">
                    <input type="text" class="w-full p-2 border border-gray-300 rounded"
                        placeholder="Search for products...">
                </div>
            </div>
        </div>
    </header>

    {{-- section main --}}
    <section id="register-login-page" class="login">
        <div class="flex h-screen">
            <div class="w-2/3 bg-cover bg-center"
                style="background-image: url('{{ asset('assets/images/main-slider/4.jpg') }}');">
            </div>
            <div class="w-1/3 bg-white px-14">
                <x-authentication-card>
                    <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot>
                    <h2 class="text-2xl font-bold mb-2"> Register</h2>

                    <x-validation-errors class="mb-4" />

                    @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                    @endsession

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name"
                                class="w-full px-3 py-1 border focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-primary"
                                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email"
                                class="w-full px-3 py-1 border focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-primary"
                                type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password"
                                class="w-full px-3 py-1 border focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-primary"
                                type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation"
                                class="w-full px-3 py-1 border focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-primary"
                                type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                            of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                            Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-button class="ms-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </x-authentication-card>
            </div>
        </div>
    </section>

    <script src="{{ 'node_modules/swiper/swiper-bundle.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
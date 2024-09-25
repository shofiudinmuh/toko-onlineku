<x-guest-layout>
    <!-- Slider -->
    <section id="product-slider">
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/main-slider/5.jpg') }}" alt="Product 1">
                    <div class="swiper-slide-content">
                        <h2 class="text-3xl md:text-7xl font-bold text-white mb-2 md:mb-4">Women</h2>
                        <p class="mb-4 text-white md:text-2xl">Experience the best in sportswear with <br>our latest
                            collection.</p>
                        <a href="/"
                            class="bg-primary hover:bg-transparent text-white hover:text-white border border-transparent hover:border-white font-semibold px-4 py-2 rounded-full inline-block">Shop
                            now</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/main-slider/2.png') }}" alt="Product 2">
                    <div class="swiper-slide-content">
                        <h2 class="text-3xl md:text-7xl font-bold text-white mb-2 md:mb-4">Men</h2>
                        <p class="mb-4 text-white md:text-2xl">Discover the latest trends in Men`s <br>sportswear and
                            casual
                            fashion.</p>
                        <a href="/"
                            class="bg-white hover:bg-transparent text-black hover:text-white font-semibold px-4 py-2 rounded-full inline-block border border-transparent hover:border-white">Shop
                            now</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/main-slider/4.jpg') }}" alt="Product 3">
                    <div class="swiper-slide-content">
                        <h2 class="text-3xl md:text-7xl font-bold text-white mb-2 md:mb-4">Accessories</h2>
                        <p class="mb-4 text-white md:text-2xl">Elevate your style with our latest <br>sportswear
                            collection.
                        </p>
                        <a href="/"
                            class="bg-primary hover:bg-transparent text-white hover:text-white border border-transparent hover:border-white font-semibold px-4 py-2 rounded-full inline-block">Shop
                            now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Pagination -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <!-- Product banner section -->
    <section id="product-banners">
        <div class="container mx-auto py-10">
            <div class="flex flex-wrap -mx-4">
                <!-- Category 1 -->
                <div class="w-full sm:w-1/3 px-4 mb-8">
                    <div class="category-banner relative overflow-hidden rounded-lg shadow-lg group">
                        <img src="{{ asset('/assets/images/cat-image1.jpg') }}" alt="Category 1" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gray-light bg-opacity-50"></div>
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4">
                            <h2 class="text-2xl md:text-3xl font-bold mb-4">Men</h2>
                            <a href="/"
                                class="bg-primary hover:bg-transparent border border-transparent hover:border-white text-white hover:text-white font-semibold px-4 py-2 rounded-full inline-block">Shop
                                now</a>
                        </div>
                    </div>
                </div>
                <!-- Category 2 -->
                <div class="w-full sm:w-1/3 px-4 mb-8">
                    <div class="category-banner relative overflow-hidden rounded-lg shadow-lg group">
                        <img src="{{ asset('/assets/images/cat-image4.jpg') }}" alt="Category 2" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gray-light bg-opacity-50"></div>
                        <div
                            class="category-text absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4 transition duration-300">
                            <h2 class="text-2xl md:text-3xl font-bold mb-4">Women</h2>
                            <a href="/"
                                class="bg-primary hover:bg-transparent border border-transparent hover:border-white text-white hover:text-white font-semibold px-4 py-2 rounded-full inline-block">Shop
                                now</a>
                        </div>
                    </div>
                </div>
                <!-- Category 3 -->
                <div class="w-full sm:w-1/3 px-4 mb-8">
                    <div class="category-banner relative overflow-hidden rounded-lg shadow-lg group">
                        <img src="{{ asset('assets/images/cat-image5.jpg') }}" alt="Category 3" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gray-light bg-opacity-50"></div>
                        <div
                            class="category-text absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4 transition duration-300">
                            <h2 class="text-2xl md:text-3xl font-bold mb-4">Accessories</h2>
                            <a href="/"
                                class="bg-primary hover:bg-transparent border border-transparent hover:border-white text-white hover:text-white font-semibold px-4 py-2 rounded-full inline-block">Shop
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular product section -->
    <section id="popular-products">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Popular products</h2>
            <div class="flex flex-wrap -mx-4">
                <!-- Product 1 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/1.jpg') }}" alt="Product 1"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Summer black dress</a>
                        <p class="my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-primary">$19.99</span>
                            <span class="text-sm line-through ml-2">$24.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/2.jpg') }}" alt="Product 2"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Black suit</a>
                        <p class=" my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-gray-900">$29.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/3.jpg') }}" alt="Product 3"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Black long dress</a>
                        <p class=" my-2">Women, Accessories</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-gray-900">$15.99</span>
                            <span class="text-sm line-through  ml-2">$19.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/4.jpg') }}" alt="Product 4"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold">Black leather jacket</a>
                        <p class="my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-primary">$39.99</span>
                            <span class="text-sm line-through ml-2">$49.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest product section -->
    <section id="latest-products" class="py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Latest products</h2>
            <div class="flex flex-wrap -mx-4">
                <!-- Product 1 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/5.jpg') }}" alt="Product 1"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Blue women's suit</a>
                        <p class=" my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-primary">$19.99</span>
                            <span class="text-sm line-through ml-2">$24.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/6.jpg') }}" alt="Product 2"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">White shirt with long sleeves</a>
                        <p class=" my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-gray-900">$29.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/7.jpg') }}" alt="Product 3"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Yellow men's suit</a>
                        <p class="my-2">Men</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-gray-900">$15.99</span>
                            <span class="text-sm line-through  ml-2">$19.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white p-3 rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/products/8.jpg') }}" alt="Product 4"
                            class="w-full object-cover mb-4 rounded-lg">
                        <a href="#" class="text-lg font-semibold mb-2">Red dress</a>
                        <p class="my-2">Women</p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-bold text-primary">$39.99</span>
                            <span class="text-sm line-through ml-2">$49.99</span>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Add
                            to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand section -->
    <section id="brands" class="bg-white py-16 px-4">
        <div class="container mx-auto max-w-screen-xl px-4 testimonials">
            <div class="text-center mb-12 lg:mb-20">
                <h2 class="text-5xl font-bold mb-4">Discover <span class="text-primary">Our Brands</span></h2>
                <p class="my-7">Explore the top brands we feature in our store</p>
            </div>
            <div class="swiper brands-swiper-slider">
                <div class="swiper-wrapper">
                    <!-- Brand Logo 1 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/html.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 2 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/js.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 3 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/laravel.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 4 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/php.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 5 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/react.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 6 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/tailwind.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>

                    <!-- Brand Logo 7 -->
                    <div class="swiper-slide flex-none bg-gray-200 flex items-center justify-center rounded-md">
                        <img src="{{ asset('/assets/images/brands/typescript.svg') }}" alt="Client Logo"
                            class="max-h-full max-w-full">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
    </section>

    <!-- Banner section -->
    <section id="banner" class="relative my-16">
        <div class="container mx-auto px-4 py-20 rounded-lg relative bg-cover bg-center"
            style="background-image: url('{{ asset('assets/images/banner1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-40 rounded-lg"></div>
            <div class="relative flex flex-col items-center justify-center h-full text-center text-white py-20">
                <h2 class="text-4xl font-bold mb-4">Welcome to Our Shop</h2>
                <div class="flex space-x-4">
                    <a href="#"
                        class="bg-primary hover:bg-transparent text-white hover:text-primary border border-transparent hover:border-primary font-semibold px-4 py-2 rounded-full inline-block">Shop
                        Now</a>
                    <a href="#"
                        class="bg-primary hover:bg-transparent text-white hover:text-primary border border-transparent hover:border-primary font-semibold px-4 py-2 rounded-full inline-block">New
                        Arrivals</a>
                    <a href="#"
                        class="bg-primary hover:bg-transparent text-white hover:text-primary border border-transparent hover:border-primary font-semibold px-4 py-2 rounded-full inline-block">Sale</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog section -->
    <section class="py-16">
        <div class="text-center mb-12 lg:mb-20">
            <h2 class="text-5xl font-bold mb-4">Discover <span class="text-primary">Our</span> Blog</h2>
            <p class="my-7">Stay updated with the latest trends, tips, and stories in the world of fashion</p>
        </div>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
            <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                <div class="flex flex-col p-6 bg-white rounded-xl shadow-lg">
                    <img class="object-cover object-center w-full mb-8 rounded-xl"
                        src="{{ asset('/assets/images/fashion-trends.jpg') }}" alt="blog">
                    <h2 class="mb-2 text-xs font-semibold tracking-widest text-primary uppercase">Fashion Trends</h2>
                    <h1 class="mb-4 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">
                        Latest
                        Shirt Trends for 2024</h1>
                    <p class="flex-grow text-base font-medium leading-relaxed text-gray-txt">Explore the hottest shirt
                        trends of 2024. From bold prints to classic styles, stay ahead of the fashion curve with our
                        expert
                        insights.</p>
                    <div class="mt-8">
                        <a href="#"
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Read
                            more</a>
                    </div>
                </div>
                <div class="flex flex-col p-6 bg-white rounded-xl shadow-lg">
                    <img class="object-cover object-center w-full mb-8 rounded-xl"
                        src="{{ asset('/assets/images/stylisng-tips.jpg') }}" alt="blog">
                    <h2 class="mb-2 text-xs font-semibold tracking-widest text-primary uppercase">Styling Tips</h2>
                    <h1 class="mb-4 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">How
                        to
                        Style Your Shirt for Any Occasion</h1>
                    <p class="flex-grow text-base font-medium leading-relaxed text-gray-txt">Learn how to style your
                        shirt
                        for different occasions, whether it's a casual day out or a formal event. Get tips from fashion
                        experts.</p>
                    <div class="mt-8">
                        <a href="#"
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Read
                            more</a>
                    </div>
                </div>
                <div class="flex flex-col p-6 bg-white rounded-xl shadow-lg">
                    <img class="object-cover object-center w-full mb-8 rounded-xl"
                        src="{{ asset('/assets/images/customer-stories.jpg') }}" alt="blog">
                    <h2 class="mb-2 text-xs font-semibold tracking-widest text-primary uppercase">Customer Stories</h2>
                    <h1 class="mb-4 text-2xl font-semibold leading-none tracking-tighter text-gray-dark lg:text-3xl">
                        Real
                        Stories from Our Happy Customers</h1>
                    <p class="flex-grow text-base font-medium leading-relaxed text-gray-txt">Read about the experiences
                        of
                        our customers. Discover how our shirts have made a difference in their lives and their personal
                        style.</p>
                    <div class="mt-8">
                        <a href="#"
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full w-full">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe section -->
    <section id="subscribe" class="py-6 lg:py-24 bg-white border-t border-gray-line">
        <div class="container mx-auto">
            <div class="flex flex-col items-center rounded-lg p-4 sm:p-0 ">
                <div class="mb-8">
                    <h2 class="text-center text-xl font-bold sm:text-2xl lg:text-left lg:text-3xl">Join our newsletter
                        and
                        <span class="text-primary">get $50 discount</span> for your first order
                    </h2>
                </div>
                <div class="flex flex-col items-center w-96 ">
                    <form class="flex w-full gap-2">
                        <input placeholder="Enter your email address"
                            class="w-full flex-1 rounded-full px-3 py-2 border border-gray-300 text-gray-700 placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary" />
                        <button
                            class="bg-primary border border-primary hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
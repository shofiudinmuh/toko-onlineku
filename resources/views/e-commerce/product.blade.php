<x-guest-layout>
    <!-- Product info -->
    <section id="product-info">
        <div class="container mx-auto">
            <div class="py-6">
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Image Section -->
                    <div class="w-full lg:w-1/2">
                        <div class="grid gap-4">
                            <!-- Big Image -->
                            <div id="main-image-container">
                                <img id="main-image"
                                    class="h-auto w-full max-w-full rounded-lg object-cover object-center md:h-[480px]"
                                    src="{{ asset('/assets/images/products/1.jpg') }}" alt="Main Product Image" />
                            </div>
                            <!-- Small Images -->
                            <div class="grid grid-cols-5 gap-4">
                                <div>
                                    <img onclick="changeImage(this)"
                                        data-full="{{ asset('/assets/images/single-product/1.jpg') }}"
                                        src="{{ asset('/assets/images/single-product/1.jpg') }}"
                                        class="object-cover object-center max-h-30 max-w-full rounded-lg cursor-pointer"
                                        alt="Gallery Image 1" />
                                </div>
                                <div>
                                    <img onclick="changeImage(this)"
                                        data-full="{{ asset('/assets/images/single-product/2.jpg') }}"
                                        src="{{ asset('/assets/images/single-product/2.jpg') }}"
                                        class="object-cover object-center max-h-30 max-w-full rounded-lg cursor-pointer"
                                        alt="Gallery Image 2" />
                                </div>
                                <div>
                                    <img onclick="changeImage(this)"
                                        data-full="{{ asset('/assets/images/single-product/3.jpg') }}"
                                        src="{{ asset('/assets/images/single-product/3.jpg') }}"
                                        class="object-cover object-center max-h-30 max-w-full rounded-lg cursor-pointer"
                                        alt="Gallery Image 3" />
                                </div>
                                <div>
                                    <img onclick="changeImage(this)"
                                        data-full="{{ asset('/assets/images/single-product/4.jpg') }}"
                                        src="{{ asset('/assets/images/single-product/4.jpg') }}"
                                        class="object-cover object-center max-h-30 max-w-full rounded-lg cursor-pointer"
                                        alt="Gallery Image 4" />
                                </div>
                                <div>
                                    <img onclick="changeImage(this)"
                                        data-full="{{ asset('/assets/images/single-product/5.jpg') }}"
                                        src="{{ asset('/assets/images/single-product/5.jpg') }}"
                                        class="object-cover object-center max-h-30 max-w-full rounded-lg cursor-pointer"
                                        alt="Gallery Image 5" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Section -->
                    <div class="w-full lg:w-1/2 flex flex-col justify-between">
                        <div class="pb-8 border-b border-gray-line">
                            <h1 class="text-3xl font-bold mb-4">Preppy T-shirt</h1>
                            <div class="flex items-center mb-8">
                                <span>★★★★★</span>
                                <span class="ml-2">(0 Reviews)</span>
                                <a href="#" class="ml-4 text-primary font-semibold">Write a review</a>
                            </div>
                            <div class="mb-4 pb-4 border-b border-gray-line">
                                <p class="mb-2">Brand:<strong><a href="#" class="hover:text-primary"> Nike</a></strong>
                                </p>
                                <p class="mb-2">Product code:<strong> 00123</strong></p>
                                <p class="mb-2">Availability:<strong> In Stock</strong></p>
                            </div>
                            <div class="text-2xl font-semibold mb-8">$40.00</div>
                            <div class="flex items-center mb-8">
                                <button id="decrease"
                                    class="bg-primary hover:bg-transparent border border-transparent hover:border-primary text-white hover:text-primary font-semibold w-10 h-10 rounded-full flex items-center justify-center focus:outline-none"
                                    disabled>-</button>
                                <input id="quantity" type="number" value="1"
                                    class="w-16 py-2 text-center focus:outline-none" readonly>
                                <button id="increase"
                                    class="bg-primary hover:bg-transparent border border-transparent hover:border-primary text-white hover:text-primary font-semibold  w-10 h-10 rounded-full focus:outline-none">+</button>
                            </div>
                            <button
                                class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full">Add
                                to Cart</button>
                        </div>
                        <!-- Social sharing -->
                        <div class="flex space-x-4 my-6">
                            <a href="#" class="w-4 h-4 flex items-center justify-center">
                                <img src="{{ asset('assets/images/social_icons/facebook.svg') }}" alt="Facebook"
                                    class="w-4 h-4 transition-transform transform hover:scale-110">
                            </a>
                            <a href="#" class="w-4 h-4 flex items-center justify-center">
                                <img src="{{ asset('assets/images/social_icons/instagram.svg') }}" alt="Instagram"
                                    class="w-4 h-4 transition-transform transform hover:scale-110">
                            </a>
                            <a href="#" class="w-4 h-4 flex items-center justify-center">
                                <img src="{{ asset('assets/images/social_icons/pinterest.svg') }}" alt="Pinterest"
                                    class="w-4 h-4 transition-transform transform hover:scale-110">
                            </a>
                            <a href="#" class="w-4 h-4 flex items-center justify-center">
                                <img src="{{ asset('assets/images/social_icons/twitter.svg') }}" alt="Twitter"
                                    class="w-4 h-4 transition-transform transform hover:scale-110">
                            </a>
                            <a href="#" class="w-4 h-4 flex items-center justify-center">
                                <img src="{{ asset('assets/images/social_icons/viber.svg') }}" alt="Viber"
                                    class="w-4 h-4 transition-transform transform hover:scale-110">
                            </a>
                        </div>
                        <!-- Additional Information -->
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Product Description</h3>
                            <p>This is a premium quality t-shirt perfect for casual wear. Made with high-quality fabric
                                to ensure comfort and durability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product tabs description -->
    <section>
        <div class="container mx-auto">
            <div class="py-12">
                <div class="mt-10">
                    <div class="flex space-x-4" role="tablist">
                        <button id="description-tab" role="tab" aria-controls="description-content" aria-selected="true"
                            class="tab active">Description</button>
                        <button id="additional-info-tab" role="tab" aria-controls="additional-info-content"
                            aria-selected="false" class="tab">Additional information</button>
                        <button id="size-shape-tab" role="tab" aria-controls="size-shape-content" aria-selected="false"
                            class="tab">Size & Shape</button>
                        <button id="reviews-tab" role="tab" aria-controls="reviews-content" aria-selected="false"
                            class="tab">Reviews (3)</button>
                    </div>
                    <div class="mt-8">
                        <div id="description-content" role="tabpanel" aria-labelledby="description-tab"
                            class="tab-content">
                            <div class="flex flex-col lg:flex-row lg:space-x-8">
                                <div class="w-full lg:w-1/2">
                                    <h3 class="text-xl font-semibold mb-2">With the new fashion trends and all the
                                        available shopping options, you can order your clothes online and make money
                                        without even leaving your house.</h3>
                                    <p class="mb-4">These days, you can take your own inspiration and create something
                                        new for yourself. All you need to do is read books and magazines about fashion,
                                        watch videos on YouTube, keep yourself updated on social media, and, of course,
                                        shop online!</p>
                                </div>
                                <div class="w-full lg:w-1/4">
                                    <h3 class="text-xl font-semibold mb-5">Material & Washing</h3>
                                    <p class="mb-2 pb-2 border-b border-gray-line">Material: <span
                                            class="font-semibold">100% cotton</span></p>
                                    <p class="mb-2 pb-2 border-b border-gray-line">Fabric: <span
                                            class="font-semibold">Soft
                                            jersey</span></p>
                                    <p class="mb-2">Care instructions: <span class="font-semibold">Machine wash at 30°C,
                                            do not tumble dry, iron on low heat, do not bleach</span></p>
                                </div>
                                <div class="w-full lg:w-1/4">
                                    <h3 class="text-xl font-semibold mb-5">Size & Shape</h3>
                                    <p class="mb-2 pb-2 border-b border-gray-line">Model height: <span
                                            class="font-semibold">Our model is 180 cm tall and is wearing size M</span>
                                    </p>
                                    <p class="mb-2 pb-2 border-b border-gray-line">Fit: <span
                                            class="font-semibold">Regular</span></p>
                                    <p class="mb-2 pb-2 border-b border-gray-line">Length: <span
                                            class="font-semibold">Standard</span></p>
                                    <p class="mb-2">Sleeve length: <span class="font-semibold">Short sleeves</span></p>
                                </div>
                            </div>
                        </div>
                        <div id="additional-info-content" role="tabpanel" aria-labelledby="additional-info-tab"
                            class="tab-content hidden">
                            <p>Additional information about the product.</p>
                            <div class="flex flex-col space-y-8">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Colors</h3>
                                    <p class="text-base text-gray-700">
                                        Available colors:
                                        <a href="#" class="text-primary hover:underline">Red</a>,
                                        <a href="#" class="text-primary hover:underline">Blue</a>,
                                        <a href="#" class="text-primary hover:underline">Green</a>,
                                        <a href="#" class="text-primary hover:underline">Black</a>,
                                        <a href="#" class="text-primary hover:underline">White</a>.
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Brand</h3>
                                    <p class="text-base text-gray-700">
                                        This t-shirt is made by
                                        <a href="#" class="text-primary hover:underline">Nike</a>.
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Material & Care</h3>
                                    <p class="text-base text-gray-700">
                                        Material: 100% Cotton
                                        <br>
                                        Care instructions: Machine wash at 40 °C, do not tumble dry, iron at medium
                                        temperature, do not bleach.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="size-shape-content" role="tabpanel" aria-labelledby="size-shape-tab"
                            class="tab-content hidden">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 border-b border-gray-line bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                                Size
                                            </th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-line bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                                Chest (inches)
                                            </th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-line bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                                Waist (inches)
                                            </th>
                                            <th
                                                class="px-6 py-3 border-b border-gray-line bg-gray-100 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                                Sleeve Length (inches)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                Small
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                34-36
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                28-30
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                32-33
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                Medium
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                38-40
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                32-34
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                33-34
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                Large
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                42-44
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                36-38
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                34-35
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                X-Large
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                46-48
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                40-42
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap border-b border-gray-line text-sm leading-5 text-gray-700">
                                                35-36
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div id="reviews-content" role="tabpanel" aria-labelledby="reviews-tab"
                            class="tab-content hidden">
                            <!-- Reviews List -->
                            <div class="space-y-6">
                                <h3 class="text-lg font-semibold mb-4">Customer Reviews</h3>
                                <div id="reviews-list">
                                    <!-- Review 1 -->
                                    <div class="py-4">
                                        <div class="flex items-center mb-2">
                                            <span class="text-lg font-semibold text-gray-700">John Doe</span>
                                            <span class="ml-2 text-primary">★★★★★</span>
                                        </div>
                                        <p>Great quality! Fits perfectly and the material feels premium. Highly
                                            recommend this t-shirt.</p>
                                    </div>
                                    <!-- Review 2 -->
                                    <div class="border-t border-gray-line py-4">
                                        <div class="flex items-center mb-2">
                                            <span class="text-lg font-semibold text-gray-700">Jane Smith</span>
                                            <span class="ml-2 text-primary">★★★★☆</span>
                                        </div>
                                        <p>I love the design and the fabric is very comfortable. However, I wish it came
                                            in more colors.</p>
                                    </div>
                                    <!-- Review 3 -->
                                    <div class="border-t border-gray-line py-4">
                                        <div class="flex items-center mb-2">
                                            <span class="text-lg font-semibold text-gray-700">Alice Johnson</span>
                                            <span class="ml-2 text-primary">★★★★★</span>
                                        </div>
                                        <p>Excellent t-shirt! The size is perfect and it looks great. Will definitely
                                            buy again.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Review Form -->
                            <div class="mt-8">
                                <h3 class="text-lg font-semibold mb-4">Write a Review</h3>
                                <form id="review-form" class="space-y-4">
                                    <div class="space-y-4 md:flex md:space-x-4 md:space-y-0">
                                        <div class="md:flex-1">
                                            <label for="review-name"
                                                class="block text-sm font-medium text-gray-700">Name</label>
                                            <input type="text" id="review-name" name="review-name"
                                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                                        </div>
                                        <div class="md:flex-1">
                                            <label for="review-email"
                                                class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="email" id="review-email" name="review-email"
                                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                                        </div>
                                        <div class="md:flex-1">
                                            <label for="review-rating"
                                                class="block text-sm font-medium text-gray-700">Rating</label>
                                            <select id="review-rating" name="review-rating"
                                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                                                <option value="5">★★★★★</option>
                                                <option value="4">★★★★☆</option>
                                                <option value="3">★★★☆☆</option>
                                                <option value="2">★★☆☆☆</option>
                                                <option value="1">★☆☆☆☆</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="review-text"
                                            class="block text-sm font-medium text-gray-700">Review</label>
                                        <textarea id="review-text" name="review-text" rows="4"
                                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="bg-primary hover:bg-transparent border border-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full focus:outline-none">Submit
                                            Review</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest-products -->
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
</x-guest-layout>
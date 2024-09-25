<x-guest-layout>
    <!-- Cart -->
    <section id="cart-page" class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="text-center md:text-left font-semibold">Product</th>
                                        <th class="text-center font-semibold">Price</th>
                                        <th class="text-center font-semibold">Quantity</th>
                                        <th class="text-center md:text-right font-semibold">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items">
                                    <tr class="pb-4 border-b border-gray-line">
                                        <td class="px-1 py-4">
                                            <div
                                                class="flex items-center flex-col sm:flex-row text-center sm:text-left">
                                                <img class="h-16 w-16 md:h-24 md:w-24 sm:mr-8 mb-4 sm:mb-0"
                                                    src="{{ asset('/assets/images/single-product/1.jpg') }}"
                                                    alt="Product image">
                                                <p class="text-sm md:text-base md:font-semibold">Summer black dress</p>
                                            </div>
                                        </td>
                                        <td class="px-1 py-4 text-center">$19.99</td>
                                        <td class="px-1 py-4 text-center">
                                            <div class="flex items-center justify-center">
                                                <button
                                                    class="cart-decrement border border-primary bg-primary text-white hover:bg-transparent hover:text-primary rounded-full w-10 h-10 flex items-center justify-center">-</button>
                                                <p class="quantity text-center w-8">1</p>
                                                <button
                                                    class="cart-increment border border-primary bg-primary text-white hover:bg-transparent hover:text-primary rounded-full w-10 h-10 flex items-center justify-center">+</button>
                                            </div>
                                        </td>
                                        <td class="px-1 py-4 text-right">$19.99</td>
                                    </tr>
                                    <tr class="pb-4">
                                        <td class="px-1 py-4">
                                            <div
                                                class="flex items-center flex-col sm:flex-row text-center sm:text-left">
                                                <img class="h-16 w-16 md:h-24 md:w-24 sm:mr-8 mb-4 sm:mb-0"
                                                    src="{{ asset('/assets/images/single-product/2.jpg') }}"
                                                    alt="Product image">
                                                <p class="text-sm md:text-base md:font-semibold">Black suit</p>
                                            </div>
                                        </td>
                                        <td class="px-1 py-4 text-center">$19.99</td>
                                        <td class="px-1 py-4 text-center">
                                            <div class="flex items-center justify-center">
                                                <button
                                                    class="cart-decrement border border-primary bg-primary text-white hover:bg-transparent hover:text-primary rounded-full w-10 h-10 flex items-center justify-center">-</button>
                                                <p class="quantity text-center w-8">1</p>
                                                <button
                                                    class="cart-increment border border-primary bg-primary text-white hover:bg-transparent hover:text-primary rounded-full w-10 h-10 flex items-center justify-center">+</button>
                                            </div>
                                        </td>
                                        <td class="px-1 py-4 text-right">$19.99</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="px-1 flex flex-col lg:flex-row justify-between items-center mt-10">
                                <div class="flex items-center">
                                    <input type="text" placeholder="Coupon code"
                                        class="border border-gray-300 rounded-l-full py-2 px-4 focus:outline-none">
                                    <button
                                        class="bg-primary text-white border border-primary hover:bg-transparent hover:text-primary rounded-r-full py-2 px-4">Apply
                                        Coupon</button>
                                </div>
                                <div class="mt-4 lg:mt-0 flex space-x-2">
                                    <button
                                        class="bg-primary text-white border border-primary hover:bg-transparent hover:text-primary rounded-full py-2 px-4">Empty
                                        Cart</button>
                                    <button
                                        class="bg-primary text-white border border-primary hover:bg-transparent hover:text-primary rounded-full py-2 px-4">Update
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">Summary</h2>
                        <div class="flex justify-between mb-4">
                            <p>Subtotal</p>
                            <p>$19.99</p>
                        </div>
                        <div class="flex justify-between mb-4">
                            <p>Taxes</p>
                            <p>$1.99</p>
                        </div>
                        <div class="flex justify-between mb-4 pb-4 border-b border-gray-line">
                            <p>Shipping</p>
                            <p>$0.00</p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class="font-semibold">Total</p>
                            <p class="font-semibold">$21.98</p>
                        </div>
                        <a href="/checkout"
                            class="bg-primary text-white border hover:border-primary hover:bg-transparent hover:text-primary py-2 px-4 rounded-full mt-4 w-full text-center block">Proceed
                            to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
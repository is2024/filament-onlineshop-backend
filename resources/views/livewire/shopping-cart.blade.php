<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg pb-32">
    <!-- Header -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white z-50">
        <div class="flex items-center h-16 px-4 border-b border-gray-100">
            <button onclick="history.back()" class="p-2 hover:bg-gray-50 rounded-full">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <h1 class="ml-2 text-lg font-medium">Keranjang</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="pt-16 px-4">
        <!-- Store Section -->
        <div class="pt-4">

            <!-- Cart Items -->
            <div class="space-y-4">
                @forelse($carts as $cart)
                    <!-- Cart Item 1 -->
                    <div class="flex gap-3 pb-4 border-b border-gray-100">

                        <!-- Product Image -->
                        <div class="flex-shrink-0">
                            <img src="{{$cart->product->first_image_url}}"
                                alt="Kaos Polos Motif Putih"
                                class="w-20 h-20 object-cover rounded-lg">
                        </div>

                        <!-- Product Details -->
                        <div class="flex-1">
                            <h3 class="text-sm font-medium line-clamp-2">{{$cart->product->name}}</h3>

                            <div class="flex items-center justify-between mt-2">
                                <span class="text-primary font-semibold">Rp {{number_format($cart->product->price, 0, ',', '.')}}</span>
                                <div class="flex items-center border border-gray-200 rounded-lg">
                                    <button
                                        wire:click="decrementQuantity({{$cart->id}})"
                                        class="px-2 py-1 text-gray-500 hover:text-primary">
                                        -
                                    </button>
                                    <input
                                        type="text"
                                        readonly
                                        value="{{$cart->quantity}}"
                                        class="w-12 text-center border-x border-gray-200 py-1 text-sm">
                                    <button
                                        wire:click="incrementQuantity({{$cart->id}})"
                                        class="px-2 py-1 text-gray-500 hover:text-primary">
                                            +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex flex-col items-center justify-center min-h-[60vh]">
                        <!-- Icon cart kosong -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="text-xl font-medium text-gray-400 mb-2">Keranjang Belanja Kosong</p>
                        <p class="text-sm text-gray-400">Belum ada produk yang ditambahkan</p>

                        <!-- Optional: Tambahkan tombol untuk mulai belanja -->
                        <a href="{{ route('home') }}" class="mt-6 px-6 py-2 bg-primary text-white rounded-full text-sm hover:bg-primary/90 transition-colors">
                            Mulai Belanja
                        </a>
                    </div>
                @endforelse


            </div>
        </div>


    </div>

    @if($carts->isNotEmpty())
        <!-- Bottom Section - Price Summary & Checkout -->
        <div class="fixed bottom-[70px] left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white border-t border-gray-100 p-4 z-50">
            <!-- Price Summary -->
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-sm text-gray-600">Total Pembayaran:</p>
                    <p class="text-lg font-semibold text-primary">Rp {{number_format($total)}}</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">{{$totalItems}} Produk</p>
                </div>
            </div>

            <!-- Checkout Button -->
            <button wire:click="checkout" class="w-full h-12 flex items-center justify-center rounded-full bg-primary text-white font-medium hover:bg-primary/90 transition-colors">
                Checkout
            </button>
        </div>
    @endif
</div>

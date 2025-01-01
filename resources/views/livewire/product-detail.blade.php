<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg pb-[70px]">
    <!-- Header with Back Button -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white z-50">
        <div class="flex items-center h-16 px-4 border-b border-gray-100">
            <button onclick="history.back()" class="p-2 hover:bg-gray-50 rounded-full">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <h1 class="ml-2 text-lg font-medium">Detail Produk</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Product Images Slider -->
        <div class="relative bg-gray-100 h-[400px]">
            <img src="https://i.ibb.co.com/JtLB93y/annoyed-young-pretty-girl-putting-fingers-ears-with-closed-eyes-min.jpg"
                 alt="Kaos Polos Motif Putih"
                 class="w-full h-full object-cover">

            <!-- Image Counter -->
            <div class="absolute bottom-4 right-4 bg-black/50 text-white px-3 py-1 rounded-full text-sm">
                1/4
            </div>
        </div>

        <!-- Product Info -->
        <div class="p-4 border-b border-gray-100">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">Kaos Polos Motif Putih</h2>
                    <div class="mt-1 flex items-baseline gap-2">
                        <span class="text-2xl font-bold text-primary">Rp125.000</span>
                        <span class="text-sm text-gray-500 line-through">Rp150.000</span>
                    </div>
                </div>
                <button class="p-2 hover:bg-gray-50 rounded-full">
                    <i class="bi bi-share text-xl text-gray-600"></i>
                </button>
            </div>

            <!-- Rating & Sold -->
            <div class="flex items-center gap-4 mt-3">
                <div class="flex items-center gap-1">
                    <i class="bi bi-star-fill text-yellow-400"></i>
                    <span class="text-sm">4.8</span>
                    <span class="text-gray-500">(120)</span>
                </div>
                <div class="text-sm text-gray-500">
                    Terjual 1.2rb+
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="p-4 border-b border-gray-100">
            <h3 class="text-lg font-semibold mb-3">Deskripsi Produk</h3>
            <div class="space-y-2 text-gray-600 text-sm">
                <p>Kaos polos dengan bahan premium cotton combed 30s yang nyaman dipakai.</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Bahan: Cotton Combed 30s</li>
                    <li>Jahitan: Double Stitch</li>
                    <li>Ukuran: S, M, L, XL</li>
                    <li>Warna: Putih</li>
                </ul>
            </div>
        </div>

        <!-- Size Guide -->
        <div class="p-4 border-b border-gray-100">
            <h3 class="text-lg font-semibold mb-3">Panduan Ukuran</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left">Ukuran</th>
                            <th class="px-4 py-2 text-left">Lebar</th>
                            <th class="px-4 py-2 text-left">Panjang</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-4 py-2">S</td>
                            <td class="px-4 py-2">48 cm</td>
                            <td class="px-4 py-2">65 cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">M</td>
                            <td class="px-4 py-2">50 cm</td>
                            <td class="px-4 py-2">67 cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">L</td>
                            <td class="px-4 py-2">52 cm</td>
                            <td class="px-4 py-2">69 cm</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">XL</td>
                            <td class="px-4 py-2">54 cm</td>
                            <td class="px-4 py-2">71 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reviews -->
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-lg font-semibold">Ulasan Pembeli</h3>
                <a href="#" class="text-primary text-sm">Lihat Semua</a>
            </div>

            <!-- Review Items -->
            <div class="space-y-4">
                <!-- Review 1 -->
                <div class="border-b border-gray-100 pb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-sm">JD</span>
                        </div>
                        <div>
                            <div class="text-sm font-medium">John Doe</div>
                            <div class="flex items-center gap-1">
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Kualitas bahan bagus, jahitan rapi, dan pengiriman cepat. Recommended seller!</p>
                </div>

                <!-- Review 2 -->
                <div class="border-b border-gray-100 pb-4">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-sm">AS</span>
                        </div>
                        <div>
                            <div class="text-sm font-medium">Alice Smith</div>
                            <div class="flex items-center gap-1">
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                <i class="bi bi-star text-yellow-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Barang sesuai dengan foto, nyaman dipakai. Hanya saja ukurannya agak kebesaran.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation for Add to Cart & Buy -->
    <div class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white border-t border-gray-100 p-4 z-50">
        <div class="flex gap-3">
            <button class="flex-1 h-12 flex items-center justify-center rounded-full border border-primary text-primary font-medium hover:bg-primary hover:text-white transition-colors">
                Keranjang
            </button>
            <button class="flex-1 h-12 flex items-center justify-center rounded-full bg-primary text-white font-medium hover:bg-primary/90 transition-colors">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

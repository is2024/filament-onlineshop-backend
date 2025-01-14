<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg pb-24">
    <!-- Header -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white z-50">
        <div class="flex items-center h-16 px-4 border-b border-gray-100">
            <button onclick="history.back()" class="p-2 hover:bg-gray-50 rounded-full">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <h1 class="ml-2 text-lg font-medium">Konfirmasi Pembayaran</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="pt-16 p-4">
        <!-- Order Info -->
        <div class="bg-gray-50 rounded-xl p-4 mb-6">
            <div class="flex justify-between items-center mb-2">
                <h2 class="font-medium">Detail Pesanan</h2>
                <span class="text-sm text-gray-500">INV/20231123/001</span>
            </div>
            <div class="text-sm text-gray-500 mb-3">23 November 2023 14:30</div>
            <div class="flex justify-between items-center font-medium">
                <span>Total Pembayaran</span>
                <span class="text-primary">Rp137.000</span>
            </div>
        </div>

        <!-- Upload Form -->
        <form class="space-y-4">
            <!-- Bank Selection -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Bank Tujuan</label>
                <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
                    <option value="">Pilih Bank</option>
                    <option value="bca">Bank BCA</option>
                    <option value="bri">Bank BRI</option>
                    <option value="bni">Bank BNI</option>
                </select>
            </div>

            <!-- Bank Sender -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Bank Pengirim</label>
                <input type="text"
                       placeholder="Nama bank pengirim"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <!-- Account Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pengirim</label>
                <input type="text"
                       placeholder="Nama rekening pengirim"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <!-- Transfer Amount -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Transfer</label>
                <input type="number"
                       placeholder="Masukkan jumlah transfer"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <!-- Transfer Date -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Transfer</label>
                <input type="date"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <!-- Upload Payment Proof -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Bukti Transfer</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-primary transition-colors cursor-pointer">
                    <div class="space-y-2 text-center">
                        <div class="mx-auto h-12 w-12 text-gray-400">
                            <i class="bi bi-image text-4xl"></i>
                        </div>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                <span>Upload file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1">atau drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Bottom Button -->
    <div class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white border-t border-gray-100 p-4 z-50">
        <button type="submit" class="w-full bg-primary text-white py-3 rounded-xl font-medium hover:bg-primary/90 transition-colors">
            Kirim Konfirmasi
        </button>
    </div>
</div>

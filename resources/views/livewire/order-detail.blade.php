<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg pb-24">
    <!-- Header -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white z-50">
        <div class="flex items-center h-16 px-4 border-b border-gray-100">
            <button onclick="history.back()" class="p-2 hover:bg-gray-50 rounded-full">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <h1 class="ml-2 text-lg font-medium">Detail Pesanan</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="pt-16 p-4">
        <!-- Order Status -->
        <div class="bg-orange-50 p-4 rounded-xl mb-6">
            <div class="flex items-center gap-3">
                <i class="bi bi-clock-fill text-2xl text-orange-500"></i>
                <div>
                    <h2 class="font-medium text-orange-600">Menunggu Pembayaran</h2>
                    <p class="text-sm text-orange-600">Selesaikan pembayaran sebelum 24 Nov 2023 14:30</p>
                </div>
            </div>
        </div>

        <!-- Order Details -->
        <div class="border border-gray-200 rounded-xl overflow-hidden mb-6">
            <div class="p-4 bg-gray-50 border-b border-gray-200">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-medium">Detail Pesanan</h3>
                    <span class="text-sm text-gray-500">INV/20231123/001</span>
                </div>
                <div class="text-sm text-gray-500">23 November 2023 14:30</div>
            </div>

            <div class="p-4">
                <div class="flex gap-3 pb-4 border-b border-gray-100">
                    <img src="https://i.ibb.co.com/JtLB93y/annoyed-young-pretty-girl-putting-fingers-ears-with-closed-eyes-min.jpg"
                         alt="Product" class="w-20 h-20 object-cover rounded-lg">
                    <div>
                        <h4 class="font-medium">Kaos Polos Putih</h4>
                        <p class="text-sm text-gray-500">Putih, M</p>
                        <div class="mt-1">
                            <span class="text-sm">1 x </span>
                            <span class="font-medium">Rp125.000</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Subtotal</span>
                        <span>Rp125.000</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Ongkir</span>
                        <span>Rp12.000</span>
                    </div>
                    <div class="pt-2 border-t border-gray-200">
                        <div class="flex justify-between font-medium">
                            <span>Total</span>
                            <span class="text-primary">Rp137.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Instructions -->
        <div class="space-y-4">
            <h3 class="font-medium">Petunjuk Pembayaran</h3>

            <!-- BCA -->
            <div class="border rounded-xl overflow-hidden">
                <div class="flex items-center gap-3 p-4 bg-gray-50 border-b">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png"
                         alt="BCA" class="h-6">
                    <span class="font-medium">Bank BCA</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <div class="space-y-1">
                            <div class="text-sm text-gray-500">Nomor Rekening:</div>
                            <div class="font-mono font-medium text-lg">1234567890</div>
                            <div class="text-sm text-gray-500">a.n. PT Fashion Store</div>
                        </div>
                        <button class="text-primary hover:text-primary/80" onclick="navigator.clipboard.writeText('1234567890')">
                            <i class="bi bi-clipboard text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- BRI -->
            <div class="border rounded-xl overflow-hidden">
                <div class="flex items-center gap-3 p-4 bg-gray-50 border-b">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png"
                         alt="BRI" class="h-6">
                    <span class="font-medium">Bank BRI</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <div class="space-y-1">
                            <div class="text-sm text-gray-500">Nomor Rekening:</div>
                            <div class="font-mono font-medium text-lg">0987654321</div>
                            <div class="text-sm text-gray-500">a.n. PT Fashion Store</div>
                        </div>
                        <button class="text-primary hover:text-primary/80" onclick="navigator.clipboard.writeText('0987654321')">
                            <i class="bi bi-clipboard text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- BNI -->
            <div class="border rounded-xl overflow-hidden">
                <div class="flex items-center gap-3 p-4 bg-gray-50 border-b">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/2560px-BNI_logo.svg.png"
                         alt="BNI" class="h-6">
                    <span class="font-medium">Bank BNI</span>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <div class="space-y-1">
                            <div class="text-sm text-gray-500">Nomor Rekening:</div>
                            <div class="font-mono font-medium text-lg">1357924680</div>
                            <div class="text-sm text-gray-500">a.n. PT Fashion Store</div>
                        </div>
                        <button class="text-primary hover:text-primary/80" onclick="navigator.clipboard.writeText('1357924680')">
                            <i class="bi bi-clipboard text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Important Notes -->
        <div class="mt-6 p-4 bg-blue-50 rounded-xl">
            <div class="flex items-start gap-3">
                <i class="bi bi-info-circle-fill text-blue-500 mt-0.5"></i>
                <div class="text-sm text-blue-700">
                    <p class="font-medium mb-1">Penting:</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Transfer sesuai dengan nominal yang tertera</li>
                        <li>Simpan bukti pembayaran</li>
                        <li>Upload bukti pembayaran setelah transfer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Button -->
    <div class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white border-t border-gray-100 p-4 z-50">
        <a href="confirm-payment.html" class="block w-full bg-primary text-white py-3 rounded-xl font-medium hover:bg-primary/90 transition-colors text-center">
            Konfirmasi Pembayaran
        </a>
    </div>
</div>

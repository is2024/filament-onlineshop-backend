<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg">
    <!-- Header -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-[480px] bg-white z-50">
        <div class="flex items-center h-16 px-4 border-b border-gray-100">
            <button onclick="history.back()" class="p-2 hover:bg-gray-50 rounded-full">
                <i class="bi bi-arrow-left text-xl"></i>
            </button>
            <h1 class="ml-2 text-lg font-medium">Profil Saya</h1>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="pt-16">
        <!-- Profile Header -->
        <div class="bg-gradient-to-br from-primary to-secondary p-6">
            <div class="flex items-center gap-4">
                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center">
                    <i class="bi bi-person text-3xl text-white"></i>
                </div>
                <div class="text-white">
                    <h2 class="text-xl font-semibold">John Doe</h2>
                    <p class="text-white/80">john.doe@example.com</p>
                </div>
            </div>
        </div>

        <!-- Profile Menu -->
        <div class="p-4 space-y-4">
            <!-- Account Settings -->
            <div class="space-y-2">
                <h3 class="text-sm font-medium text-gray-500">Akun</h3>
                <div class="space-y-1">
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-person text-primary"></i>
                            <span>Edit Profile</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-shield-lock text-primary"></i>
                            <span>Ganti Password</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-geo-alt text-primary"></i>
                            <span>Alamat Saya</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                </div>
            </div>

            <!-- Preferences -->
            <div class="space-y-2">
                <h3 class="text-sm font-medium text-gray-500">Preferensi</h3>
                <div class="space-y-1">
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-bell text-primary"></i>
                            <span>Notifikasi</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-globe text-primary"></i>
                            <span>Bahasa</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-500">
                            <span class="text-sm">Indonesia</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Other Settings -->
            <div class="space-y-2">
                <h3 class="text-sm font-medium text-gray-500">Lainnya</h3>
                <div class="space-y-1">
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-question-circle text-primary"></i>
                            <span>Bantuan</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-gray-50 rounded-xl hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <i class="bi bi-info-circle text-primary"></i>
                            <span>Tentang Aplikasi</span>
                        </div>
                        <i class="bi bi-chevron-right text-gray-400"></i>
                    </a>
                </div>
            </div>

            <!-- Logout Button -->
            <button class="w-full mt-6 p-4 text-red-500 flex items-center justify-center gap-2 bg-red-50 rounded-xl hover:bg-red-100">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </button>
        </div>
    </div>
</div>

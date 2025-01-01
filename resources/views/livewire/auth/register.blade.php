<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg">
    <div class="p-6">
        <!-- Logo & Welcome Text -->
        <div class="text-center mb-8 pt-8">
            <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-3xl mx-auto flex items-center justify-center mb-6">
                <img src="https://dewakoding.com/user/img/logo.png" alt="Logo" class="w-14 h-14 brightness-0 invert">
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang</h1>
            <p class="text-gray-500">Silakan Register untuk melanjutkan</p>
        </div>

        <!-- Login Form -->
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <div class="mt-1">
                    <input
                        wire:model.lazy="name"
                        type="text"
                        placeholder="Masukkan nama"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
                </div>
                @error('name')
                    <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
                </div>
            <div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email"
                       placeholder="Masukkan email anda"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input type="password"
                           placeholder="Masukkan password"
                           class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
                    <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Confirmation</label>
                <div class="mt-1 relative">
                     <input type="password"
                            wire:model.lazy="password_confirmation"
                           placeholder="Masukkan konfirmasi password"
                           class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">

                </div>
                @error('password_confirmation')
                    <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>


            <button type="submit" class="w-full bg-primary text-white py-3 rounded-xl font-medium hover:bg-primary/90 transition-colors">
                Register Now
            </button>

            <p class="text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="#" class="text-primary hover:underline">Login sekarang</a>
            </p>
        </form>
    </div>
</div>

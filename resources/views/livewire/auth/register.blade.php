<div class="max-w-[480px] mx-auto bg-white min-h-screen relative shadow-lg">
    <div class="p-6">
        <!-- Logo & Welcome Text -->
        <div class="text-center mb-8 pt-8">
            <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-3xl mx-auto flex items-center justify-center mb-6">
                <img src="https://dewakoding.com/user/img/logo.png" alt="Logo" class="w-14 h-14 brightness-0 invert">
            </div>
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang</h1>
            <p class="text-gray-500">Silakan register untuk melanjutkan</p>
        </div>

        <!-- Login Form -->
        <form wire:submit.prevent="register" class="space-y-4">
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
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="mt-1">
                    <input type="email"
                        wire:model.lazy="email"
                        placeholder="Masukkan email anda"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
                </div>
                @error('email')
                    <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="mt-1 relative">
                    <input type="{{$showPassword ? 'text' : 'password'}}"
                            wire:model.lazy="password"
                           placeholder="Masukkan password"
                           class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-primary focus:border-primary">
                    <!-- Password Toggle Button -->
                    <button type="button"
                            wire:click="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            @if($showPassword)
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            @endif
                        </svg>
                    </button>
                </div>
                @error('password')
                    <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Confirmation</label>
                <div class="mt-1 relative">
                    <input type="{{$showPassword ? 'text' : 'password'}}"
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
                <a href="{{route('login')}}" class="text-primary hover:underline">Login sekarang</a>
            </p>
        </form>
    </div>
</div>

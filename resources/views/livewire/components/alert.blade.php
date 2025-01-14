<div>
    <div x-data="{ show: @entangle('show') }"
         x-show="show"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform translate-y-2"
         x-init="@this.on('hideAlert', () => { setTimeout(() => { show = false }, 2000) })"
         class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 pointer-events-none"
         style="display: none;">
        <div class="px-6 py-3 rounded-lg shadow-lg flex items-center space-x-2
            {{ $type === 'success' ? 'bg-green-500 text-white' : '' }}
            {{ $type === 'error' ? 'bg-red-500 text-white' : '' }}
            {{ $type === 'warning' ? 'bg-yellow-500 text-white' : '' }}
            {{ $type === 'info' ? 'bg-blue-500 text-white' : '' }}">

            @switch($type)
                @case('success')
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    @break

                @case('error')
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    @break

                @case('warning')
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    @break

                @case('info')
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    @break
            @endswitch

            <span>{{ $message }}</span>
        </div>
    </div>
</div>

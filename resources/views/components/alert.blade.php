<div x-data="{ isVisible: true }" x-init="setTimeout(() => isVisible = false, 3000)">
    @if (session()->has('success'))
        <div class="alert alert-success max-w-2xl mx-auto mt-6" x-show="isVisible"
            x-transition:enter="transition ease-out duration-200" x-transition:leave="transition ease-in duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-error max-w-2xl mx-auto mt-6" x-show="isVisible"
            x-transition:enter="transition ease-out duration-200" x-transition:leave="transition ease-in duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    @endif
</div>

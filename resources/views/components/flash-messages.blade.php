    @if (session('success'))
        <p class="text-center bg-green-400 text-white">{{ session('success') }}</p>
    @elseif (session('error'))
        <p class="text-center bg-red-500 text-white">{{ session('error') }}</p>
    @endif

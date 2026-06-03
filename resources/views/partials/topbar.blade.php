<header class="flex items-center justify-between px-4 py-4 bg-white">
    <div class="relative w-full">
        <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
            <i class="ri-search-line"></i>
        </span>
        <input type="text" placeholder="Search Here"
            class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm">
    </div>
    <span class="self-start bg-secondary backdrop-blur-md border border-white/30 rounded-full py-2 px-5 block">
        <p class="text-xs text-white font-medium">
            <i class="ri-calendar-line text-white/80 text-sm"></i> {{ now()->format('l, d M Y') }}
        </p>
    </span>
</header>

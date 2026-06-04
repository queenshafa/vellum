<header class="flex items-center justify-between gap-6 pr-4 py-5 bg-white">
    <div class="relative flex-1">
        <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
            <i class="ri-search-line text-lg"></i>
        </span>
        <input type="text" placeholder="Search Here"
            class="w-full py-3.5 pl-12 pr-6 bg-gray-50 text-sm text-gray-600 rounded-full border border-transparent focus:border-[#7B5DFE]/30 focus:bg-white focus:outline-none transition-all placeholder:text-gray-400 placeholder:text-sm">
    </div>

    <div class="shrink-0 bg-[#7B5DFE] rounded-full py-2.5 px-5 shadow-sm shadow-[#7B5DFE]/10">
        <p class="text-xs text-white font-semibold flex items-center gap-2 tracking-wide">
            <i class="ri-calendar-line text-white text-sm"></i>
            {{ now()->format('l, d M Y') }}
        </p>
    </div>
</header>

<aside id="sideBar" class="hidden w-64 bg-white rounded-4xl md:flex flex-col justify-between p-6 text-primary shrink-0">
    <div>
        <div class="flex items-center justify-center gap-2 px-3 py-4 mb-8">
            <img src="{{ asset('assets/vellum-logo.png') }}" alt="Vellum logo" class="h-10 bg-primary p-1 rounded-lg">
            <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
        </div>

        <nav class="space-y-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('dashboard')
                    ? 'bg-primary text-white shadow-sm'
                    : 'text-gray-500 hover:bg-[#F5F6FA] hover:text-[#7B5DFE]' }}">
                <i class="ri-dashboard-line"></i>Dashboard
            </a>

            <a href="{{ route('category.index') }}"
                class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('category.*')
                    ? 'bg-primary text-white shadow-sm'
                    : 'text-gray-500 hover:bg-[#F5F6FA] hover:text-[#7B5DFE]' }}">
                <i class="ri-menu-search-line"></i>Category
            </a>

            <a href="{{ route('notes.pinned') }}"
                class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('notes.pinned')
                    ? 'bg-primary text-white shadow-sm'
                    : 'text-gray-500 hover:bg-[#F5F6FA] hover:text-[#7B5DFE]' }}">
                <i class="ri-pushpin-line"></i>Pinned Notes
            </a>
        </nav>
    </div>

    <div class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden" style="min-height: 180px;">
        <img src="{{ asset('assets/sign-in-bg.png') }}" alt="Login Background"
            class="absolute inset-0 w-full h-full object-cover">
        <div class="relative z-10 flex flex-col gap-3">
            <div
                class="w-8 h-8 rounded-full bg-white/20 border border-white/40 flex items-center justify-center text-white text-xs font-semibold">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <div>
                <p class="text-white font-extrabold text-base leading-tight">
                    {{ Str::before(auth()->user()->name, ' ') }}
                </p>
                <p class="text-white/60 text-xs mt-0.5">
                    @if (Str::contains(auth()->user()->name, ' '))
                        {{ Str::afterLast(auth()->user()->name, ' ') }}
                    @else
                        No Last Name
                    @endif
                </p>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full py-2.5 mt-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 text-white text-sm font-semibold transition flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>Logout
                </button>
            </form>
        </div>
    </div>
</aside>

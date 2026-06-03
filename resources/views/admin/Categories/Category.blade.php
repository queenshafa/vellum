<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Category | Vellum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/landing.css', 'resources/js/frontend.js'])
    <link rel="shortcut icon" href="{{ asset('/assets/vellum-logo.svg') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <!-- navigation -->
    <div class="flex h-screen min-w-0">

        {{-- Side bar --}}
        <aside id="sideBar"
            class="hidden w-64 bg-white rounded-4xl md:flex flex-col justify-between p-6 text-primary shrink-0">
            <div>
                <div class="flex items-center justify-center gap-2 px-3 py-4 mb-8">
                    <img src="{{ asset('assets/vellum-logo.png') }}" alt="Vellum logo"
                        class="h-10 bg-primary p-1 rounded-lg">
                    <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <a href="#"class="flex items-center gap-4 px-4 py-4 rounded-lg text-sm font-medium bg-primary text-white  hover:bg-[#F5F6FA] hover:text-primary transition-all">
                        <i class="ri-dashboard-line"></i>Dashboard
                    </a>

                    <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-menu-search-line"></i>Category
                    </a>

                    <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-pushpin-line"></i>Pin Notes
                    </a>

                    <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all  mb-20">
                        <i class="ri-calendar-line"></i>Calendar
                    </a>
                </nav>
            </div>

            <!-- User Info + Logout -->
            <div class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden"style="min-height: 180px;">

                <!-- Background image -->
                <img src="{{ asset('/assets/sign-in-bg.png') }}" alt="Login Background"
                    class="absolute inset-0 w-full h-full object-cover">


                <!-- Konten -->
                <div class="relative z-10 flex flex-col gap-3">

                    <!-- Icon -->
                    <div
                        class="w-8 h-8 rounded-full bg-white/20 border border-white/40 flex items-center justify-center text-white text-xs font-semibold">
                        E
                    </div>

                    <!-- Teks -->
                    <div>
                        <p class="text-white font-bold text-base leading-tight">
                            <span class="font-extrabold">Eula</span> Lawrence
                        </p>
                        <p class="text-white/60 text-xs mt-0.5">HRD / Admin</p>
                    </div>

                    <!-- Tombol Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        <button type="submit"
                            class="w-full py-2.5 mt-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 text-white text-sm font-semibold transition flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col ">
            <!-- topbar -->
            <header class="flex items-center justify-between px-4 py-4 bg-white">
                <!-- Search Bar -->
                <div class="relative w-full">
                    <!-- <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </span> -->
                    <input type="text" placeholder="Search Here"
                        class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm">
                </div>

                <!-- <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-gray-700">Queenshafa</span>
                        <div
                            class="w-8 h-8 rounded-full bg-[#FF5C5C] flex items-center justify-center text-white text-xs font-bold shadow-sm">
                            <i class="ri-user-3-fill"></i>
                        </div>
                    </div>

                    <button class="text-[#FF7A00] relative p-1 hover:scale-105 transition-transform">
                        <i class="ri-notification-2-line text-lg"></i>
                    </button>
                </div> -->
            </header>

            <main class="flex-1 flex flex-col overflow-hidden">
                <div class="relative overflow-hidden shrink-0 rounded-tl-[3rem]" style="height: 220px;">
                    <img src="{{ asset('/assets/sign-in-bg.png') }}" alt="Dashboard Background"
                        class="absolute inset-0 w-full h-full object-cover">

                    <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">
                        <div>
                            <h1 class="text-3xl font-semibold text-white mb-1">Categories</h1>
                            <p class="text-white/80 text-sm tracking-tight">Let's capture your thoughts and stay on top
                                of everything.</p>
                        </div>
                        <button id="openModal"class="self-start mt-1 inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Add Category
                        </button>
                    </div>
                </div>

                <div class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 overflow-hidden">
                    <div class="flex-1 overflow-y-auto px-10 pt-8 pb-8">
                        <div class="flex flex-col gap-3">
                            {{-- Folder 1 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Study</p>
                                    <p class="text-xs text-gray-400">3 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 2 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Travelling</p>
                                    <p class="text-xs text-gray-400">5 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 3 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Work</p>
                                    <p class="text-xs text-gray-400">8 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 4 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Personal</p>
                                    <p class="text-xs text-gray-400">2 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 5 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Movie Review</p>
                                    <p class="text-xs text-gray-400">4 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 6 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Groceries</p>
                                    <p class="text-xs text-gray-400">1 Note</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 7 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Journal</p>
                                    <p class="text-xs text-gray-400">6 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>
                            {{-- Folder 8 --}}
                            <div
                                class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                                    <i class="ri-folders-line text-xl text-primary"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-800 font-medium">Recipes</p>
                                    <p class="text-xs text-gray-400">7 Notes</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    <i class="ri-arrow-right-line text-xl"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>

    <!-- Modal Add Category -->
    <div id="categoryModal"class="fixed inset-0 bg-black/40 flex items-center justify-center z-50 hidden">

    <div class="bg-white w-[420px] rounded-[20px] border-2 border-gray-300 p-8 shadow-xl">

        <!-- Title -->
        <h1 class="text-2xl font-bold text-[#7B5DFE] mb-8">
            New Category
        </h1>

        <!-- Input -->
        <div class="flex items-center gap-4 mb-10">
            <label class="text-xl font-semibold text-[#7B5DFE]">
                Name:
            </label>

            <input type="text"placeholder="New Category"class="w-[280px] border-2 border-[#7B5DFE] rounded-xl px-4 py-2 text-base text-[#7B5DFE] focus:outline-none">
        </div>

        <!-- Button -->
        <div class="flex justify-end gap-3">
            <button id="closeModal"class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm">
                Cancel
            </button>

            <button class="bg-[#7B5DFE] text-white px-12 py-3 rounded-lg text-sm">
                OK
            </button>
        </div>

    </div>
    </div>

    {{-- JS --}}
    <script>
        const modal = document.getElementById('categoryModal');
        const openBtn = document.getElementById('openModal');
        const closeBtn = document.getElementById('closeModal');
    
        openBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
    
        closeBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    </script>

</body>

</html>

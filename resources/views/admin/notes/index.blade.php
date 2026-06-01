<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notes | Vellum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/landing.css', 'resources/js/frontend.js'])
    <link rel="shortcut icon" href="{{ asset('/assets/vellum-logo.svg') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- navigation -->
    <div class="flex h-screen min-w-0">
        <!-- Side Bar -->
        <aside
            id="sideBar"class="hidden w-64 bg-white rounded-4xl md:flex flex-col justify-between p-6 text-primary shrink-0">
            <div>
                <div class="flex items-center justify-center gap-2 px-3 py-4 mb-8">
                    <img src="assets/Logo.png"alt="Vellum logo" class="h-10 bg-primary p-1 rounded-lg" />
                    <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <a
                        href="#"class="flex items-center gap-4 px-4 py-4 rounded-lg text-sm font-medium bg-primary text-white hover:bg-[#F5F6FA] hover:text-primary transition-all">
                        <i class="ri-dashboard-line"></i>Dashboard
                    </a>

                    <a
                        href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-menu-search-line"></i>Category
                    </a>

                    <a
                        href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-pushpin-line"></i>Pin Notes
                    </a>

                    <a
                        href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all mb-20">
                        <i class="ri-calendar-line"></i>Calendar
                    </a>
                </nav>
            </div>

            <div
                class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden"style="min-height: 180px">
                <!-- Background image -->
                <img src="assets/sign-in-bg.png"alt="Login Background"
                    class="absolute inset-0 w-full h-full object-cover" />

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
                        <button
                            type="submit"class="w-full py-2.5 mt-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 text-white text-sm font-semibold transition flex items-center justify-center gap-2">
                            <svg class="w-4 h-4"fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round"stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>Logout</button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">
            <!-- topbar -->
            <header class="flex items-center justify-between px-4 py-4 bg-white">
                <!-- Search Bar -->
                <div class="relative w-full">
                    <input type="text"placeholder="Search Here"
                        class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm" />
                </div>
            </header>

            <main class="flex-1 flex flex-col overflow-hidden">
                <!-- Greeting Banner — tidak scroll -->
                <div class="relative overflow-hidden shrink-0 rounded-tl-[3rem]"style="height: 220px">
                    <img src="assets/sign-in-bg.png"alt="Dashboard Background"
                        class="absolute inset-0 w-full h-full object-cover" />

                    <!-- Category Header -->
                    <div class="relative z-10 h-full flex flex-col justify-center p-6">
                        <div>
                            <a href="#"class="text-white text-sm font-medium hover:underline">← Back</a>
                        </div>

                        <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">

                            <div>
                                <h1 class="text-3xl font-semibold text-white mb-1">Study</h1>
                                <p class="text-white/80 text-sm tracking-tight">8 Notes</p>
                            </div>

                            <button
                                class="bg-[#7B5DFE] text-white px-5 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:scale-105 transition">
                                <i class="ri-pencil-fill"></i>
                                Edit Category
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Konten putih — bisa di scroll -->
                <div
                    class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 overflow-hidden">
                    <div class="px-8 pt-8 flex-1 overflow-hidden">

                        <!-- Notes Container -->
                        <div
                            class="bg-white rounded-[28px] border border-gray-100 p-6 flex flex-col h-full overflow-hidden">
                            <h2 class="text-3xl font-bold text-[#1A1A1A] mb-6">
                                Notes in Study
                            </h2>

                            <div class="space-y-4 flex-1 overflow-y-auto pr-2">

                                <!-- Note Item 1 -->
                                <a href="view notes.html"
                                    class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center">
                                            <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                                        </div>

                                        <div>
                                            <h3 class="font-bold text-xl text-[#222]">Mind Test Exam</h3>
                                            <p class="text-gray-400 text-sm">Monday, 20 April 2026 • 16.20</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                                            <i class="ri-pushpin-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                                            <i class="ri-pencil-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </a>

                                <!-- Note Item 2 -->
                                <div
                                    class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center">
                                            <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                                        </div>

                                        <div>
                                            <h3 class="font-bold text-xl text-[#222]">Mind Test Exam</h3>
                                            <p class="text-gray-400 text-sm">Monday, 20 April 2026 • 16.20</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                                            <i class="ri-pushpin-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                                            <i class="ri-pencil-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Note Item 3 -->
                                <div
                                    class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center">
                                            <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                                        </div>

                                        <div>
                                            <h3 class="font-bold text-xl text-[#222]">Mind Test Exam</h3>
                                            <p class="text-gray-400 text-sm">Monday, 20 April 2026 • 16.20</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                                            <i class="ri-pushpin-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                                            <i class="ri-pencil-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Note Item 4 -->
                                <div
                                    class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center">
                                            <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                                        </div>

                                        <div>
                                            <h3 class="font-bold text-xl text-[#222]">Mind Test Exam</h3>
                                            <p class="text-gray-400 text-sm">Monday, 20 April 2026 • 16.20</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                                            <i class="ri-pushpin-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                                            <i class="ri-pencil-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Note Item 5 -->
                                <div
                                    class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center">
                                            <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                                        </div>

                                        <div>
                                            <h3 class="font-bold text-xl text-[#222]">Mind Test Exam</h3>
                                            <p class="text-gray-400 text-sm">Monday, 20 April 2026 • 16.20</p>
                                        </div>
                                    </div>

                                    <div class="flex gap-2">
                                        <button
                                            class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                                            <i class="ri-pushpin-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                                            <i class="ri-pencil-fill"></i>
                                        </button>

                                        <button
                                            class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Copy Note Item ini untuk note lainnya -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en" <head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dashboard | Vellum</title>
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/landing.css', 'resources/js/frontend.js'])
<link rel="shortcut icon" href="{{ asset('/assets/vellum-logo.svg') }}" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <!-- navigation -->
    <div class="flex h-screen min-w-0">

        <aside id="sideBar"
            class="hidden w-64 bg-white rounded-4xl md:flex flex-col justify-between p-6 text-primary shrink-0">
            <div>
                <div class="flex items-center justify-center gap-2 px-3 py-4 mb-8">
                    <img src="{{ asset('/assets/vellum-logo.svg') }}" alt="Vellum logo"
                        class="h-10 bg-primary p-1 rounded-lg">
                    <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="space-y-2">
                    <a href="#"
                        class="flex items-center gap-4 px-4 py-4 rounded-lg text-sm font-medium bg-primary text-white  hover:bg-[#F5F6FA] hover:text-primary transition-all">
                        <i class="ri-dashboard-line"></i>Dashboard
                    </a>

                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-menu-search-line"></i>Category
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
                        <i class="ri-pushpin-line"></i>Pin Notes
                    </a>

                    <a href="#"
                        class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all  mb-20">
                        <i class="ri-calendar-line"></i>Calendar
                    </a>
                </nav>
            </div>

            {{-- User Info + Logout --}}
            <div class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden"
                style="min-height: 180px;">

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
                        @csrf
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
                    {{-- <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </span> --}}
                    <input type="text" placeholder="Search Here"
                        class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm">
                </div>

                {{-- <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-gray-700">Queenshafa</span>
                        <div
                            class="w-8 h-8 rounded-full bg-[#FF5C5C] flex items-center justify-center text-white text-xs font-bold shadow-sm">
                            <i class="ri-user-3-fill"></i>
                        </div>
                    </div>

                    <button class="text-[#FF7A00] relative p-1 hover:scale-105 transition-transform">
                        <i class="ri-notification-2-line text-lg"></i>
                </div> --}}
            </header>
            <main class="flex-1 flex flex-col overflow-hidden">

                <!-- Greeting Banner — tidak scroll -->
                <div class="relative overflow-hidden shrink-0 rounded-tl-[3rem]" style="height: 220px;">
                    <img src="{{ asset('/assets/sign-in-bg.png') }}" alt="Dashboard Background"
                        class="absolute inset-0 w-full h-full object-cover">

                    <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">
                        <div>
                            <h1 class="text-3xl font-semibold text-white mb-1">Hiya, Queenshafa! 👋</h1>
                            <p class="text-white/80 text-sm tracking-tight">Let's capture your thoughts and stay on top
                                of everything.</p>
                        </div>
                        <span
                            class="self-start bg-white/10 backdrop-blur-md border border-white/30 rounded-full py-2 px-5">
                            <p class="text-sm text-white font-medium">
                                <i class="ri-calendar-line text-white/80 text-sm"></i> {{ now()->format('l, d M Y') }}
                            </p>
                        </span>
                    </div>
                </div>

                <!-- Konten putih — tidak scroll -->
                <div
                    class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 overflow-hidden">
                    <div class="px-8 pt-8">

                        <!-- Folders — tidak scroll -->
                        <div class="mb-8 shrink-0">
                            <h1 class="text-xl font-semibold capitalize text-black mb-4">Folders</h1>
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                                <a href="#">
                                    <div
                                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4">
                                        <p class="text-sm text-white font-medium tracking-tight">Travelling</p>
                                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i
                                                class="ri-edit-fill text-primary"></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4">
                                        <p class="text-sm text-white font-medium tracking-tight">Movie Review</p>
                                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i
                                                class="ri-edit-fill text-primary"></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4">
                                        <p class="text-sm text-white font-medium tracking-tight">Study Notes</p>
                                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i
                                                class="ri-edit-fill text-primary"></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4">
                                        <p class="text-sm text-white font-medium tracking-tight">Work</p>
                                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i
                                                class="ri-edit-fill text-primary"></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div
                                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4">
                                        <p class="text-sm text-white font-medium tracking-tight">Personal</p>
                                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i
                                                class="ri-edit-fill text-primary"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- My Notes heading — tidak scroll -->
                        <h1 class="text-xl font-semibold capitalize text-black mb-4 shrink-0">My Notes</h1>

                    </div>

                    <!-- Notes grid — HANYA INI yang scroll -->
                    <div class="flex-1 overflow-y-auto px-8 pb-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                            <div class="bg-pink-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-pink-400">Travelling</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Introduction to
                                        Psychology 👩</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Psychology is the scientific study
                                        of behavior and mental processes, divided into several 'schools'...</p>
                                </div>
                            </div>

                            <div class="bg-blue-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-blue-400">Groceries</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Grocery list 🛒</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Milk, Chicken breast, Apple Juice,
                                        Cherry tomatoes, Blueberries, Steak...</p>
                                </div>
                            </div>

                            <div class="bg-green-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-green-500">Study Notes</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Autumn is coming 🍂
                                    </h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Today feels heavy. My body moves
                                        slow, my thoughts even slower...</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-yellow-500">Work</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Meeting notes 📋</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Q2 review discussed. Next sprint
                                        planning on Friday...</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-yellow-500">Work</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Meeting notes 📋</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Q2 review discussed. Next sprint
                                        planning on Friday...</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-yellow-500">Work</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Meeting notes 📋</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Q2 review discussed. Next sprint
                                        planning on Friday...</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-yellow-500">Work</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Meeting notes 📋</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Q2 review discussed. Next sprint
                                        planning on Friday...</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 rounded-2xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-sm font-semibold text-yellow-500">Work</p>
                                    <a href="#"
                                        class="text-gray-400 hover:text-gray-600 text-lg leading-none">···</a>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h2 class="text-lg font-bold text-gray-900 leading-snug mb-1">Meeting notes 📋</h2>
                                    <p class="text-sm text-gray-400 mb-3">Wed, 20 May 2026</p>
                                    <p class="text-sm text-gray-500 leading-relaxed">Q2 review discussed. Next sprint
                                        planning on Friday...</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>

</html>

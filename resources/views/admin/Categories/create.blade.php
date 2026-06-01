<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Category | Vellum</title>
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
                    <a href="#"
                        class="flex items-center gap-4 px-4 py-4 rounded-lg text-sm font-medium bg-primary text-white  hover:bg-[#F5F6FA] hover:text-primary transition-all">
                        <i class="ri-dashboard-line"></i>Dashboard
                    </a>

                    <a href="#"
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

            <!-- User Info + Logout -->
            <div class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden"
                style="min-height: 180px;">

                <!-- Background image -->
                <img src="{{ asset('assets/sign-in-bg.png') }}" alt="Login Background"
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
                    <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </span>
                    <input type="text" placeholder="Search Here"
                        class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm">
                </div>

                <div class="flex items-center gap-6">
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
                </div>
            </header>

            <main class="flex-1 flex flex-col overflow-auto">

                <!-- Greeting Banner — tidak scroll -->
                <div class="relative overflow-hidden shrink-0 rounded-tl-[3rem]" style="height: 220px;">
                    <img src="{{ asset('/assets/sign-in-bg.png') }}" alt="Dashboard Background"
                        class="absolute inset-0 w-full h-full object-cover">

                    <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">
                        <div>
                            <h1 class="text-3xl font-semibold text-white mb-1">Create a new note</h1>
                            <p class="text-white/80 text-sm tracking-tight">Let's capture your thoughts and stay on top
                                of everything.</p>
                        </div>
                        <a href="#"
                            class="self-start mt-1 inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                            Cancel
                        </a>
                    </div>
                </div>

                <!-- Konten putih — tidak scroll -->
                <div
                    class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 px-4 overflow-hidden">
                    <div class="overflow-y-auto flex-1 px-8 py-8">
                        <form class="space-y-5">
                            @csrf

                            <!-- Pilih Category -->
                            <div class="space-y-2">
                                <label class="text-xl font-semibold capitalize text-black shrink-0">Category</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                                        <div class="w-7 h-7 rounded-lg bg-[#E2CEFC] flex items-center justify-center">
                                            <i class="ri-folders-line text-primary text-lg"></i>
                                        </div>
                                    </div>
                                    <select
                                        class="w-full pl-14 pr-10 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50/50 focus:outline-none focus:border-purple-400 appearance-none cursor-pointer">
                                        <option value="">Choose category...</option>
                                        <option value="study">Study</option>
                                        <option value="travelling">Travelling</option>
                                        <option value="work">Work</option>
                                        <option value="personal">Personal</option>
                                        <option value="movie-review">Movie Review</option>
                                        <option value="groceries">Groceries</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Note Title -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <label class="text-xl font-semibold capitalize text-black shrink-0">Note
                                        Title</label>
                                    <span class="text-[11px] text-gray-400 font-medium" id="titleCount">0/100</span>
                                </div>
                                <input type="text" id="noteTitle" maxlength="100"
                                    placeholder="Enter note title..."
                                    oninput="document.getElementById('titleCount').textContent = this.value.length + '/100'"
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-800 placeholder:text-gray-300 shadow-sm focus:outline-none focus:border-purple-400 transition-colors">
                            </div>

                            <!-- Note Content -->
                            <div class="space-y-2">
                                <label class="text-xl font-semibold capitalize text-black shrink-0">Note
                                    Content</label>
                                <div
                                    class="border-2 border-gray-100 rounded-xl overflow-hidden shadow-sm focus-within:border-primary transition-colors">
                                    <!-- Toolbar -->
                                    <div
                                        class="flex items-center gap-4 px-4 py-2 bg-white border-b border-gray-100 text-gray-400 text-sm">
                                        <button type="button"
                                            class="font-bold hover:text-gray-700 transition-colors px-1 text-base">
                                            <i class="ri-bold"></i>
                                        </button>
                                        <button type="button"
                                            class="italic hover:text-gray-700 transition-colors px-1 text-base font-serif">
                                            <i class="ri-italic"></i>
                                        </button>
                                        <button type="button"
                                            class="hover:text-gray-700 transition-colors px-1 text-base">
                                            <i class="ri-underline"></i>
                                        </button>
                                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                                        <button type="button" class="hover:text-gray-700 transition-colors">
                                            <i class="ri-list-check"></i>
                                        </button>
                                        <button type="button" class="hover:text-gray-700 transition-colors">
                                            <i class="ri-list-unordered"></i>
                                        </button>
                                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                                        <button type="button" class="hover:text-gray-700 transition-colors">
                                            <i class="ri-link"></i>
                                        </button>
                                        <button type="button" class="hover:text-gray-700 transition-colors">
                                            <i class="ri-file-image-line"></i>
                                        </button>
                                    </div>
                                    <textarea name="content" placeholder="Write your note here..."
                                        class="w-full px-4 py-4 min-h-52 bg-white text-sm text-gray-800 
         placeholder:text-gray-300 
         focus:outline-none focus:ring-0 
         border-0 resize-none leading-relaxed block">
</textarea>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="flex items-center justify-end pt-2">
                                <button type="submit"
                                    class="self-start mt-1 inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                                    Save Note
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>

</html>

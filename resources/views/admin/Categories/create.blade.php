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

                            <!-- back to study -->
                            <a href="#"
                                class="inline-flex items-center text-xs font-medium text-white hover:text-gray-600 mb-4 transition-colors">
                                <i class="ri-arrow-left-s-line w-3.5 h-3.5 mr-1"></i>Back to Study
                            </a>
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
                    class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 px-4 overflow-hidden">
                    <div class="mx-6 mt-10">
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-3 mb-8">
                            <!-- folder 1 -->
                            <div
                                class="bg-white rounded-lg shadow-sm py-4 px-2 flex items-center gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/30 flex items-center justify-center shrink-0">
                                    <i class="ri-folders-line w-8 h-8 justify-center text-[#6346EE]"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-[#CDC4FE] text-[#6346EE]">3
                                        notes</span>
                                    <p class="text-l text-gray-800 font-medium">Study</p>
                                    <p class="text-xs font-normal text-black">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                </div>
                                <div>
                                    <i class="ri-more-2-fill ml-120 font-bold"></i>
                                </div>
                            </div>

                            <!-- folder 2 -->
                            <div
                                class="bg-white rounded-lg shadow-sm py-4 px-2 flex items-center gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#C8EAD6] flex items-center justify-center shrink-0">
                                    <i class="ri-folders-line w-8 h-8 justify-center text-[#39B76A]"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-[#C8EAD6] text-[#39B76A]">3
                                        notes</span>
                                    <p class="text-l text-gray-800 font-medium">Work</p>
                                    <p class="text-xs font-normal text-black">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                </div>
                                <div>
                                    <i class="ri-more-2-fill ml-120 font-bold"></i>
                                </div>
                            </div>

                            <!-- folder 3 -->
                            <div
                                class="bg-white rounded-lg shadow-sm py-4 px-2 flex items-center gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#FDE1ED] flex items-center justify-center shrink-0">
                                    <i class="ri-folders-line w-8 h-8 justify-center text-[#FC95BF]"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-[#FDE1ED] text-[#FC95BF]">3
                                        notes</span>
                                    <p class="text-l text-gray-800 font-medium">Personal</p>
                                    <p class="text-xs font-normal text-black">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                </div>
                                <div>
                                    <i class="ri-more-2-fill ml-120 font-bold"></i>
                                </div>
                            </div>

                            <!-- folder 4 -->
                            <div
                                class="bg-white rounded-lg shadow-sm py-4 px-2 flex items-center gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#FEF9E1] flex items-center justify-center shrink-0">
                                    <i class="ri-folders-line w-8 h-8 justify-center text-[#FDCF25]"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-[#FEF9E1] text-[#FDCF25]">3
                                        notes</span>
                                    <p class="text-l text-gray-800 font-medium">Ideas</p>
                                    <p class="text-xs font-normal text-black">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                </div>
                                <div>
                                    <i class="ri-more-2-fill ml-120 font-bold"></i>
                                </div>
                            </div>

                            <!-- folder 5 -->
                            <div
                                class="bg-white rounded-lg shadow-sm py-4 px-2 flex items-center gap-4 border border-gray-300">
                                <div
                                    class="w-12 h-12 rounded-full bg-[#CDC4FE] flex items-center justify-center shrink-0">
                                    <i class="ri-folders-line w-8 h-8 justify-center text-[#6346EE]"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-full bg-[#CDC4FE] text-[#6346EE]">3
                                        notes</span>
                                    <p class="text-l text-gray-800 font-medium">Sleep</p>
                                    <p class="text-xs font-normal text-black">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit</p>
                                </div>
                                <div>
                                    <i class="ri-more-2-fill ml-120 font-bold"></i>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="w-full max-w-5xl">



                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h1 class="text-xl font-bold text-gray-900">Create New Note</h1>
                                <p class="text-xs text-gray-400 mt-0.5">Add a new note to your category</p>
                            </div>
                            <button
                                class="px-5 py-2 text-xs font-semibold text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 transition-colors">Cancel</button>
                        </div>

                        <form class="space-y-5">

                            <!-- pilih category -->
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-gray-900">Category</label>
                                <div class="relative">
                                    <button
                                        class="w-full flex items-center justify-between px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50/50 text-left focus:outline-none focus:border-purple-400">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-7 h-7 rounded-lg bg-[#E2CEFC] flex items-center justify-center text-[#7A5CFA]">
                                                <i class="ri-folders-line w-8 h-8 justify-center text-primary"></i>
                                            </div>
                                            <span>Study</span>
                                        </div>
                                        <i class="ri-arrow-down-wide-line text-gray-800"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- title -->
                            <div class="space-y-2">
                                <div class="flex justify-between items-center">
                                    <label class="block text-xs font-bold text-gray-900">Note Title</label>
                                    <span class="text-[11px] text-gray-400 font-medium">0/100</span>
                                </div>
                                <input type="text" placeholder="Enter note title..."
                                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-800 placeholder:text-gray-300 shadow-sm focus:outline-none focus:border-purple-400 transition-colors">
                            </div>

                            <!-- note content -->
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-gray-900">Note Content</label>
                                <div
                                    class="border border-gray-200 rounded-xl overflow-hidden shadow-sm focus-within:border-purple-400 transition-colors">

                                    <!-- tool -->
                                    <div
                                        class="flex items-center gap-4 px-4 py-2 bg-white border-b border-gray-100 text-gray-400 text-sm">
                                        <button
                                            class="font-bold hover:text-gray-700 transition-colors px-1 text-base"><i
                                                class="ri-bold"></i></button>
                                        <button
                                            class="italic hover:text-gray-700 transition-colors px-1 text-base font-serif"><i
                                                class="ri-italic"></i></button>
                                        <button class="hover:text-gray-700 transition-colors px-1 text-base"><i
                                                class="ri-underline"></i></button>

                                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                                        <button class="hover:text-gray-700 transition-colors"><i
                                                class="ri-list-check"></i></button>
                                        <button class="hover:text-gray-700 transition-colors"><i
                                                class="ri-list-check"></i></button>

                                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                                        <button class="hover:text-gray-700 transition-colors"><i
                                                class="ri-link"></i></button>
                                        <button class="hover:text-gray-700 transition-colors"><i
                                                class="ri-file-image-line"></i></button>
                                    </div>

                                    <textarea placeholder="Write your note here..."
                                        class="w-full px-4 py-4 min-h-40 bg-white text-sm text-gray-800 placeholder:text-gray-300 focus:outline-none resize-none leading-relaxed"></textarea>
                                </div>
                            </div>

                            <!-- color -->
                            <div class="flex items-center justify-end pt-2">
                                <button type="submit"
                                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#7A5CFA] text-white text-xs font-semibold rounded-xl shadow-md hover:bg-[#684be3] transition-colors self-end">
                                    <i class="ri-file-line"></i>Save Note
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

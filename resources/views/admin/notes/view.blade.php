<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet"/>

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"rel="stylesheet"/>
  </head>
  <body>
    <!-- navigation -->
    <div class="flex h-screen min-w-0">
        
      <!-- Side Bar -->
      <aside id="sideBar"class="hidden w-64 bg-white rounded-4xl md:flex flex-col justify-between p-6 text-primary shrink-0">
        <div>
          <div class="flex items-center justify-center gap-2 px-3 py-4 mb-8">
            <img src="{{ asset('assets/vellum-logo.png') }}"alt="Vellum logo"class="h-10 bg-primary p-1 rounded-lg"/>
            <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
          </div>

          <!-- Navigation Menu -->
          <nav class="space-y-2">
            <a href="#"class="flex items-center gap-4 px-4 py-4 rounded-lg text-sm font-medium bg-primary text-white hover:bg-[#F5F6FA] hover:text-primary transition-all">
              <i class="ri-dashboard-line"></i>Dashboard
            </a>

            <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
              <i class="ri-menu-search-line"></i>Category
            </a>

            <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all">
              <i class="ri-pushpin-line"></i>Pin Notes
            </a>

            <a href="#"class="flex items-center gap-4 px-3 py-2 rounded-xl text-m font-medium hover:bg-[#F5F6FA] hover:text-[#7B5DFE] hover:rounded-full transition-all mb-20">
              <i class="ri-calendar-line"></i>Calendar
            </a>
          </nav>
        </div>

        <div class="relative border-t border-gray-100 px-4 py-5 rounded-lg overflow-hidden"style="min-height: 180px">
          <!-- Background image -->
          <img src="{{ asset('assets/sign-in-bg.png') }}"alt="Login Background"class="absolute inset-0 w-full h-full object-cover"/>

          <!-- Konten -->
          <div class="relative z-10 flex flex-col gap-3">
            <!-- Icon -->
            <div class="w-8 h-8 rounded-full bg-white/20 border border-white/40 flex items-center justify-center text-white text-xs font-semibold">
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
              <button type="submit"class="w-full py-2.5 mt-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 text-white text-sm font-semibold transition flex items-center justify-center gap-2">
                <svg class="w-4 h-4"fill="none"stroke="currentColor"viewBox="0 0 24 24">
                  <path stroke-linecap="round"stroke-linejoin="round"stroke-width="2"d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
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
            <input type="text"placeholder="Search Here"class="w-full py-4 px-8 bg-gray-50 text-sm text-gray-600 rounded-full border-none focus:outline-none placeholder:text-gray-400 placeholder:text-sm"/>
          </div>
        </header>

        <main class="flex-1 flex flex-col overflow-hidden">
        <!-- Greeting Banner — tidak scroll -->
        <div class="relative overflow-hidden shrink-0 rounded-tl-[3rem]"style="height: 220px">
            <img src="{{ asset('assets/sign-in-bg.png') }}"alt="Dashboard Background"class="absolute inset-0 w-full h-full object-cover"/>

            <!-- Category Header -->
            <div class="relative z-10 h-full flex flex-col justify-center p-6">
              <div>
                <a href="#"class="text-white text-sm font-medium hover:underline">← Back to Study</a>
              </div>

              <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">

                <div>
                  <h1 class="text-3xl font-semibold text-white mb-1">Mind Text Exam</h1>
                  <p class="text-white/80 text-sm tracking-tight">26/05/2026 <span class="px-2">.</span> <span>09.35 PM, Tuesday</span></p>
                </div>

                <!-- Button Edit, Delete, Pin -->
                <div class="flex gap-2">

                <!-- Edit -->
                <button
                    class="bg-white px-3 py-1.5 rounded-lg shadow flex items-center gap-1 text-[#7B5DFE] text-xs font-medium hover:scale-105 transition">
                    <i class="ri-pencil-fill"></i>
                    Edit
                </button>

                <!-- Delete -->
                <button
                    class="bg-white px-3 py-1.5 rounded-lg shadow flex items-center gap-1 text-[#FF6F29] text-xs font-medium hover:scale-105 transition">
                    <i class="ri-delete-bin-line"></i>
                    Delete
                </button>

                <!-- Pin -->
                <button
                    class="bg-white w-8 h-8 rounded-lg shadow flex items-center justify-center text-gray-700 hover:scale-105 transition">
                    <i class="ri-pushpin-fill text-sm"></i>
                </button>
                </div>
              </div>
            </div>
        </div>

        <!-- Konten putih -->
        <div class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 min-h-0">
            <div class="px-8 pt-8 flex-1 flex flex-col min-h-0">

                <!-- Scroll Area -->
                <div class="flex-1 overflow-y-auto pr-2 min-h-0">

                    <!-- Content -->
                    <div class="border border-gray-200 rounded-2xl overflow-hidden">

                        <!-- Isi Note -->
                        <div class="p-8">
                            <p class="text-[15px] leading-8 text-gray-800 mb-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolore dicta accusamus, ex neque ducimus vel culpa iure aspernatur aliquam eum id ipsa mollitia minus magnam nulla, tempore saepe. Alias.
                            </p>

                            <p class="text-[15px] leading-8 text-gray-800 mb-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quia doloribus repellat qui commodi, aut debitis eius saepe porro deserunt? Ipsum libero esse nostrum sit, officiis excepturi autem aut fuga!
                            </p>

                            <p class="text-[15px] leading-8 text-gray-800">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam. Consectetur rerum, numquam aliquid incidunt cum perferendis culpa vitae enim possimus voluptas earum, sed deleniti molestias placeat aperiam soluta explicabo?
                            </p>
                        </div>

                        <!-- Footer Category -->
                        <div class="border-t border-gray-200 px-8 py-4 flex items-center justify-between">
                            <span class="text-gray-400 text-sm">
                                Category
                            </span>

                            <div class="flex items-center gap-2 text-[#7B5DFE]">
                                <i class="ri-folder-fill text-2xl"></i>
                                <span class="text-gray-500">Study</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Previous & Next Notes (TETAP DI BAWAH) -->
                <div class="mt-10 mb-6 border border-gray-200 rounded-xl p-3 flex items-center justify-between bg-white shrink-0">

                    <!-- Previous -->
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-lg bg-[#F3EEFF] text-[#7B5DFE]">
                            <i class="ri-arrow-left-line text-lg"></i>
                        </button>

                        <div>
                            <p class="text-gray-400 text-[11px]">Previous Note</p>
                            <h3 class="font-semibold text-sm">Makan Seblak</h3>
                            <p class="text-gray-400 text-xs">26/05/2026</p>
                        </div>
                    </div>

                    <!-- Next -->
                    <div class="flex items-center gap-2 text-right">
                        <div>
                            <p class="text-gray-400 text-[11px]">Next Note</p>
                            <h3 class="font-semibold text-sm">Study Plan</h3>
                            <p class="text-gray-400 text-xs">26/05/2026</p>
                        </div>

                        <button class="w-10 h-10 rounded-lg bg-[#F3EEFF] text-[#7B5DFE]">
                            <i class="ri-arrow-right-line text-lg"></i>
                        </button>
                    </div>
                </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>

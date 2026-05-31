<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vellum</title>
    <!-- TailwindCSS -->
    {{-- <link rel="stylesheet" href="/src/output.css" /> --}}
    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/landing.css', 'resources/js/frontend.js'])
</head>

<body class="font-plus-jakarta-sans">
    <!-- NAVBAR -->
    <header class="fixed top-4 left-0 right-0 z-50 flex justify-center px-4" x-data="{ open: false }">
        <!-- DESKTOP pill -->
        <nav
            class="hidden md:flex w-full max-w-2xl bg-white/90 backdrop-blur-md rounded-full shadow-lg px-3 py-3 items-center justify-between">
            <a href="#" class="flex-shrink-0">
                <img src="/vellum-logo.svg" class="w-10 invert sepia saturate-500 hue-rotate-20" />
            </a>
            <div class="flex items-center gap-10">
                <a href="#"
                    class="nav-link text-[11px] font-semibold tracking-[0.2em] text-gray-800 uppercase">About</a>
                <a href="#"
                    class="nav-link text-[11px] font-semibold tracking-[0.2em] text-gray-800 uppercase">How To Use</a>
                <a href="#"
                    class="nav-link text-[11px] font-semibold tracking-[0.2em] text-gray-800 uppercase">Benefits</a>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-px h-5 bg-gray-300"></div>
                <button
                    class="bg-secondary text-white text-sm hover:text-gray-700 transition-colors duration-200 p-3 rounded-full cursor-pointer">
                    Get Started
                    <!-- <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 6h18M8 6V4h8v2M19 6l-1 14H6L5 6"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10 11v5M14 11v5"
              />
            </svg> -->
                </button>
            </div>
        </nav>

        <!-- MOBILE card -->
        <nav
            class="flex md:hidden w-full max-w-sm bg-white/90 backdrop-blur-md rounded-2xl shadow-lg overflow-hidden flex-col">
            <div class="flex items-center justify-between px-5 py-4">
                <a href="#" class="flex-shrink-0">
                    <svg class="logo-svg" viewBox="0 0 90 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 28 C4 28 6 10 10 10 C13 10 13 20 15 20 C17 20 18 10 21 10 C24 10 25 28 25 28"
                            stroke="#111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            fill="none" />
                        <path d="M30 24 C30 20 30 12 33 10 C36 8 39 10 40 14 C41 18 40 22 40 24" stroke="#111"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        <path d="M33 18 C35 17 38 17 40 18" stroke="#111" stroke-width="2" stroke-linecap="round"
                            fill="none" />
                        <path d="M40 14 C42 10 46 9 48 12 C50 15 48 19 45 20 C47 21 51 24 52 28" stroke="#111"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        <path d="M57 13 C57 13 62 11 66 14 C70 17 68 22 64 23 C61 24 58 23 57 21" stroke="#111"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        <path d="M57 21 C56 24 57 27 60 28 C63 29 67 27 68 25" stroke="#111" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round" fill="none" />
                        <line x1="4" y1="33" x2="70" y2="33" stroke="#111"
                            stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
                <button @click="open = !open" class="text-gray-500 hover:text-gray-800 transition-colors p-1">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div x-show="open" x-cloak
                class="mobile-menu-enter border-t border-gray-100 px-5 pb-4 pt-2 flex flex-col gap-1">
                <a href="#"
                    class="py-3 text-[15px] font-medium text-gray-800 border-b border-gray-100 hover:text-black transition-colors">About</a>
                <a href="#"
                    class="py-3 text-[15px] font-medium text-gray-800 border-b border-gray-100 hover:text-black transition-colors">How
                    To Use</a>
                <a href="#"
                    class="py-3 text-[15px] font-medium text-gray-800 border-b border-gray-100 hover:text-black transition-colors">Benefits</a>
                <a href="#"
                    class="py-3 px-4 text-white rounded-2xl bg-primary text-[15px] font-medium hover:text-black transition-colors">Get
                    Started</a>
            </div>
        </nav>
    </header>
    <!-- Hero -->
    <section
        class="relative m-8 h-[calc(100vh-64px)] rounded-4xl overflow-hidden flex flex-col items-center justify-center">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover -z-10 rounded-4xl">
            <source src="https://www.pexels.com/download/video/34170260/" type="video/mp4" />
        </video>

        <span
            class="bg-gray-400/20 rounded-full bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 py-2 px-6 uppercase font-semibold border border-gray-100 text-gray-100"><i
                class="ri-circle-fill mr-2 text-green-500"></i> Write. Save.
            Focus.</span>
        <h1 class="text-white text-center text-[2.80rem] lg:text-[110px] font-semibold leading-tight">
            Where ideas stay
            <span class="font-instrument-serif font-normal italic">simple</span>.
        </h1>
        <div class="flex gap-4 mt-14">
            <a href="#" class="bg-white py-4 px-8 rounded-full uppercase font-bold">Start Writing <i
                    class="ri-arrow-right-line ml-2"></i></a>
            <a href="#"
                class="text-gray-100 hover:text-white py-4 px-8 rounded-full uppercase font-bold transition">Learn More
                <i class="ri-arrow-right-line ml-2"></i></a>
        </div>
    </section>

    <!-- About -->
    <section class="pt-4 lg:py-8">
        <p class="text-gray-600 tracking-tight text-xl font-medium text-center lg:mt-20">
            why happly?
        </p>
        <div class="mt-8 px-8">
            <h2 class="text-4xl lg:text-6xl font-semibold text-center tracking-tight leading-tight">
                Lorem
                <span class="inline-block align-middle mx-2">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2340&auto=format&fit=crop"
                        alt="yay" class="h-[1.2em] w-[2.5em] object-cover rounded-full" />
                </span>
                is a simple notes web app designed for clarity. Write, save, and
                revisit
                <span class="inline-block align-middle mx-2">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2340&auto=format&fit=crop"
                        alt="yay" class="h-[1.2em] w-[2.5em] object-cover rounded-full" />
                </span>
                your thoughts without unnecessary features getting in the way.
            </h2>
        </div>
        <div class="mt-20 grid grid-cols-1 lg:grid-cols-3">
            <div
                class="h-72 flex flex-col justify-between p-8 border-b border-t border-b-black border-t-black lg:border-r lg:border-r-black">
                <p class="text-3xl"><i class="ri-flashlight-line"></i></p>
                <div>
                    <h2 class="text-2xl font-bold tracking-tight">
                        Fast note creation
                    </h2>
                    <p class="text-xl font-normal tracking-tight w-2/3">
                        Create and save notes instantly without breaking your focus.
                    </p>
                </div>
            </div>
            <div
                class="h-72 flex flex-col justify-between p-8 border-b border-t border-b-black border-t-black lg:border-r lg:border-r-black">
                <p class="text-3xl"><i class="ri-flashlight-line"></i></p>
                <div>
                    <h2 class="text-2xl font-bold tracking-tight">
                        Clean and minimal interface
                    </h2>
                    <p class="text-xl font-normal tracking-tight w-2/3">
                        A distraction-free layout designed to keep your thoughts clear.
                    </p>
                </div>
            </div>
            <div class="h-72 flex flex-col justify-between p-8 border-b border-t border-b-black border-t-black">
                <p class="text-3xl"><i class="ri-flashlight-line"></i></p>
                <div>
                    <h2 class="text-2xl font-bold tracking-tight">Easy organization</h2>
                    <p class="text-xl font-normal tracking-tight w-2/3">
                        Keep your notes structured and easy to revisit anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee -->
    <div class="relative flex overflow-x-hidden pb-8">
        <div class="animate-marquee py-12 whitespace-nowrap uppercase text-secondary font-semibold">
            <span class="mx-4 text-7xl">A QUIET PLACE FOR YOUR THOUGHTS —</span>
            <span class="mx-4 text-7xl">WRITE WITHOUT DISTRACTIONS —</span>
            <span class="mx-4 text-7xl">A QUIET PLACE FOR YOUR THOUGHTS —</span>
            <span class="mx-4 text-7xl">WRITE WITHOUT DISTRACTIONS —</span>
            <span class="mx-4 text-7xl">A QUIET PLACE FOR YOUR THOUGHTS —</span>
            <span class="mx-4 text-7xl">WRITE WITHOUT DISTRACTIONS —</span>
        </div>
    </div>

    <!-- How it Works -->
    <section class="min-h-screen py-8 px-14 bg-primary">
        <div class="flex text-white">
            <p class="text-5xl font-medium">
                <span class="text-sm font-medium tracking-tight uppercase mr-14 lg:mr-30">
                    How it Works?
                </span>
                A simple flow designed to help you write, save, and revisit your notes
                effortlessly.
            </p>
        </div>

        <div
            class="h-90 mt-30 flex flex-col lg:flex-row lg:justify-between lg:items-center justify-center border-b border-t border-b-white border-t-white">
            <div class="flex justify-end items-center text-white">
                <!-- <i class="ri-file-edit-line text-8xl"></i> -->
                <p class="text-2xl flex gap-x-4 items-center uppercase font-medium">
                    Step <span class="text-9xl font-bold">01</span>
                </p>
            </div>
            <p class="text-white text-2xl font-medium mt-6">
                Start writing as soon as an idea appears.
            </p>
        </div>
        <div
            class="h-90 flex flex-col lg:flex-row lg:justify-between lg:items-center justify-center border-b border-b-white">
            <div class="flex justify-end items-center text-white">
                <!-- <i class="ri-file-edit-line text-8xl"></i> -->
                <p class="text-2xl flex gap-x-4 items-center uppercase font-medium">
                    Step <span class="text-9xl font-bold">02</span>
                </p>
            </div>
            <p class="text-white text-2xl font-medium mt-6">
                Structure your thoughts without extra effort.
            </p>
        </div>
        <div
            class="h-90 flex flex-col lg:flex-row lg:justify-between lg:items-center justify-center border-b border-b-white">
            <div class="flex justify-end items-center text-white">
                <!-- <i class="ri-file-edit-line text-8xl"></i> -->
                <p class="text-2xl flex gap-x-4 items-center uppercase font-medium">
                    Step <span class="text-9xl font-bold">03</span>
                </p>
            </div>
            <p class="text-white text-2xl font-medium mt-6">
                Revisit your notes whenever you need them.
            </p>
        </div>
        <!-- <div class="h-90 flex flex-col justify-center border-b border-b-white">
        <div class="flex justify-between items-center text-white">
          <i class="ri-file-edit-line text-8xl"></i>
          <p class="text-2xl flex gap-x-4 items-center uppercase font-medium">
            Step <span class="text-9xl font-bold">04</span>
          </p>
        </div>
        <p class="text-white text-2xl font-medium mt-6">
          Most creative agency in Brazil 2024 - 2025
        </p>
      </div> -->
    </section>

    <!-- Benefits -->
    <section class="py-8 px-8 bg-secondary/10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:items-stretch">
            <div class="bg-white p-8 border border-secondary rounded-2xl flex flex-col justify-between">
                <h2 class="text-4xl font-semibold leading-tight">
                    Write, organize, and revisit your thoughts with zero friction.
                </h2>
                <img src="https://images.unsplash.com/photo-1579017308347-e53e0d2fc5e9?q=80&w=800&auto=format&fit=crop"
                    alt="" class="mt-6 rounded-2xl w-full object-cover" />
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex-1 bg-white p-8 border border-secondary rounded-2xl flex flex-col justify-between">
                    <h2 class="text-8xl font-bold">2x</h2>
                    <p class="text-base font-normal mt-4">
                        Create and save notes almost twice as fast with an optimized,
                        distraction-free editor.
                    </p>
                </div>
                <div
                    class="flex-1 bg-white p-10 border border-secondary rounded-2xl flex items-center justify-center text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold leading-tight">
                        A smooth, predictable writing experience
                    </h2>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex-1 bg-white p-8 border border-secondary rounded-2xl flex gap-4">
                    <img src="https://images.unsplash.com/photo-1587463646075-888e8afef90e?q=80&w=600&auto=format&fit=crop"
                        alt="" class="w-2/5 object-cover rounded-xl self-stretch" />
                    <div class="flex flex-col justify-between">
                        <h2 class="text-7xl font-bold leading-none">Built for scale</h2>
                        <p class="text-sm font-normal mt-2">
                            Designed to support thousands of notes without slowing down your
                            workflow — fast, stable, and reliable.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-1 bg-white p-8 border border-secondary rounded-2xl flex flex-col justify-between overflow-hidden relative">
                    <div class="flex justify-between items-start">
                        <h2 class="text-8xl font-bold">#1</h2>
                        <img src="https://images.unsplash.com/photo-1587463646075-888e8afef90e?q=80&w=600&auto=format&fit=crop"
                            alt="" class="h-28 w-28 object-cover rounded-xl" />
                    </div>
                    <p class="text-sm font-normal mt-4">
                        Simple Notes Experience; Focus on your thoughts — no clutter, no
                        complexity, just writing that flows.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="min-h-screen py-8 px-8 bg-black text-white">
        <div class="text-center">
            <p class="text-xl font-medium mt-16 lg:mt-24">
                Loved by Focused Thinkers
            </p>
            <h2 class="text-5xl font-medium mt-10">Clarity, Through Their Words</h2>
            <p class="text-gray-400 font-light tracking-tight mt-6 mb-10">
                Built to support focus, clarity, and better thinking.
            </p>
            <a href="#"
                class="bg-linear-to-r from-secondary/70 to-secondary/40 rounded-full bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 py-4 pl-2 pr-6 uppercase font-semibold text-gray-100"><i
                    class="ri-arrow-right-line bg-secondary text-xl p-2 rounded-full mr-4"></i>
                Get Started</a>
        </div>
        <div class="flex overflow-x-scroll gap-8 lg:gap-4 scrollbar-hide snap-x snap-mandatory mt-20 lg:mt-50">
            <div class="min-w-98 lg:min-w-2xl">
                <div
                    class="bg-linear-to-br from-gray-400/20 via-gray-600/20 to-secondary rounded-2xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 p-4 font-semibold border border-gray-600 text-gray-100">
                    <div class="bg-black rounded-2xl p-8 pb-20">
                        <h class="text-xl">Eula Lawrence</h>
                        <p class="text-secondary text-sm">
                            University of Toronto Professor
                        </p>
                        <p class="font-light tracking-tight mt-10 text-gray-400">
                            "Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries"
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-98 lg:min-w-2xl">
                <div
                    class="bg-linear-to-tl from-gray-400/20 via-gray-600/20 to-secondary rounded-2xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 p-4 font-semibold border border-gray-600 text-gray-100">
                    <div class="bg-black rounded-2xl p-8 pb-20">
                        <h class="text-xl">Eula Lawrence</h>
                        <p class="text-secondary text-sm">
                            University of Toronto Professor
                        </p>
                        <p class="font-light tracking-tight mt-10 text-gray-400">
                            "Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries"
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-98 lg:min-w-2xl">
                <div
                    class="bg-linear-to-br from-gray-400/20 via-gray-600/20 to-secondary rounded-2xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 p-4 font-semibold border border-gray-600 text-gray-100">
                    <div class="bg-black rounded-2xl p-8 pb-20">
                        <h class="text-xl">Eula Lawrence</h>
                        <p class="text-secondary text-sm">
                            University of Toronto Professor
                        </p>
                        <p class="font-light tracking-tight mt-10 text-gray-400">
                            "Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries"
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-98 lg:min-w-2xl">
                <div
                    class="bg-linear-to-br from-gray-400/20 via-gray-600/20 to-secondary rounded-2xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 p-4 font-semibold border border-gray-600 text-gray-100">
                    <div class="bg-black rounded-2xl p-8 pb-20">
                        <h class="text-xl">Eula Lawrence</h>
                        <p class="text-secondary text-sm">
                            University of Toronto Professor
                        </p>
                        <p class="font-light tracking-tight mt-10 text-gray-400">
                            "Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="absolute w-screen h-2 bg-black rounded-b-4xl"></div>

    <!-- Footer -->
    <footer class="bg-primary text-white">
        <div class="px-8 lg:px-16 flex items-center justify-center border-b border-white/10"
            style="min-height: 180px">
            <p class="text-xl lg:text-2xl font-medium text-center tracking-tight">
                Built for clarity. Designed for balance.
            </p>
        </div>
        <div class="px-8 lg:px-16 grid grid-cols-1 lg:grid-cols-3 gap-0 py-16">
            <div class="pr-0 lg:pr-16 pb-12 lg:pb-0 border-b lg:border-b-0 lg:border-r border-white/10">
                <p class="text-xl font-semibold tracking-tight mb-2">Vellum</p>
                <p class="text-sm text-white/50 leading-relaxed mb-8 max-w-xs">
                    A thoughtful tool for people who want more signal and less noise.
                </p>
                <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">
                    Connect
                </p>
                <div class="flex gap-2">
                    <a href="#" aria-label="Discord"
                        class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 transition-colors">
                        <i class="ri-discord-fill text-base"></i>
                    </a>
                    <a href="#" aria-label="X / Twitter"
                        class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 transition-colors">
                        <i class="ri-twitter-x-line text-base"></i>
                    </a>
                    <a href="#" aria-label="YouTube"
                        class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 transition-colors">
                        <i class="ri-youtube-fill text-base"></i>
                    </a>
                    <a href="#" aria-label="GitHub"
                        class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 transition-colors">
                        <i class="ri-github-fill text-base"></i>
                    </a>
                </div>
            </div>

            <div class="pt-12 lg:pt-0 px-0 lg:px-16 pb-12 lg:pb-0 border-b lg:border-b-0 lg:border-r border-white/10">
                <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">
                    Resources
                </p>
                <ul class="flex flex-col">
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 border-b border-white/[0.07] text-sm font-medium hover:text-white/60 transition-colors">
                            Home <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 border-b border-white/[0.07] text-sm font-medium hover:text-white/60 transition-colors">
                            About <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 border-b border-white/[0.07] text-sm font-medium hover:text-white/60 transition-colors">
                            How It Works <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 border-b border-white/[0.07] text-sm font-medium hover:text-white/60 transition-colors">
                            Benefits <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 text-sm font-medium hover:text-white/60 transition-colors">
                            Get Started <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="pt-12 lg:pt-0 pl-0 lg:pl-16">
                <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">
                    Legal
                </p>
                <ul class="flex flex-col">
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 border-b border-white/[0.07] text-sm font-medium hover:text-white/60 transition-colors">
                            Terms of Service <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-between py-3 text-sm font-medium hover:text-white/60 transition-colors">
                            Privacy Policy <span class="text-white/30 text-xs">↗</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="px-8 lg:px-16 border-t border-white/10 py-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
            <p class="text-xs text-white/35">
                &copy; 2026 Vellum. All rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="#" class="text-xs text-white/35 hover:text-white/60 transition-colors">Terms</a>
                <a href="#" class="text-xs text-white/35 hover:text-white/60 transition-colors">Privacy</a>
            </div>
        </div>
    </footer>
</body>

</html>

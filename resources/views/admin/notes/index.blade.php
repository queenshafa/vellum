@extends('layouts.app')

@section('title', 'Notes | Vellum')

<<<<<<< HEAD
@section('banner-title')
    {{ request('category') ? ucfirst(request('category')) : 'All Notes' }}
@endsection
=======
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
            <img src="{{ asset('assets/vellum-logo.png') }}" alt="Vellum logo" class="h-10 bg-primary p-1 rounded-lg"/>
            <span class="font-bold text-xl uppercase tracking-wide">Vellum.</span>
          </div>
>>>>>>> 35affe5e747c1fed6885cd8a69a0be39ca7f75ab

@section('banner-subtitle')
    {{ $notes->count() }} {{ Str::plural('Note', $notes->count()) }}
@endsection

@section('banner-actions')
    <div class="flex gap-2">
        @if (request('category'))
            <a href="#"
                class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-white/30 transition">
                <i class="ri-pencil-fill"></i> Edit Category
            </a>
        @endif

<<<<<<< HEAD
        <a href="{{ route('notes.create') }}"
            class="bg-[#7B5DFE] text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-[#6b4eeb] hover:scale-105 transition shadow-lg">
            <i class="ri-add-line font-bold"></i> Add Note
        </a>
    </div>
@endsection

@section('content')
    <div class="px-8 pt-8 flex-1 overflow-hidden">

        <div class="bg-white flex flex-col h-full overflow-hidden">

            <h2 class="text-2xl font-bold text-[#1A1A1A] mb-6">
                {{ request('category') ? 'Notes in ' . ucfirst(request('category')) : 'Recent Notes' }}
            </h2>

            <div class="space-y-4 flex-1 overflow-y-auto pr-2">

                @forelse($notes as $note)
                    <div
                        class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition bg-white {{ $note->is_pinned ? 'border-orange-200 bg-orange-50/20' : '' }}">

                        <a href="{{ route('notes.view', $note) }}" class="flex items-center gap-4 flex-1">
                            <div class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center shrink-0">
                                <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                            </div>

                            <div>
                                <h3 class="font-bold text-xl text-[#222] flex items-center gap-2">
                                    {{ $note->title }}
                                    <!-- Add a pin badge next to the title if pinned -->
                                    @if ($note->is_pinned)
                                        <i class="ri-pushpin-fill text-sm text-[#FF6F29]" title="Pinned Note"></i>
                                    @endif
                                </h3>
                                <p class="text-gray-400 text-sm">
                                    {{ $note->created_at->format('l, d F Y • H.i') }}
                                    @if (!request('category') && $note->category)
                                        • <span class="text-[#7B5DFE] font-medium capitalize">{{ $note->category }}</span>
                                    @endif
                                </p>
                            </div>
                        </a>

                        <!-- Action Area -->
                        <div class="flex gap-2 items-center z-10">
                            <!-- Pin/Unpin Form Toggle -->
                            <form action="{{ route('notes.togglePin', $note) }}" method="POST">
                                @csrf
                                <!-- Dynamic color switching: Orange if pinned, Grey if not -->
                                <button type="submit"
                                    class="w-10 h-10 rounded-lg flex items-center justify-center transition {{ $note->is_pinned ? 'bg-orange-100 text-[#FF6F29] hover:bg-orange-200' : 'bg-gray-100 text-gray-400 hover:text-gray-600 hover:bg-gray-200' }}">
                                    <i class="ri-pushpin-fill"></i>
                                </button>
                            </form>

                            <!-- Edit link -->
                            <a href="{{ route('notes.edit', $note) }}"
                                class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] flex items-center justify-center hover:scale-105 transition">
                                <i class="ri-pencil-fill"></i>
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('notes.destroy', $note) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this note?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-10 h-10 rounded-lg border border-red-200 text-red-500 flex items-center justify-center hover:bg-red-50 transition">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                @empty
                    <!-- Empty state -->
                @endforelse

            </div>
        </div>
    </div>
@endsection
=======
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
          <img src="{{ asset('assets/vellum-logo.png') }}"alt="Login Background"class="absolute inset-0 w-full h-full object-cover"/>

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
                <a href="{{ route('admin.category.index') }}"class="text-white text-sm font-medium hover:text-gray-300">← Back</a>
              </div>

              <div class="relative z-10 flex justify-between items-start h-full px-10 pb-8 mt-16">

                <div>
                  <h1 class="text-3xl font-semibold text-white mb-1">{{ $category->name }}</h1>
                  <p class="text-white/80 text-sm tracking-tight">8 Notes</p>
                </div>

                <button id="openModal" class="bg-[#7B5DFE] text-white px-5 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:scale-105 transition">
                  <i class="ri-pencil-fill"></i>
                  Edit Category
                </button>
              </div>
            </div>
          </div>

          <!-- Konten putih — bisa di scroll -->
          <div class="flex-1 flex flex-col bg-white rounded-tl-[3rem] -mt-12 relative z-10 border border-gray-200 overflow-hidden">
            <div class="px-8 pt-8 flex-1 overflow-hidden">

              <!-- Notes Container -->
              <div class="bg-white rounded-[28px] border border-gray-100 p-6 flex flex-col h-full overflow-hidden">
                <h2 class="text-3xl font-bold text-[#1A1A1A] mb-6">
                  Notes in Study
                </h2>

                <div class="space-y-4 flex-1 overflow-y-auto pr-2">

                  <!-- Note Item 1 -->
                  <a href="#" class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition">
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
                      <button class="w-10 h-10 rounded-lg bg-orange-100 text-[#FF6F29] hover:scale-110 transition">
                        <i class="ri-pushpin-fill"></i>
                      </button>

                      <button class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] hover:scale-110 transition">
                        <i class="ri-pencil-fill"></i>
                      </button>

                      <button class="w-10 h-10 rounded-lg border border-red-300 text-red-500 hover:scale-110 transition">
                        <i class="ri-delete-bin-line"></i>
                      </button>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Modal Add Category -->
    <form  id="categoryModal" method="POST" action="{{ route('admin.category.update', $category->id) }}" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50 hidden">
        @csrf
        @method('PUT')

    <div class="bg-white w-[420px] rounded-[20px] border-2 border-gray-300 p-8 shadow-xl">

      <!-- Title -->
      <h1 class="text-2xl font-bold text-[#7B5DFE] mb-8">
          Edit Category
      </h1>

      <!-- Input -->
      <div class="flex items-center gap-4 mb-10">
          <label class="text-xl font-semibold text-[#7B5DFE]">
              Name:
          </label>

          <input type="text" name="name" value="{{ old('name', $category->name) }}" class="w-[280px] border-2 border-[#7B5DFE] rounded-xl px-4 py-2 text-base text-[#7B5DFE] focus:outline-none">
      </div>

      <!-- Button -->
      <div class="flex justify-between gap-3 py-2">
          <button type="button" id="closeModal" class="bg-gray-300 text-gray-700 px-20 py-2 rounded-lg text-sm">
              Cancel
          </button>

          <button type="submit" class="bg-[#7B5DFE] text-white px-20 py-3 rounded-lg text-sm">
              OK
          </button>
      </div>

    </div>
   </form>

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
>>>>>>> 35affe5e747c1fed6885cd8a69a0be39ca7f75ab

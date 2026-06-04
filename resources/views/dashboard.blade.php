@extends('layouts.app')

@section('title', 'Dashboard | Vellum')

@section('banner-title')
    Hiya, {{ Str::before(auth()->user()->name, ' ') }}! 👋
@endsection
@section('banner-subtitle', "Let's capture your thoughts and stay on top of everything.")

@section('banner-actions')
    <div class="flex gap-2">
        <button id="openModal"
            class="bg-[#7B5DFE] text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-[#6b4eeb] hover:scale-105 transition shadow-lg">
            <i class="ri-add-line font-bold"></i> Add Category
        </button>

        <a href="{{ route('notes.create') }}"
            class="bg-[#7B5DFE] text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-[#6b4eeb] hover:scale-105 transition shadow-lg">
            <i class="ri-add-line font-bold"></i> Add Note
        </a>
    </div>
@endsection

@section('content')
    <div class="px-8 pt-8 shrink-0">
        <div class="mb-8">
            <h1 class="text-xl font-semibold capitalize text-black mb-4">Categories</h1>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                <a href="{{ route('notes.index') }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">All Notes</p>
                    </div>
                </a>
                @forelse ($categories as $cat)
                    <a href="{{ route('notes.index', ['category' => $cat->name]) }}">
                        <div
                            class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                            <p class="text-sm text-white font-medium tracking-tight">{{ $cat->name }}</p>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        </div>

        <h1 class="text-xl font-semibold capitalize text-black mb-4">My Notes</h1>
    </div>

    <div class="flex-1 overflow-y-auto px-8 pb-8 min-h-0">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            @forelse ($notes as $note)
                <div
                    class="rounded-2xl p-4 transition duration-200 hover:shadow-md {{ $note->is_pinned ? 'bg-orange-50 border border-orange-200' : 'bg-purple-50/60' }}">
                    <div class="flex items-center justify-between mb-3">
                        <p
                            class="text-sm font-semibold {{ $note->is_pinned ? 'text-orange-500' : 'text-[#7B5DFE]' }} capitalize">
                            @if ($note->is_pinned)
                                <i class="ri-pushpin-fill text-xs mr-0.5"></i>
                            @endif
                            {{ $note->category ?? 'General' }}
                        </p>
                        <div class="flex gap-1.5">
                            <a href="{{ route('notes.edit', $note) }}" class="text-gray-400 hover:text-gray-600 transition"
                                title="Edit Note">
                                <i class="ri-pencil-line"></i>
                            </a>
                            <a href="{{ route('notes.view', $note) }}"
                                class="text-gray-400 hover:text-gray-600 font-bold transition" title="View Details">
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-sm">
                        <h2 class="text-lg font-bold text-gray-900 mb-1 line-clamp-1">{{ $note->title }}</h2>
                        <p class="text-sm text-gray-400 mb-3">{{ $note->created_at->format('D, d M Y') }}</p>
                        <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">
                            {{ $note->body ? Str::limit($note->body, 80) : 'No content written yet.' }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-12 text-gray-400">
                    <p class="text-sm font-medium">You haven't added any notes yet.</p>

                </div>
            @endforelse

        </div>
    </div>

    <!-- Modal Add Category -->
    <div id="categoryModal" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50 hidden">
        <form method="POST" action="{{ route('category.store') }}"
            class="bg-white w-[420px] rounded-[20px] border-2 border-gray-300 p-8 shadow-xl">
            @csrf

            <h1 class="text-2xl font-bold text-[#7B5DFE] mb-8">
                New Category
            </h1>

            <div class="flex items-center gap-4 mb-10">
                <label class="text-xl font-semibold text-[#7B5DFE]">
                    Name:
                </label>
                <input type="text" name="name" required placeholder="New Category"
                    class="w-[280px] border-2 border-[#7B5DFE] rounded-xl px-4 py-2 text-base text-[#7B5DFE] focus:outline-none">
            </div>

            <div class="flex justify-between gap-3 py-2">
                <button type="button" id="closeModal" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm">
                    Cancel
                </button>
                <button type="submit" class="bg-[#7B5DFE] text-white px-6 py-3 rounded-lg text-sm">
                    OK
                </button>
            </div>
        </form>
    </div>

    <script>
        const modal = document.getElementById('categoryModal');
        const openBtn = document.getElementById('openModal');
        const closeBtn = document.getElementById('closeModal');

        if (openBtn && modal) {
            openBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });
        }

        if (closeBtn && modal) {
            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        }
    </script>
@endsection

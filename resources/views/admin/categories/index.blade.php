@extends('layouts.app')

@section('title', 'Categories | Vellum')
@section('banner-title', 'Categories')
@section('banner-subtitle')
    You have organized your thoughts into {{ $categories->count() }} different
    {{ Str::plural('folder', $categories->count()) }}.
@endsection
@section('banner-actions')
    <button id="openModal"
        class="bg-[#7B5DFE] text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-[#6b4eeb] hover:scale-105 transition shadow-lg">
        <i class="ri-add-line font-bold"></i> Add Category
    </button>
@endsection
@section('content')
    <div class="flex-1 overflow-y-auto px-10 pt-8 pb-8">
        <div class="flex flex-col gap-3">
            @forelse ($categories as $category)
                <div
                    class="bg-white rounded-xl shadow-sm py-4 px-6 flex items-center justify-between gap-4 border border-gray-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/30 flex items-center justify-center shrink-0 border border-primary">
                        <i class="ri-folders-line text-xl text-primary"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-800 font-medium">{{ $category->name }}</p>
                        <p class="text-xs text-gray-400">{{ $category->notes_count }}
                            {{ Str::plural('Note', $category->notes_count) }}</p>
                    </div>
                    <a href="{{ route('notes.index', ['category' => $category->name]) }}"
                        class="inline-flex items-center gap-1.5 px-2 py-1 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                        <i class="ri-arrow-right-line text-xl"></i>
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400">
                    No categories registered yet. Click "Add Category" above to create one!
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

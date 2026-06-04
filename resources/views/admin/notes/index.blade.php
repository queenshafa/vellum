@extends('layouts.app')

@section('title', 'Notes | Vellum')
@section('banner-title')
    {{ isset($category) ? $category->name : (request('category') ? ucfirst(request('category')) : 'All Notes') }}
@endsection
@section('banner-subtitle')
    {{ $notes->count() }} {{ Str::plural('Note', $notes->count()) }}
@endsection
@section('banner-actions')
    <div class="flex gap-2 items-center">
        @if (isset($category) && $category)
            <button id="openModal"
                class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-white/30 transition">
                <i class="ri-pencil-fill"></i> Edit Category
            </button>

            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                onsubmit="return confirm('Delete this category?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="w-10 h-10 rounded-lg bg-red-500 text-white border border-red-200 flex items-center justify-center hover:bg-red-50 hover:text-red-500 transition">
                    <i class="ri-delete-bin-line"></i>
                </button>
            </form>
        @elseif (request('category') && $notes->first() && $notes->first()->category_id)
            <button id="openModal"
                class="bg-white/20 backdrop-blur-sm border border-white/30 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-white/30 transition">
                <i class="ri-pencil-fill"></i> Edit Category
            </button>

            <form action="{{ route('category.destroy', $notes->first()->category_id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this category?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500/20 backdrop-blur-sm border border-red-500/30 text-red-200 px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2 hover:bg-red-600 hover:text-white transition">
                    <i class="ri-delete-bin-line"></i> Delete
                </button>
            </form>
        @endif

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
                @if (isset($category) && $category)
                    Notes in {{ $category->name }}
                @else
                    {{ request('category') ? 'Notes in ' . ucfirst(request('category')) : 'Recent Notes' }}
                @endif
            </h2>

            <div class="space-y-4 flex-1 overflow-y-auto pr-2">
                @forelse($notes as $note)
                    <div
                        class="flex items-center justify-between border border-gray-200 rounded-2xl p-4 hover:shadow-md transition bg-white {{ $note->is_pinned ? 'border-orange-200 bg-orange-50/20' : '' }}">

                        <a href="{{ route('notes.view', $note->id) }}" class="flex items-center gap-4 flex-1">
                            <div class="w-12 h-12 bg-[#E9E0FF] rounded-xl flex items-center justify-center shrink-0">
                                <i class="ri-file-paper-2-fill text-2xl text-[#7B5DFE]"></i>
                            </div>

                            <div>
                                <h3 class="font-bold text-xl text-[#222] flex items-center gap-2">
                                    {{ $note->title }}
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

                        <div class="flex gap-2 items-center z-10">
                            <form action="{{ route('notes.togglePin', $note->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-10 h-10 rounded-lg flex items-center justify-center transition {{ $note->is_pinned ? 'bg-orange-100 text-[#FF6F29] hover:bg-orange-200' : 'bg-gray-100 text-gray-400 hover:text-gray-600 hover:bg-gray-200' }}">
                                    <i class="ri-pushpin-fill"></i>
                                </button>
                            </form>

                            <a href="{{ route('notes.edit', $note->id) }}"
                                class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] flex items-center justify-center hover:scale-105 transition">
                                <i class="ri-pencil-fill"></i>
                            </a>

                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST"
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
                    <div class="text-center py-8 text-gray-400">
                        No notes found. Create your first note above!
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    @if (isset($category) && $category)
        <div id="categoryModal" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50 hidden">
            <form method="POST" action="{{ route('category.update', $category->id) }}"
                class="bg-white w-[420px] rounded-[20px] border-2 border-gray-300 p-8 shadow-xl">
                @csrf
                @method('PUT')

                <h1 class="text-2xl font-bold text-[#7B5DFE] mb-8">Edit Category Name</h1>

                <div class="flex items-center gap-4 mb-10">
                    <label class="text-xl font-semibold text-[#7B5DFE]">Name:</label>
                    <input type="text" name="name" required value="{{ old('name', $category->name) }}"
                        class="w-[280px] border-2 border-[#7B5DFE] rounded-xl px-4 py-2 text-base text-[#7B5DFE] focus:outline-none">
                </div>

                <div class="flex justify-between gap-3 py-2">
                    <button type="button" id="closeModal"
                        class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg text-sm font-medium transition hover:bg-gray-400">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-[#7B5DFE] text-white px-6 py-3 rounded-lg text-sm font-medium transition hover:bg-[#6b4eeb]">
                        Save Changes
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
    @endif
@endsection

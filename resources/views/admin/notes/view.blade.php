@extends('layouts.app')

<!-- Changes browser tab title dynamically to the note's real title -->
@section('title', $note->title . ' | Vellum')

<!-- Dynamic Greeting Banner Configurations -->
@section('banner-title')
    {{ $note->title }}
@endsection

@section('banner-subtitle')
    {{ $note->created_at->format('d/m/Y') }}
    <span class="px-2">•</span>
    <span>{{ $note->created_at->format('h.i A, l') }}</span>
@endsection

{{-- @section('banner-actions')
    <div class="flex gap-2">
        <!-- Pin/Unpin Form Toggle -->
        <form action="{{ route('notes.togglePin', $note->id) }}" method="POST">
            @csrf
            <button type="submit"
                class="w-10 h-10 rounded-lg flex items-center justify-center transition {{ $note->is_pinned ? 'bg-orange-100 text-[#FF6F29] hover:bg-orange-200' : 'bg-white/20 text-white backdrop-blur-sm border border-white/30 hover:bg-white/30' }}">
                <i class="ri-pushpin-fill"></i>
            </button>
        </form>

        <!-- Edit link -->
        <a href="{{ route('notes.edit', $note->id) }}"
            class="w-10 h-10 rounded-lg bg-[#E9E0FF] text-[#7B5DFE] flex items-center justify-center hover:scale-105 transition shadow-md">
            <i class="ri-pencil-fill"></i>
        </a>

        <!-- Delete Form -->
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this note?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-10 h-10 rounded-lg bg-red-500/20 backdrop-blur-sm border border-red-500/30 text-red-200 flex items-center justify-center hover:bg-red-500/40 transition">
                <i class="ri-delete-bin-line"></i>
            </button>
        </form>
    </div>
@endsection --}}

@section('content')
    <div class="px-8 pt-8 flex-1 flex flex-col min-h-0">

        <!-- Scroll Area -->
        <div class="flex-1 overflow-y-auto pr-2 min-h-0">

            <!-- Content -->
            <div class="border border-gray-200 rounded-2xl overflow-hidden">

                <!-- Isi Note -->
                <div class="p-8">
                    <p class="text-[15px] leading-8 text-gray-800">
                        {!! nl2br(e($note->body)) !!}
                    </p>


                    {{-- <p class="text-[15px] leading-8 text-gray-800 mb-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quia
                                        doloribus repellat qui commodi, aut debitis eius saepe porro deserunt? Ipsum
                                        libero esse nostrum sit, officiis excepturi autem aut fuga!
                                    </p>

                                    <p class="text-[15px] leading-8 text-gray-800">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam.
                                        Consectetur rerum, numquam aliquid incidunt cum perferendis culpa vitae enim
                                        possimus voluptas earum, sed deleniti molestias placeat aperiam soluta
                                        explicabo?
                                    </p> --}}
                </div>

                <!-- Footer Category -->
                <div class="border-t border-gray-200 px-8 py-4 flex items-center justify-between">
                    <span class="text-gray-400 text-sm">
                        Category
                    </span>

                    <div class="flex items-center gap-2 text-[#7B5DFE]">
                        <i class="ri-folder-fill text-2xl"></i>
                        <span class="text-gray-500 capitalize">{{ $note->category ?? 'Uncategorized' }}</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Previous & Next Notes (TETAP DI BAWAH) -->
        <!-- Previous & Next Notes Row Container -->
        <div
            class="mt-6 mb-6 border border-gray-200 rounded-xl p-3 flex items-center justify-between bg-white shadow-sm shrink-0">

            <!-- Previous Note Navigation Link Block -->
            <div class="flex items-center gap-2 min-w-0 flex-1">
                @if ($previousNote)
                    <a href="{{ route('notes.view', $previousNote->id) }}"
                        class="w-10 h-10 rounded-lg bg-[#F3EEFF] text-[#7B5DFE] hover:bg-[#7B5DFE] hover:text-white transition flex items-center justify-center shrink-0">
                        <i class="ri-arrow-left-line text-lg"></i>
                    </a>
                    <div class="truncate">
                        <p class="text-gray-400 text-[11px] font-medium uppercase tracking-wider">Previous Note</p>
                        <a href="{{ route('notes.view', $previousNote->id) }}"
                            class="font-bold text-sm text-gray-800 hover:text-[#7B5DFE] transition truncate block">
                            {{ $previousNote->title }}
                        </a>
                        <p class="text-gray-400 text-[10px]">{{ $previousNote->created_at->format('d/m/Y') }}</p>
                    </div>
                @else
                    <!-- Muted state when no previous record exists -->
                    <div
                        class="w-10 h-10 rounded-lg bg-gray-50 text-gray-300 flex items-center justify-center shrink-0 cursor-not-allowed">
                        <i class="ri-arrow-left-line text-lg"></i>
                    </div>
                    <div>
                        <p class="text-gray-300 text-[11px] font-medium uppercase tracking-wider">Previous Note</p>
                        <h3 class="font-medium text-sm text-gray-300 italic">No older notes</h3>
                    </div>
                @endif
            </div>

            <!-- Divider decoration gap -->
            <div class="w-8"></div>

            <!-- Next Note Navigation Link Block -->
            <div class="flex items-center gap-2 text-right justify-end min-w-0 flex-1">
                @if ($nextNote)
                    <div class="truncate">
                        <p class="text-gray-400 text-[11px] font-medium uppercase tracking-wider">Next Note</p>
                        <a href="{{ route('notes.view', $nextNote->id) }}"
                            class="font-bold text-sm text-gray-800 hover:text-[#7B5DFE] transition truncate block">
                            {{ $nextNote->title }}
                        </a>
                        <p class="text-gray-400 text-[10px]">{{ $nextNote->created_at->format('d/m/Y') }}</p>
                    </div>
                    <a href="{{ route('notes.view', $nextNote->id) }}"
                        class="w-10 h-10 rounded-lg bg-[#F3EEFF] text-[#7B5DFE] hover:bg-[#7B5DFE] hover:text-white transition flex items-center justify-center shrink-0">
                        <i class="ri-arrow-right-line text-lg"></i>
                    </a>
                @else
                    <!-- Muted state when no newer record exists -->
                    <div>
                        <p class="text-gray-300 text-[11px] font-medium uppercase tracking-wider">Next Note</p>
                        <h3 class="font-medium text-sm text-gray-300 italic">No newer notes</h3>
                    </div>
                    <div
                        class="w-10 h-10 rounded-lg bg-gray-50 text-gray-300 flex items-center justify-center shrink-0 cursor-not-allowed">
                        <i class="ri-arrow-right-line text-lg"></i>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

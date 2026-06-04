@extends('layouts.app')

@section('title', 'Notes | Vellum')

@section('banner-title')
    Pinned Notes
@endsection

@section('banner-subtitle')
    {{ $notes->count() }} {{ Str::plural('Note', $notes->count()) }}
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
                            <!-- Pin/Unpin -->
                            <form action="{{ route('notes.togglePin', $note) }}" method="POST">
                                @csrf
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
                    <div class="col-span-1 md:col-span-3 text-center py-12 text-gray-400">
                        <p class="text-sm font-medium">You haven't pinned any notes yet.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
@endsection

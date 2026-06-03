@extends('layouts.app')

@section('title', 'Dashboard | Vellum')

@section('banner-title')
    Hiya, {{ Str::before(auth()->user()->name, ' ') }}! 👋
@endsection
@section('banner-subtitle', "Let's capture your thoughts and stay on top of everything.")

@section('banner-actions')
    <span class="self-start bg-white/10 backdrop-blur-md border border-white/30 rounded-full py-2 px-5 block">
        <p class="text-sm text-white font-medium">
            <i class="ri-calendar-line text-white/80 text-sm"></i> {{ now()->format('l, d M Y') }}
        </p>
    </span>
@endsection

@section('content')
    <div class="px-8 pt-8 shrink-0">
        <div class="mb-8">
            <h1 class="text-xl font-semibold capitalize text-black mb-4">Folders</h1>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                <a href="{{ route('notes.index', ['category' => 'travelling']) }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">Travelling</p>
                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i class="ri-edit-fill text-primary"></i></span>
                    </div>
                </a>
                <a href="{{ route('notes.index', ['category' => 'movie-review']) }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">Movie Review</p>
                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i class="ri-edit-fill text-primary"></i></span>
                    </div>
                </a>
                <a href="{{ route('notes.index', ['category' => 'study']) }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">Study Notes</p>
                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i class="ri-edit-fill text-primary"></i></span>
                    </div>
                </a>
                <a href="{{ route('notes.index', ['category' => 'work']) }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">Work</p>
                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i class="ri-edit-fill text-primary"></i></span>
                    </div>
                </a>
                <a href="{{ route('notes.index', ['category' => 'personal']) }}">
                    <div
                        class="bg-primary rounded-xl shadow-sm py-4 px-4 flex items-center justify-between gap-4 hover:opacity-90 transition">
                        <p class="text-sm text-white font-medium tracking-tight">Personal</p>
                        <span class="bg-white py-0.5 px-1.5 rounded-sm"><i class="ri-edit-fill text-primary"></i></span>
                    </div>
                </a>
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
                <div
                    class="col-span-1 md:col-span-3 text-center py-12 text-gray-400 bg-gray-50/50 border border-dashed rounded-2xl">
                    <i class="ri-chat-history-line text-4xl block mb-2 text-gray-300"></i>
                    <p class="text-sm font-medium">You haven't added any notes yet.</p>
                    <a href="{{ route('notes.create') }}"
                        class="mt-3 inline-flex items-center gap-1 text-sm font-semibold text-[#7B5DFE] hover:underline">
                        Create your first note &rarr;
                    </a>
                </div>
            @endforelse

        </div>
    </div>
@endsection

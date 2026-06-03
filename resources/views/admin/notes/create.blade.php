@extends('layouts.app')

@section('title', 'Create Note | Vellum')

@section('banner-title', 'Create a new note')
@section('banner-subtitle', "Let's capture your thoughts and stay on top of everything.")

@section('banner-actions')
    <a href="{{ route('notes.index') }}"
        class="inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
        Cancel
    </a>
@endsection

@section('content')
    <div class="overflow-y-auto flex-1 px-8 py-8">
        <form class="space-y-5" method="POST" action="{{ route('notes.store') }}">
            @csrf

            <!-- Pilih Category -->
            <div class="space-y-2">
                <label class="text-xl font-semibold capitalize text-black shrink-0">Category</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                        <div class="w-7 h-7 rounded-lg bg-[#E2CEFC] flex items-center justify-center">
                            <i class="ri-folders-line text-primary text-lg"></i>
                        </div>
                    </div>
                    <select name="category"
                        class="w-full pl-14 pr-10 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50/50 focus:outline-none focus:border-purple-400 appearance-none cursor-pointer">
                        <option value="">Choose category...</option>
                        <option value="study">Study</option>
                        <option value="travelling">Travelling</option>
                        <option value="work">Work</option>
                        <option value="personal">Personal</option>
                        <option value="movie-review">Movie Review</option>
                        <option value="groceries">Groceries</option>
                    </select>
                </div>
            </div>

            <!-- Note Title -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="text-xl font-semibold capitalize text-black shrink-0">Note
                        Title</label>
                    <span class="text-[11px] text-gray-400 font-medium" id="titleCount">0/100</span>
                </div>
                <input type="text" name="title" id="noteTitle" maxlength="100" placeholder="Enter note title..."
                    oninput="document.getElementById('titleCount').textContent = this.value.length + '/100'"
                    class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-800 placeholder:text-gray-300 shadow-sm focus:outline-none focus:border-purple-400 transition-colors">
            </div>

            <!-- Note Content -->
            <div class="space-y-2">
                <label class="text-xl font-semibold capitalize text-black shrink-0">Note
                    Content</label>
                <div
                    class="border-2 border-gray-100 rounded-xl overflow-hidden shadow-sm focus-within:border-primary transition-colors">
                    <!-- Toolbar -->
                    <div class="flex items-center gap-4 px-4 py-2 bg-white border-b border-gray-100 text-gray-400 text-sm">
                        <button type="button" class="font-bold hover:text-gray-700 transition-colors px-1 text-base">
                            <i class="ri-bold"></i>
                        </button>
                        <button type="button"
                            class="italic hover:text-gray-700 transition-colors px-1 text-base font-serif">
                            <i class="ri-italic"></i>
                        </button>
                        <button type="button" class="hover:text-gray-700 transition-colors px-1 text-base">
                            <i class="ri-underline"></i>
                        </button>
                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                        <button type="button" class="hover:text-gray-700 transition-colors">
                            <i class="ri-list-check"></i>
                        </button>
                        <button type="button" class="hover:text-gray-700 transition-colors">
                            <i class="ri-list-unordered"></i>
                        </button>
                        <div class="w-px h-4 bg-gray-200 mx-1"></div>
                        <button type="button" class="hover:text-gray-700 transition-colors">
                            <i class="ri-link"></i>
                        </button>
                        <button type="button" class="hover:text-gray-700 transition-colors">
                            <i class="ri-file-image-line"></i>
                        </button>
                    </div>
                    <textarea name="body" placeholder="Write your note here..."
                        class="w-full px-4 py-4 min-h-52 bg-white text-sm text-gray-800 placeholder:text-gray-300 focus:outline-none focus:ring-0 border-0 resize-none leading-relaxed block">{{ old('body', $note->body ?? '') }}</textarea>
                </div>
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-end pt-2">
                <button type="submit"
                    class="self-start mt-1 inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                    Save Note
                </button>
            </div>

        </form>
    </div>
@endsection

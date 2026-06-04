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

            <div class="space-y-2">
                <label class="text-xl font-semibold capitalize text-black shrink-0">Category</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                        <div class="w-7 h-7 rounded-lg bg-[#E2CEFC] flex items-center justify-center">
                            <i class="ri-folders-line text-primary text-lg"></i>
                        </div>
                    </div>

                    <select name="category" required
                        class="w-full pl-14 pr-10 py-2.5 bg-white border {{ $errors->has('category') ? 'border-red-500 focus:border-red-500' : 'border-gray-200 focus:border-purple-400' }} rounded-xl text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50/50 focus:outline-none appearance-none cursor-pointer">
                        <option value="">Choose category...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}"
                                {{ old('category') == $category->name ? 'selected' : '' }}>
                                {{ ucfirst($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-400">
                        <i class="ri-arrow-down-s-line text-lg"></i>
                    </div>
                </div>
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <label class="text-xl font-semibold capitalize text-black shrink-0">Note Title</label>
                    <span class="text-[11px] text-gray-400 font-medium" id="titleCount">0/100</span>
                </div>
                <input type="text" name="title" id="noteTitle" maxlength="100" placeholder="Enter note title..."
                    value="{{ old('title') }}"
                    oninput="document.getElementById('titleCount').textContent = this.value.length + '/100'"
                    class="w-full px-4 py-3 bg-white border {{ $errors->has('title') ? 'border-red-500 focus:border-red-500' : 'border-gray-200 focus:border-purple-400' }} rounded-xl text-sm text-gray-800 placeholder:text-gray-300 shadow-sm focus:outline-none transition-colors">

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label class="text-xl font-semibold capitalize text-black shrink-0">Note Content</label>
                <div class="border-2 rounded-xl overflow-hidden shadow-sm transition-colors">
                    <textarea name="body" placeholder="Write your note here..."
                        class="w-full px-4 py-4 min-h-52 bg-white text-sm text-gray-800 placeholder:text-gray-300 focus:outline-none focus:ring-0 border-0 resize-none leading-relaxed block">{{ old('body') }}</textarea>
                </div>

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end pt-2">
                <button type="submit"
                    class="self-start mt-1 inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primary/80 transition">
                    Save Note
                </button>
            </div>

        </form>
    </div>
@endsection

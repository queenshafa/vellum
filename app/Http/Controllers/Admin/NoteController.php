<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.notes.index', compact('category'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.notes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        \App\Models\Note::create($validated);

        return redirect()
            ->route('admin.notes.index')
            ->with('success', 'Note berhasil ditambahkan');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.notes.index', compact('category'));
    }

    // public function edit(string $id)
    // {
    //     //
    // }

    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // public function destroy(string $id)
    // {
    //     //
    // }
}

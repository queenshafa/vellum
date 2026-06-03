<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Category::create($validated);
        
        return redirect()->route('admin.category.index')->with('success', 'Berhasil menambah kategori baru.');

    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.notes.index', compact('category'));
    }

    public function edit($id){
        //mecari data aryawan berdasarkan id
        $category = Category::findOrFail($id);
        return view('admin.categories.category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('admin.categoru.index')
            ->with('success', 'Kategori berhasil diupdate');
    }

    // public function destroy(string $id)
    // {
    //     //
    // }
}

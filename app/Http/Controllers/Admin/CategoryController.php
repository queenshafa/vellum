<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())
            ->get()
            ->map(function ($category) {
                $category->notes_count = \App\Models\Note::where('user_id', Auth::id())
                    ->where('category', $category->name)
                    ->count();
                    
                return $category;
            });
        
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        
        Category::create([
            'name' => trim($validated['name']),
            'user_id' => Auth::id(),
        ]);
        
        return redirect()->route('category.index')->with('success', 'Berhasil menambah kategori baru.');
    }

    public function show($id)
    {
        $category = Category::where('user_id', Auth::id())->findOrFail($id);
        
        return view('admin.notes.index', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::where('user_id', Auth::id())->findOrFail($id);
        
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('user_id', Auth::id())->findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id . ',id,user_id,' . Auth::id(),
        ]);

        $oldName = $category->name;
        $newName = trim($request->name);

        DB::table('notes')
            ->where('user_id', Auth::id())
            ->where('category', $oldName)
            ->update(['category' => $newName]);

        $category->name = $newName;
        $category->save();

        return redirect()->route('notes.index', ['category' => $newName])
            ->with('success', 'Category and all nested notes synced perfectly!');
    }

    public function destroy($id)
    {
        $category = Category::where('user_id', Auth::id())->findOrFail($id);
    
        DB::table('notes')
            ->where('user_id', Auth::id())
            ->where('category', $category->name)
            ->update(['category' => null]);
            
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category and matching notes deleted successfully!');
    }
}
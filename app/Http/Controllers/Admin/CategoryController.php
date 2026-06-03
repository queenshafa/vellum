<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
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
        
        Category::create($validated);
        
        // FIXED: Changed from admin.category.index -> category.index
        return redirect()->route('category.index')->with('success', 'Berhasil menambah kategori baru.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.notes.index', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
        
        // This code below is broken, unreachable, and completely redundant 
        // because we already have a dedicated update() method right below it!
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('admin.category.index')
            ->with('success', 'Kategori berhasil diupdate');
    }

public function update(Request $request, $id)
{
    // 1. Find the target category explicitly by ID
    $category = Category::findOrFail($id);

    // 2. Validate the incoming input name field
    $request->validate([
        'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
    ]);

    $oldName = $category->name;
    $newName = trim($request->name);

    // 3. FORCE update the text strings inside the notes table using a raw DB statement
    DB::table('notes')
        ->where('category', $oldName)
        ->update(['category' => $newName]);

    // 4. Update the actual master category row entry
    $category->name = $newName;
    $category->save();

    // 5. Redirect cleanly to the newly updated URL query string parameter
    return redirect()->route('notes.index', ['category' => $newName])
        ->with('success', 'Category and all nested notes synced perfectly!');
}

    public function destroy($id)
    {
        // 1. Find the target category explicitly by ID or fail gracefully
        $category = Category::findOrFail($id);

        // 2. Clear out the string values in your notes table so they don't get orphaned
        DB::table('notes')
            ->where('category', $category->name)
            ->update(['category' => null]);

        // 3. Delete the master category record row
        $category->delete();

        // 4. Redirect back to the main categories list overview page
        return redirect()->route('category.index')
            ->with('success', 'Category and matching notes detached successfully!');
    }
}
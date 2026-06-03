<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the notes.
     */
    public function index(Request $request)
    {
        $query = Note::query();
        $category = null;

        // Check if the user is filtering notes via URL parameter (?category=Work i guess)
        if ($request->has('category') && $request->category != '') {
            
            // 1. Fetch the category object by its string name so the View can use its properties
            $category = Category::where('name', $request->category)->first();
            
            // 2. Query your actual column layout ('category' string field instead of 'category_id')
            $query->where('category', $request->category);
        }

        // Always fetch the notes based on the evaluated query
        $notes = $query->latest()->get();

        return view('admin.notes.index', compact('notes', 'category'));
    }

    public function pinned(Request $request)
    {
        // Do the exact same safe fallback here
        $query = Note::where('user_id', Auth::id())->where('is_pinned', true);

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        $notes = $query->latest()->get();

        return view('admin.notes.pinned', compact('notes'));
    }

    /**
     * Show the form for creating a new note.
     */
   public function create()
    {
        // 1. Fetch all categories from the database
        $categories = \App\Models\Category::all();

        // 2. Pass them into the form view layout
        return view('admin.notes.create', compact('categories'));
    }

    /**
     * Store a newly created note in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:100',
            'body'     => 'nullable|string',
            'category' => 'nullable|string|max:100',
        ]);

        Note::create([
            'user_id'   => Auth::id(),
            'title'     => $request->title,
            'body'      => $request->body,
            'category'  => $request->category,
            'is_pinned' => false,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }

    /**
     * Display the specified note.
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        abort_if($note->user_id !== Auth::id(), 403);

        $previousNote = Note::where('user_id', Auth::id())
                            ->where('id', '<', $note->id)
                            ->orderBy('id', 'desc')
                            ->first();

        $nextNote = Note::where('user_id', Auth::id())
                        ->where('id', '>', $note->id)
                        ->orderBy('id', 'asc')
                        ->first();

        // FIXED: points to admin.notes.view matching your file structure tree!
        return view('admin.notes.view', compact('note', 'previousNote', 'nextNote'));
    }

    /**
     * Show the form for editing the specified note.
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        
        abort_if($note->user_id !== Auth::id(), 403);

        return view('admin.notes.edit', compact('note'));
    }

    /**
     * Update the specified note in storage.
     */
    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        
        abort_if($note->user_id !== Auth::id(), 403);

        $request->validate([
            'title'    => 'required|string|max:100',
            'body'     => 'nullable|string',
            'category' => 'nullable|string|max:100',
        ]);

        $note->update([
            'title'    => $request->title,
            'body'     => $request->body,
            'category' => $request->category,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    /**
     * Remove the specified note from storage.
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        
        abort_if($note->user_id !== Auth::id(), 403);
        
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }

    /**
     * Toggle the pinned status of a note.
     */
    public function togglePin($id)
    {
        $note = Note::findOrFail($id);
        
        abort_if($note->user_id !== Auth::id(), 403);

        $note->update([
            'is_pinned' => !$note->is_pinned
        ]);

        return back()->with('success', $note->is_pinned ? 'Note pinned!' : 'Note unpinned!');
    }
}
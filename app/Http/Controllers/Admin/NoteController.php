<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index(Request $request) {
        $categories = Category::where('user_id', Auth::id())->get();
        $category = null;

        $query = Note::where('user_id', Auth::id());

        if ($request->filled('category')) {
            $category = Category::where('user_id', Auth::id())
                                ->where('name', $request->category)  // matching by name since you pass name
                                ->first();

            $query->where('category', $request->category);
        }

        $notes = $query->orderBy('is_pinned', 'desc')->latest()->get();

        return view('admin.notes.index', compact('notes', 'categories', 'category'));
    }

    public function pinned(Request $request) {
        $query = Note::where('user_id', Auth::id())->where('is_pinned', true);

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        $notes = $query->latest()->get();

        return view('admin.notes.pinned', compact('notes'));
    }

    public function create() {
        $categories = Category::where('user_id', Auth::id())->get();

        return view('admin.notes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|exists:categories,name,user_id,' . Auth::id(), 
            'title'    => 'required|string|max:100',               
            'body'     => 'required|string|min:5',                 
        ], [
            'category.required' => 'Category is required.',
            'category.exists'   => 'Selected category is invalid.',
            'title.required'    => 'Title is required.',
            'title.max'         => 'Title is too long. Max 100 characters.',
            'body.required'     => 'Content is required.',
            'body.min'          => 'Fill at least 5 words.',
        ]);

        Note::create([
            'user_id'  => Auth::id(),
            'category' => $validated['category'],
            'title'    => $validated['title'],
            'body'     => $validated['body'],
        ]);

        return redirect()->route('notes.index')->with('success', 'Note successfully captured!');
    }

    public function show($id) {
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

        return view('admin.notes.view', compact('note', 'previousNote', 'nextNote'));
    }

    public function edit($id) {
        $note = Note::where('user_id', Auth::id())->findOrFail($id);
        $categories = Category::where('user_id', Auth::id())->get();

        return view('admin.notes.edit', compact('note', 'categories'));
    }

    public function update(Request $request, $id) {
        $note = Note::findOrFail($id);
        abort_if($note->user_id !== Auth::id(), 403);
        $request->validate([
            'title'    => 'required|string|max:100',
            'body'     => 'nullable|string',
            'category' => 'nullable|string|max:100|exists:categories,name,user_id,' . Auth::id(),
        ]);

        $note->update([
            'title'    => $request->title,
            'body'     => $request->body,
            'category' => $request->category,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    public function destroy($id) {
        $note = Note::findOrFail($id);
        abort_if($note->user_id !== Auth::id(), 403);
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }

    public function togglePin($id)
    {
        $note = Note::findOrFail($id);
        abort_if($note->user_id !== Auth::id(), 403);
        $note->update([
            'is_pinned' => !$note->is_pinned
        ]);

        return back()->with('success', $note->is_pinned ? 'Note pinned!' : 'Note unpinned!');
    }

    public function dashboard()
    {
        $userId = Auth::id();
        $totalNotes = Note::where('user_id', $userId)->count();
        $pinnedNotes = Note::where('user_id', $userId)->where('is_pinned', true)->count();
        $totalCategories = Category::where('user_id', $userId)->count();
        $categories = Category::where('user_id', $userId)->get();

        $notes = Note::where('user_id', $userId)
            ->orderBy('is_pinned', 'desc')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('totalNotes', 'pinnedNotes', 'totalCategories', 'categories', 'notes'));
    }
}
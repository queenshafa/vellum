<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        // Start a query based on the logged-in user's relationship
        $query = Auth::user()->notes();

        // If a folder/category parameter exists in the URL, filter the notes
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Gather the filtered notes, keeping pinned items at the top
        $notes = $query->orderBy('is_pinned', 'desc')
                       ->latest()
                       ->get();

        return view('admin.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new note.
     */
    public function create()
    {
        return view('admin.notes.create');
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

        // Create the record explicitly using data from the Request object
        Note::create([
            'user_id'   => Auth::id(), // Ties the note directly to the active session user
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
        
        // Prevent cross-user access snooping
        abort_if($note->user_id !== Auth::id(), 403);

        // Fetch the previous note (The first note created JUST BEFORE this one)
        $previousNote = Note::where('user_id', Auth::id())
                            ->where('id', '<', $note->id)
                            ->orderBy('id', 'desc')
                            ->first();

        // Fetch the next note (The first note created JUST AFTER this one)
        $nextNote = Note::where('user_id', Auth::id())
                        ->where('id', '>', $note->id)
                        ->orderBy('id', 'asc')
                        ->first();

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

        // Explicit assignment update block matching your style preference
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

    /**
 * Display a listing of only the pinned notes.
 */
    public function pinned(Request $request)
    {
        // Start with the logged-in user's notes relationship query scope
        $query = Auth::user()->notes()->where('is_pinned', true);

        // If your pin notes layout handles category switching down the line, catch it here
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Get latest pinned items
        $notes = $query->latest()->get();

        // Points right to your newly-created pinned blade file
        return view('admin.notes.pinned', compact('notes'));
    }
}
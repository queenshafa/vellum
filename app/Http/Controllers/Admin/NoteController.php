<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.notes.index');
    }

    public function create()
    {
        return view('admin.notes.index');
    }

    public function store(Request $request)
    {
        // logic simpan note
    }

    public function show(string $id)
    {
        return view('admin.notes.view');
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

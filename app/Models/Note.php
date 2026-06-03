<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];
//     $validated = $request->validate([
//     'title' => 'required',
//     'content' => 'required',
//     'category_id' => 'required'
// ]);
}

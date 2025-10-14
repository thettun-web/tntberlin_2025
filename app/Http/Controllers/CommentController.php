<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'content' => 'required|string|max:2000',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);
        Comment::create([
            'article_id' => $request->article_id,
            'content' => $request->content,
            'author_id' => auth()->id(),
            'rating'     => $request->rating,
        ]);

        return back()->with('success', 'Thank you for your review!');
    }
}

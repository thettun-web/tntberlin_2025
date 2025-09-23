<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required',
            'content' => ['required', 'string'],
        ]);
        Comment::create([
            'article_id' => $request->article_id,
            'author' => 'random name',
            'content' => $request->content,
        ]);

        return redirect()->route('articles.show', $request->article_id);
    }
}

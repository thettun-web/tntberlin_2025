<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // fetch articles from DB
        $articles = \App\Models\Article::all();

        //dd($articles); // to analyse what you loaded

        // send articles to the view
        // return response
        return view('articles.index', compact('articles'));
    }
    public function show($id)
    {
        // fetch the specific article that is requested
        $article = \App\Models\Article::find($id);

        // send article to its view
        // return response
        return view('articles.show', compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50', 'min:10'],
            'content' => ['required', 'string'],
        ]);

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => 1,
        ]);
        return redirect()->route('articles.show', $article->id);
    }
    public function edit($id)
    {
        // fetch the specific article that is requested
        $article = \App\Models\Article::find($id);

        // send article to edit
        // return response
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {
        // Validate the data
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:50', 'min:10'],
            'content' => ['required', 'string'],
        ]);

        // Load the article from MODEL
        $article = Article::findOrFail($id);

        // Update the changes
        $article->update($validatedData);

        // Redirect to show the updated article
        return redirect()->route('articles.show', $article->id);
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}

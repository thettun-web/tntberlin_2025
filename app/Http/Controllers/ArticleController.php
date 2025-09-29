<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // fetch articles from DB
        $articles = Article::all();

        //dd($articles); // to analyse what you loaded

        // send articles to the view
        // return response
        return view('articles.index', compact('articles'));
    }
    public function show($id)
    {
        // fetch the specific article that is requested
        $article = Article::find($id);

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
            'author_id' => auth()->user()->id,
        ]);
        return redirect()->route('articles.show', $article->id);
    }
    public function edit($id)
    {
        // fetch the specific article that is requested
        $article = Article::find($id);

        // Authorization Check
        if (auth()->user()->cannot('manage-article', $article)) {
            abort(403);
        }
        // return response
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {
        // Load the article from MODEL
        $article = Article::findOrFail($id);

        // Authorization Check
        if (auth()->user()->cannot('manage-article', $article)) {
            abort(403);
        }

        // Validate the data
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:50', 'min:10'],
            'content' => ['required', 'string'],
        ]);

        // Update the changes
        $article->update($validatedData);

        // Redirect to show the updated article
        return redirect()->route('articles.show', $article->id);
    }
    public function destroy($id)
    {
        $article = Article::find($id);

        // Authorization Check
        if (auth()->user()->cannot('manage-article', $article)) {
            abort(403);
        }
        $article->delete();
        return redirect()->route('articles.index');
    }
}

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
}

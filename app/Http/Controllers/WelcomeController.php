<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
//        dd(vars: 'stop from index in welcomecontroller');
        $latestArticles = Article::latest()->take(3)->get();
        return view('welcome',['latestArticles' => $latestArticles]);
    }
}

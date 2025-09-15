<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // load the needed data
        $authors = \App\Models\User::all();
        // send to view + return response
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = User::find($id);
        return view('authors.show', compact('author'));
    }
}

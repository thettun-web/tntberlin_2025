<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // Get all users WHERE the 'is_admin' column is false
        $authors = User::where('is_admin',false)->get();
        // send to view + return response
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $author = User::find($id);
        return view('authors.show', compact('author'));
    }
}

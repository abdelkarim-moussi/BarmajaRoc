<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $article = new Article();
    $article->user_id = Auth::id();
    $article->title = $request->title;
    $article->content = $request->content;

    // Handle file upload for cover image
    if ($request->hasFile('cover')) {
        $filePath = $request->file('cover')->store('covers', 'public');
        $article->cover = $filePath;
    }

    $article->save();

    return redirect()->route('articles.index')->with('success', 'Article created successfully.');
}

    public function index()
    {
        $articles = Article::with('user')->latest()->get();
        return view('articles.index', compact('articles'));
    }
}

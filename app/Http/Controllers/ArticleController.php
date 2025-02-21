<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show(string $id)
    {
        $article  = Article::with('commentaires')->findOrFail($id);
        // dd($article);
        return view('detaile',compact('article'));
    }
    public function destroy(string $id)
    {
        $article  = Article::find($id);

        if ($article) {
            $article->delete();
        }
        return redirect('/article.index');
    }
    
}

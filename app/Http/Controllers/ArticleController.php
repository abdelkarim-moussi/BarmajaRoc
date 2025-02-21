<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    

    public function updateArticle(Request $request){
        $validate = $request->validate([
            'title'=>'required | string',
            'content'=>'required | text',
            'cover'=>'nullable'
        ]);

        Article::create($validate);
        redirect('articles.index');
    }
}

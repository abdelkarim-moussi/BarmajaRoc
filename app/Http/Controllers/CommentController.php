<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function addComment(Request $request){
        $validate = $request->validate([
            'content' => 'required|text',
        ]);

        dd($validate);
        Comment::create($validate);
        redirect('articles/show');
    }
}

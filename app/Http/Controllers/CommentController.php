<?php

namespace App\Http\Controllers;

use App\blog;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'body'=>'required',
        ]);

        $comment = new Comment;
        $comment->body = $request->input('body');
        $comment->blog_id = $request->input('blog_id');
        $comment->user_id = Auth::id();
        $comment->save();
//      dd($request->all());
        return redirect('/blog/detail/'.$request->input('blog_id'))->with('success','Comment success');
    }
}

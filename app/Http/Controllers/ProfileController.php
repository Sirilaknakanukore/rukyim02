<?php

namespace App\Http\Controllers;

use App\blog;
use App\Comment;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function show(){
        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::all()->where('user_id',Auth::id());
        return view('home.history',compact('blogs'));
    }
    public function detail($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::find($id);
        $blogs->user_id = Auth::id();
        $comments = Comment::all();
        $exitslike = Like::where('user_id',Auth::id())->where('blog_id',$id)->first();
        $likecount = Like::where('blog_id',$id)->count();

        return view('home.detail',compact('blogs','comments','likecount','exitslike'));
    }
}

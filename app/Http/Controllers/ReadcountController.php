<?php

namespace App\Http\Controllers;

use App\Read;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadcountController extends Controller
{
    public function update(Request $request, $id)
    {
        $blogs= new Read;
        $blogs->user_id = Auth::id();
        $blogs->blog_id = $id;
        $blogs->save();
        return redirect('/blog/detail/'.$blogs->blog_id)->with('success','EventGroup');
    }

    public function show($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $read = Read::where('user_id',Auth::id())->where('blog_id',$id)->first();
        return view('blog.show',compact('read'));
    }

    public function showprofile($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $countblog = Read::where('activity_id',$id)->count();
        return redirect('home.profile',compact('countblog'));
    }



}

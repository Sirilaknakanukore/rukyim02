<?php

namespace App\Http\Controllers;

use App\blog;
use App\Comment;
use App\FormMultipleUpload;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string|max:150',
            'description'=>'required',
            'tags'=>'required',
            'cover_image'=>'image|max:1999'
        ]);
        $filenameWithExt = $request -> file('cover_image')->getClientOriginalName();

        //
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        //
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        //20190310170158_1.jpg
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStore = date('YmdHis').'_'.$filename.'.'.$extension;

        //
        $request->file('cover_image')->move('uploads/album_covers',$filenameToStore);


        $blog = new blog;
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->tags = implode(",", $request->get('tags'));
        $blog->user_id = Auth::id();
        $blog->cover_image = $filenameToStore;
        $blog->save();

        return redirect('/blog')->with('success','blog Create');
    }

    public function show(){

        //  SELECT * FROM photo WHERE album_id =$id
        $data = FormMultipleUpload::all();
        $blogs = blog::all();
        return view('blog.show',compact('blogs','data'));
    }

    public function showsurvey(){

        //  SELECT * FROM photo WHERE album_id =$id
        $data = FormMultipleUpload::all();
        $blogs = DB::table('backsurveys')->where('backsurveys.user_id','=',Auth::id())
            ->join('blogs','backsurveys.description','=','blogs.tags')
            ->get();

//        $blogs = blog::all();
        return view('blog.showsurvey',compact('blogs','data'));
    }

    public function detail($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::find($id);
        $blog = json_decode($blogs);
        $tagblogs = DB::table('blogs')->select('*')->where('id','!=',$id)->where('tags','=',$blog->tags)->limit(3)->get();

//        dd($tagblogs);

        $blogs->user_id = Auth::id();
        $comments = Comment::where('blog_id',$id)->get();
        $exitslike = Like::where('user_id',Auth::id())->where('blog_id',$id)->first();
        $likecount = Like::where('blog_id',$id)->count();

        return view('blog.detail',compact('blogs','comments','likecount','exitslike','tagblogs'));
    }
    public function destroy($id) {
        $blog = blog::find($id);
        $blog->delete();
        return redirect('/blog/'.$blog->blog_id)->with('success','blog','blog Delete');
    }

}

<?php


namespace App\Http\Controllers;

use App\blog;
use App\Like;
use App\Utils\ErrorHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function update(Request $request, $id)
    {

        if (!is_numeric($id)) {
            abort('404');
        }
        if(empty(blog::find($id))){
            return ErrorHelper::message(['ไม่พบกิจกรรมนี้']);
        }
        $blogs = new Like;
        $blogs->user_id = Auth::id();
        $blogs->blog_id = $id;
        $blogs->save();

        return redirect('/blog/detail/'.$blogs->blog_id)->with('success','Liked');
    }
}

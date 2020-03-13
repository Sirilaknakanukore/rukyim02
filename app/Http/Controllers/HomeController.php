<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\blog;
use App\Event;
use App\FormMultipleUpload;
use App\Like;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $blogs = DB::table('blogs')->select('*')->orderBy('id', 'DESC')->limit(2)->get();


        $activities = DB::table('activities')->orderBy('id', 'DESC')->select('*')->limit(2)->get();
        $count = Event::count();
        $likecount = Like::count();
        $data = FormMultipleUpload::all();
        return view('homepage.index',compact('blogs','activities','count','likecount','data'));
    }
}

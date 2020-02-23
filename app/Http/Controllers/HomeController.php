<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\blog;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $blogs = DB::table('blogs')->select('*')->limit(2)->get();
        $activities = DB::table('activities')->select('*')->limit(2)->get();
        $count = Event::count();
        return view('homepage.index',compact('blogs','activities','count'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $blogs = DB::table('blogs')->select('*')->limit(2)->get();
        return view('homepage.index',compact('blogs'));
    }
}

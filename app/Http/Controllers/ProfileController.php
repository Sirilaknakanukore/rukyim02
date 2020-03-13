<?php

namespace App\Http\Controllers;

use App\Activity;
use App\blog;
use App\Comment;
use App\Event;
use App\FormMultipleUpload;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
//
    //
    public function show(){
        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::all()->where('user_id',Auth::id());
        return view('home.history',compact('blogs'));
    }
    public function showactivity(){
        //  SELECT * FROM photo WHERE album_id =$id
        $activities = DB::table('events')->where('events.user_id','=',Auth::id())
            ->join('activities','events.activity_id','=','activities.id')
            ->get();
//        dd($activities);
//        $activity = Activity::all();
        return view('home.hisactivity',compact('activities'));
    }
    public function showgroup(){
        //  SELECT * FROM photo WHERE album_id =$id

        $groups = DB::table('groupcounts')->where('groupcounts.user_id','=',Auth::id())
            ->join('groups','groupcounts.group_id','=','groups.id')
           ->get();
//        dd($groups);
//        $activity = Activity::all();
        return view('home.hisgroup',compact('groups'));
    }
}

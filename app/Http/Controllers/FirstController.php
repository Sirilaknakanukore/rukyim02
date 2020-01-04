<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\backsurvey;
use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function create(){

        return view('backhome.homesur');
    }
    public function store(Request $request){

        $this->validate($request,[
            'cover_avatar'=>'image|max:1999'
        ]);
        $filenameWithExt = $request -> file('cover_avatar')->getClientOriginalName();

        //
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        //
        $extension = $request->file('cover_avatar')->getClientOriginalExtension();

        //20190310170158_1.jpg
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStore = date('YmdHis').'_'.$filename.'.'.$extension;

        //
        $request->file('cover_avatar')->move('uploads/cover_avatar',$filenameToStore);


        $avatar = new Avatar;
        $avatar->user_id = Auth::id();
        $avatar->cover_avatar = $filenameToStore;
        $avatar->save();

        return redirect('/home')->with('success','avatar Create');
    }
    public function show(){

        //  SELECT * FROM photo WHERE album_id =$id
        $avatars = Avatar::all();
        return view('home.home',compact('avatars'));
    }
    public function profile(){

        //  SELECT * FROM photo WHERE album_id =$id
        $avatars = Avatar::all();
        $backsurveys = backsurvey::all()->where('user_id',Auth::id());;
        $backsurveys->user_id = Auth::id();

        return view('home.profile',compact('avatars','backsurveys'));
    }
    public function history(){

        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::all();
        return view('home.history',compact('blogs'));
    }

}

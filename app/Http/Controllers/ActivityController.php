<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function create(){

        return view('activity.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string|max:150',
            'description'=>'required',
            'activity_image'=>'image|max:1999'
        ]);
        $filenameWithExt = $request -> file('activity_image')->getClientOriginalName();

        //
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        //
        $extension = $request->file('activity_image')->getClientOriginalExtension();

        //20190310170158_1.jpg
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStore = date('YmdHis').'_'.$filename.'.'.$extension;

        //
        $request->file('activity_image')->move('uploads/activity_covers',$filenameToStore);


        $activity = new Activity;
        $activity->name = $request->input('name');
        $activity->description = $request->input('description');
        $activity->activity_image = $filenameToStore;
        $activity->save();

        return redirect('/activity')->with('success','activity Create');
    }

    public function show(){

        //  SELECT * FROM photo WHERE album_id =$id
        $activities = Activity::all();
        return view('activity.show',compact('activities'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function create(){

        return view('activity.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string|max:150',
            'description'=>'required',
            'date'=>'required',
            'location'=>'required',
            'time'=>'required',
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
        $activity->date = $request->input('date');
        $activity->location = $request->input('location');
        $activity->time = $request->input('time');
        $activity->tags = implode(",", $request->get('tags'));
        $activity->activity_image = $filenameToStore;
        $activity->save();

        return redirect('/activity')->with('success','activity Create');
    }

    public function show(){

        //  SELECT * FROM photo WHERE album_id =$id
//        $data = DB::table('profiles')->where('user_id','=',Auth::id())
//            ->join('form_multiple_uploads as fmu','profiles.image','=','fmu.id')
//            ->get();
        $activities = Activity::orderBy('id', 'DESC')->get();
        $count = Event::where('user_id',Auth::id())->count();
        return view('activity.show',compact('activities','count'));
    }
    public function showsurvey(){

        //  SELECT * FROM photo WHERE album_id =$id

//        $activities = Activity::all();
        $activities = DB::table('backsurveys')->where('backsurveys.user_id','=',Auth::id())
            ->join('activities','backsurveys.description','=','activities.tags')
            ->get();
        $count = Event::count();
        return view('activity.showsurvey',compact('activities','count'));
    }
    public function detail($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $activities = Activity::find($id);
        $exits = Event::where('user_id',Auth::id())->where('activity_id',$id)->first();
        $count = Event::where('activity_id',$id)->count();

        return view('activity.detail',compact('activities','exits','count'));
    }
}

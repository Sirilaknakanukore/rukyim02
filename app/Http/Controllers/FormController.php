<?php

namespace App\Http\Controllers;

use App\backsurvey;
use App\blog;
use App\FormMultipleUpload;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    //


    public function index()
    {
        $data = FormMultipleUpload::all();
        return view ('backhome.Form_upload', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);  // your folder path
                $data[] = $name;
            }
        }

        $Upload_model = new FormMultipleUpload;
        $Upload_model->filename = json_encode($data);
        $Upload_model->save();
        return back()->with('success', 'Your images has been upload successfully');
    }

    public function show()
    {
        $data = FormMultipleUpload::all();
//        dd(json_decode($data));
        return view ('home.home', compact('data'));

    }
    public function profile(){

        //  SELECT * FROM photo WHERE album_id =$id
        $profile = Profile::all()->where('user_id',Auth::id());
        $data = DB::table('profiles')->where('user_id','=',Auth::id())
            ->join('form_multiple_uploads as fmu','profiles.image','=','fmu.id')
            ->get();
//        dd(json_decode($data));
        $backsurveys = backsurvey::all()->where('user_id',Auth::id());
        $backsurveys->user_id = Auth::id();

        return view('home.profile',compact('profile','backsurveys','data'));
    }

    public function history(){
        //  SELECT * FROM photo WHERE album_id =$id
        $blogs = blog::all();
        return view('home.history',compact('blogs'));
    }
}

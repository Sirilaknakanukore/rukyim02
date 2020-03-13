<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\backsurvey;
use App\FormMultipleUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{

    public function store(Request $request)
    {

        $this->validate($request,[
            'description'=>'required',
        ]);

        $backsurvey = new backsurvey;
        $backsurvey->user_id = Auth::id();
        $backsurvey->description = implode(",", $request->get('description'));
        $backsurvey->save();
//      dd($request->option());
        return redirect('/home')->with('success','backsurvey Create');
    }
    public function show(){

    //  SELECT * FROM photo WHERE album_id =$id
    $backsurveys = backsurvey::all()->where('user_id',Auth::id())->first();
    return view('home.survey',compact('backsurveys'));
}

}

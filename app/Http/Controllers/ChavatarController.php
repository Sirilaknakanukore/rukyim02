<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChavatarController extends Controller
{
    //
    public function store(Request $request)
    {
//        dd($request->input('image_id'));

        $profile = new Profile;
        $profile->user_id = Auth::id();
        $profile->image = $request->input('image_id');
        $profile->save();
//      dd($request->option());
        return redirect('/profile')->with('success','backsurvey Create');
    }


}

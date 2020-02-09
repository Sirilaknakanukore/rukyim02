<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventactivityController extends Controller
{
    public function update(Request $request, $id)
    {
        $activities= new Event;
        $activities->user_id = Auth::id();
        $activities->activity_id = $id;
        $activities->save();

        return redirect('/activity/detail/'.$activities->activity_id)->with('success','EventGroup');
    }
}

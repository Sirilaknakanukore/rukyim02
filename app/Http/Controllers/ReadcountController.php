<?php

namespace App\Http\Controllers;

use App\Read;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadcountController extends Controller
{
    public function update(Request $request, $id)
    {
        $blogs= new Read;
        $blogs->user_id = Auth::id();
        $blogs->blog_id = $id;
        $blogs->save();
        return redirect('/blog/detail/'.$blogs->blog_id)->with('success','Read');
    }

}

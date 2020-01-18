<?php

namespace App\Http\Controllers;

use App\Comphoto;
use App\Group;
use App\Photo;
use Illuminate\Http\Request;

class ComphotoController extends Controller
{
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'body'=>'required',
        ]);

//        $group_id = $request->input('group_id');

        $comphoto = new Comphoto;
        $comphoto->body = $request->input('body');
        $comphoto->photo_id = $request->input('photo_id');
        $comphoto->save();
//      dd($request->all());
        return redirect('/group/'.$request->input('group_id'))->with('success','Commentphoto success');
    }
}

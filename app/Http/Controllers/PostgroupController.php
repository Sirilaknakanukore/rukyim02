<?php

namespace App\Http\Controllers;

use App\Gpost;
use App\Group;
use App\Photo;
use Illuminate\Http\Request;

class PostgroupController extends Controller
{
    //
    public function create($group_id) {
        if(empty($group_id) || !is_numeric($group_id)) {
            abort('404');
        }
        return view('gpost.create',compact('group_id'));
    }


    public function store(Request $request) {
        $this->validate($request,[
            'description'=>'required',
            'photo'=>'image|max:1999'
        ]);

        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $request->file('photo')->move('uploads/photos/'.$request->input('group_id'),$filenameToStore);
        $groups = new Photo;
        $groups->group_id = $request->input('group_id');
        $groups->description = $request->input('description');
        $groups->photo = $filenameToStore;
        $groups->size = 1000;
        $groups->save();

        return redirect('/group/'.$request->input('group_id'))->with('success','Album created');
    }

    public function show($id){
        $photo = Photo::find($id);
        return view('gpost.show',compact('photo'));
    }

    public function destroy($id) {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect('/group/'.$photo->group_id)->with('success','photo','Photo Delete');
    }
}

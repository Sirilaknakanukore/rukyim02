<?php

namespace App\Http\Controllers;

use App\Comphoto;
use App\Group;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    //
    public function create(){

        return view('group.create');
    }
    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string|max:150',
            'description'=>'required',
            'cover_image'=>'image|max:1999'
        ]);
        $filenameWithExt = $request -> file('cover_image')->getClientOriginalName();

        //
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        //
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        //20190310170158_1.jpg
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStore = date('YmdHis').'_'.$filename.'.'.$extension;

        //
        $request->file('cover_image')->move('uploads/group_covers',$filenameToStore);


        $group = new Group;
        $group->name = $request->input('name');
        $group->description = $request->input('description');
        $group->cover_image = $filenameToStore;
        $group->save();

        return redirect('/group')->with('success','group Create');
    }

    public function show(){

        //  SELECT * FROM photo WHERE album_id =$id
        $groups = Group::all();
        return view('group.show',compact('groups'));
    }
    public function detail($id){

        //  SELECT * FROM photo WHERE album_id =$id
        $groups = Group::find($id);
        return view('group.detail',compact('groups'));
    }
    public function search(Request $request){

        $search = $request->get('search');
        $groups = Group::where('name','like','%'.$search.'%') ->paginate(5)->setpath('');


        return view('group.show',['groups'=>$groups]);
    }
}

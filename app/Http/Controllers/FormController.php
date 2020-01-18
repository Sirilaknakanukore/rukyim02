<?php

namespace App\Http\Controllers;

use App\FormMultipleUpload;
use Illuminate\Http\Request;

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

}

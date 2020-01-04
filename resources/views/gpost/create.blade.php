@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>
   <div class="container">
            <form method="POST" action="/photos/store" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card mt-2" style="border: none;">
                    <div class="card-body" style="border: none;">
                        <div class="form-group" style="font-family:'Pridi', serif; ">
                            <label for="body" class="control-label">เขียนโพสต์</label>
                            <textarea class="form-control" name="description" cols="50" rows="10" id="body" placeholder="เขียนโพสต์"></textarea>
                        </div>
                    </div>
                </div>
<br>
                <div class="form-group" style="border:none;">
                    <label for="due" class="control-label" style="font-family:'Pridi', serif;  ">ใส่ภาพประกอบ</label>
                    <input class="form-control" name="photo" type="file" style="border: none;">
                    <input type="hidden" name="group_id" value="{{$group_id}}">
                </div>
                <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >โพสต์</button>
            </form>
   </div>

@endsection
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="container">
        <br>
        <form method="POST" action="/backend/avatar/store" enctype="multipart/form-data">
            {{csrf_field()}}
            {{--<div class="form-group" style="font-family:'Pridi',serif;">--}}
                {{--<label for="text" class="control-label">ใส่ข้อความ</label>--}}
                {{--<input class="form-control" name="description" type="text" id="text" placeholder="หัวข้อเรื่อง">--}}
            {{--</div>--}}
            <div class="form-group" style="font-family:'Pridi',serif;">
                <label for="due" class="control-label">ใส่ภาพหน้าปก</label>
                <input class="form-control" name="cover_avatar" type="file">
            </div>
            <br>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >เขียนบันทึกเสร็จสิ้น</button>
        </form>
    </div>


@endsection
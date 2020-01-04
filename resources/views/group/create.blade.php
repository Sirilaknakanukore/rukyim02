<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/blog.css');?>">
    <br>
    <br>
    <div class="container">
        <br>
        <form method="POST" action="/group/store" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">ชื่อกลุ่ม</label>
                <input style="border: none;" class="form-control" name="name" type="text" id="text" placeholder="หัวข้อเรื่อง">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif;">
                <label for="due" class="control-label">ใส่ภาพหน้าปก</label>
                <input style="border: none;" class="form-control" name="cover_image" type="file">
            </div>
            {{--img--}}
            <br>
            <div class="card mt-2" style="border: none;">
                <div class="card-body" style="border: none;">
                    <div class="form-group" style="font-family:'Pridi', serif; ">
                        <label for="body" class="control-label">เขียนคำเชิญชวน</label>
                        <textarea class="form-control" name="description" cols="50" rows="5" id="body" placeholder="คำเชิญชวน"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >เขียนบันทึกเสร็จสิ้น</button>
        </form>
    </div>
</body>


@endsection
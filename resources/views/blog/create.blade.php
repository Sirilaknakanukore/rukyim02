<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/blog.css');?>">
    <br>
    <br>
    <div class="container">
        <br>
        <form method="POST" action="/blog/store" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">ชื่อหัวข้อ</label>
                <input style="border: none;" class="form-control" name="name" type="text" id="text" placeholder="หัวข้อเรื่อง">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif;">
                <label for="due" class="control-label">ใส่ภาพหน้าปก</label>
                <input style="border: none;" class="form-control" name="cover_image" type="file">
            </div>

            {{--img--}}
            <div class="card mt-2" style="border: none;">
                <div class="card-body" style="border: none;">
                    <div class="form-group" style="font-family:'Pridi', serif; ">
                        <label for="body" class="control-label">เล่าเรื่องราวของคุณ</label>
                        <textarea class="form-control" name="description" cols="50" rows="10" id="body" placeholder="เล่าเรื่องราว"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <label for="text" class="control-label" style="font-family:'Pridi',serif;">เพิ่ม tag ที่เกี่ยวข้องกับบทความของคุณ</label>
            <div class="card mt-2" style="border: none;">
                <div class="card-body" style="border: none;" >
                    <div id="tags" class="tags-container">
                        <span style="font-family:'Pridi', serif;" class="tag">ติดแท็กเรื่องเล่า</span>
                        <input style="border: none;" id="search" name="tags" type="text"/>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >เขียนบันทึกเสร็จสิ้น</button>
        </form>
    </div>
</body>


@endsection
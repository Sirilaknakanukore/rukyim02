<body style="background-color: #fbf5e3;">
@extends('layouts.adminapp')
@section('content')
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/blog.css');?>">
    <br>
    <br>
    <div class="container">
        <br>
        <form method="POST" action="/activity/store" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">กิจกรรม</label>
                <input style="border: none;" class="form-control" name="name" type="text" id="text" placeholder="หัวข้อเรื่อง">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif;">
                <label for="due" class="control-label">ภาพกิจกรรม</label>
                <input style="border: none;" class="form-control" name="activity_image" type="file">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">วันเข้าร่วมกิจกรรม</label>
                <input style="border: none;" class="form-control" name="date" type="text" id="text" placeholder="วันเข้าร่วมกิจกรรม">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">สถานที่</label>
                <input style="border: none;" class="form-control" name="location" type="text" id="text" placeholder="สถานที">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">เวลา</label>
                <input style="border: none;" class="form-control" name="time" type="text" id="text" placeholder="เวลา">
            </div>

            {{--img--}}
            <div class="card mt-2" style="border: none;">
                <div class="card-body" style="border: none;">
                    <div class="form-group" style="font-family:'Pridi', serif; ">
                        <label for="body" class="control-label">รายละเอียดกิจกรรม</label>
                        <textarea class="form-control" name="description" cols="50" rows="10" id="body" placeholder="รายละเอียดกิจกรรม"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >เขียนบันทึกเสร็จสิ้น</button>
        </form>
    </div>
    <br>
    <br>
</body>


@endsection
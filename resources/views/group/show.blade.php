<body style="background-color: #fbf5e3;">
<br>
<br>
<img style="width: 100%" src="<?php echo asset('assets/images/imgg-01.jpg'); ?>">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <form class="form-inline" action="/group" method="get" style="margin-top: 20px;">
            <div class="wrap" style="  width: 70%;position: absolute;left: 50%;transform: translate(-50%, -50%);" >
                <div class="search" style=" width: 100%; position: relative; display: flex;" >
                    <input type="search" name="search" class="searchTerm" placeholder="ค้นหา" style=" width: 100%;
  border: 4px solid #F38644;border-right: none;padding: 5px;height: 50px;border-radius: 40px 0 0 40px;outline: none;
  color: #F38644; font-family:'Pridi', serif; ">
                    <button type="submit" class="searchButton" style=" width: 60px;
  height: 50px;border: 1px solid #F38644;background: #F38644;text-align: center;color: #fff;border-radius: 0 40px 40px 0;cursor: pointer;font-size: 20px;">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-md-7 col-9" style="margin: 0 auto;"><a href="/group/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#F38644; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">+ สร้างกลุ่ม </a></div>
        </div>
        <br>
        <div class="row">
            @if(!empty($groups))
                @foreach($groups as $group)
                    <div class="col-md-6" >
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/group_covers/{{$group->cover_image}}" alt="" style="width: 100%;">
                                    </div>

                                    <form class="card-body" action="/blog/{{$group->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$group->name}}</h4>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{$group->description}} </h6>

                                        <hr style="color: black;">

                                        <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;"> ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                                        <br>
                                        <div class="col-md-6 col-8" style=" margin: 0 auto;"><a href="group/{{$group->id}}"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#6B84B5; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">เข้าร่วม </a></div>
                                    </form>

                                </div>

                            </div>
        </div>
        <br>

        @endforeach
        @endif
    </div>

@endsection
</body>


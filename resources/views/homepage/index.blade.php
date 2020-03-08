<br>
<br>

<img style="width: 100%" src="<?php echo asset('assets/images/imgg-01.png'); ?>">

<div class="row">
    <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="blog/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#5bb298; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">แบ่งปันประสบการณ์ <i class="fas fa-pencil-alt"></i></a></div>
</div>
<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
        <div class="card-deck">
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 1.png');?>"></center>
                    <h5 class="card-title"style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- โพสต์ -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">เขียนเรื่องเล่าหรือแบ่งปันประสบกาณ์ให้ผู้อื่น</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 2.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กลุ่ม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">พูดคุยแลกเปลี่ยนข้อมูลต่างๆ หรือปรึกษาพูดคุยกับผู้สนใจเรื่องเดียวกัน</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 3.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กิจกรรม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">ข้อมูลข่าวสารเกี่ยวกับกิจกรรมต่างๆ และกิจกรรมที่เราสนใจ</h6>
                </div>
            </div>
        </div>
        </div>
            <br><br>
          <h6 style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e; font-size: 25px;">เรื่องเล่ายอดนิยม</h6>
            {{--new blog--}}
            <div class="row">
            @if(!empty($blogs))
                @foreach($blogs as $blog)
                    <div class="col-md-6" >
                        <a href="blog/detail/{{$blog->id}}" style="text-decoration: none;">
                            <div class="card-body " style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/album_covers/{{$blog->cover_image}}" alt="" style="width: 100%;">
                                    </div>
                                    <form class="card-body" action="/blog/{{$blog->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$blog->name}}</h4>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($blog->description, 50)}} </h6>
                                        <hr>
                                        <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;"> ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button style="float: right; background: none; margin-top: -10px; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
            </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/blog"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:10px; background-color:black; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">ดูทั้งหมด -></a></div>
        </div>
        <br>
        <br>
        <h6 style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e; font-size: 25px;">กิจกรรม</h6>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <div class="col-md-6" >
                        <a href="activity/detail/{{$activity->id}}" style="text-decoration: none;">
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image-overlay" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%; z-index:100;">

                                    </div>

                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}




                                        <h4 style="font-family:'Pridi', serif; color: #706e70; "> <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right;">ผู้สนใจ<br> {{$count}}</span> {{$activity->name}} </h4>
                                        <h6 style="font-family:'Pridi', serif; color: #706e70; "><i class="fas fa-circle" style="color: #f47746;"></i> {{$activity->date}}</h6>
                                    </form>
                                </div>
                            </div>
                        </a>

                    </div>


                @endforeach
            @endif
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/blog"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:10px; background-color:#5bb298; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">ดูทั้งหมด -></a></div>
    </div>

    {{--<a href="https://lin.ee/jtM5xJU"><img height="36" border="0" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png"></a>--}}
    <br>
    <br>
    <br>










    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark" style="background-color: #5bb298;">

        <!-- Copyright -->
        <div style="background-color: #5bb298;font-family:'Pridi',serif; color: white;">
        <div class="footer-copyright text-center py-3">© 2020 Copyright Rukyim. All Rights Reserved
        </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

@endsection

</body>


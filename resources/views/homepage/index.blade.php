<br>
<br>

<img style="width: 100%" src="<?php echo asset('assets/images/imgg-01.png'); ?>">

<div class="row">
    <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="blog/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#5bb298; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 10px; ">แบ่งปันประสบการณ์ <i class="fas fa-pencil-alt"></i></a></div>
</div>
<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>

        body {
            {{--background-image: url({{ asset('assets/images/bg.png') }});--}}
            {{---webkit-background-size: cover;--}}
            {{---moz-background-size: cover;--}}
            {{---o-background-size: cover;--}}
            {{--background-size: cover;--}}
        }

        .card-deck {
            margin-top: 90px;
        }

        .card-body01 {
            border-radius: 20px;

        }

        .card-body02 {
            border-radius: 20px;

        }

        .card-body03 {
            border-radius: 20px;

        }
        .img-01{
            width: 60%;
            margin-top: -100px;
        }
        .img-02{
            width: 60%;
            margin-top: -100px;
        }
        .img-03{
            width: 60%;
            margin-top: -100px;
        }
        .text1{
            font-family:'Pridi',serif;
            text-align: center;
            color: #fff4de;
            font-size: 25px;
            width: 250px;
            height: 40px;
            border-radius: 25px;
            background-color: #ce945c;
            margin: 30 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
        }
        .imgicon1{
            width:40% ;
            margin-top: -110px;
        }
        .card-blog{
            border-radius: 20px;
            border: none;
        }
        .userblog{
            margin-left: 20px;
            margin-top: 10px;
            font-family:'Pridi',serif;
            text-decoration: none;
            color: black;

        }
        .imgicon2{
            width:60% ;
            margin-top: -120px;
        }
        .userblog{
            margin-left: 90px;
            margin-top: -40px;
            font-family:'Pridi',serif;
            text-decoration: none;
            color: black;

        }
        .datetime{
            margin-left: 90px;
            margin-top: -5px;
            font-size: 12px;
            font-family:'Pridi',serif;
            text-decoration: none;
            color: black;
        }
        .button01{
            font-family:'Pridi',serif;
            background-color: #F38644;
            border: none;
            color: white;
            margin-left: auto;
            margin-right: auto;
            display: block !important;
            width: 200px;
        }




        @media screen and (max-width: 768px){
            body{
                {{--background-image: url({{ asset('assets/images/bg.png') }});--}}
                background-size: 100%;
            }
            .img-01{
                width: 50%;
            }
            .img-02{
                width: 57%;
                margin-top: -80px;
            }
            .img-03{
                width: 50%;
                margin-top: -80px;
            }

            .card-body01{
                width: 80%;
                height:135px;
                margin: 0 auto; /* Added */
                float: none; /* Added */
                margin-bottom: 10px; /* Added */

            }
            .card-body02{
                width: 80%;
                height:175px;
                margin: 0 auto; /* Added */
                float: none; /* Added */
                margin-bottom: 10px; /* Added */

            }
            .card-body03{
                width: 80%;
                height:175px;
                margin: 0 auto; /* Added */
                float: none; /* Added */
                margin-bottom: 10px; /* Added */

            }

        }
    </style>
    <div class="container">
        <div class="card-deck">
            <div class="card card-body01"  style="border: none; ">
                <div class="card-body " style="border-radius: 25px;">
                    <center><img class="img-01" src="<?php echo asset('assets/images/Artboard – 1.png');?>"></center>
                    <h5 class="card-title"style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- โพสต์ -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">เขียนเรื่องเล่าหรือ<br>แบ่งปันประสบกาณ์ให้ผู้อื่น</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card card-body02"  style="border: none;">
                <div class="card-body" style="border-radius: 25px;">
                    <center><img class="img-02"src="<?php echo asset('assets/images/Artboard – 2.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กลุ่ม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">พูดคุยแลกเปลี่ยนข้อมูลต่างๆ หรือ<br>ปรึกษาพูดคุยกับผู้สนใจเรื่องเดียวกัน</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card card-body03"  style="border: none;">
                <div class="card-body">
                    <center><img class="img-03" src="<?php echo asset('assets/images/Artboard – 3.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กิจกรรม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">ข้อมูลข่าวสารเกี่ยวกับกิจกรรมต่างๆ <br>และกิจกรรมที่เราสนใจ</h6>
                </div>
            </div>
        </div>

        {{--แนะนำ--}}
        <br>
        <br>
        <br>

        <div class="text1">เรื่องเล่าแนะนำ
            <center><img class="imgicon1"src="<?php echo asset('assets/images/icon1.png');?>"></center>
        </div>
        {{--new blog--}}
        <div class="row">
            @if(!empty($blogs))
                @foreach($blogs as $blog)
                    <?php
                    $countlike = \Illuminate\Support\Facades\DB::table('blogs')->where('blogs.id',$blog->id)
                        ->join('likes','likes.blog_id','=','blogs.id')->count();
                    //                    dd($countlike);
                    ?>
                    <?php
                    $user = \Illuminate\Support\Facades\DB::table('blogs')->where('blogs.id',$blog->id)
                        ->join('users','users.id','=','blogs.user_id')->select('users.name')->first();

                    $userimg = \Illuminate\Support\Facades\DB::table('blogs')->where('blogs.id',$blog->id)
                        ->join('users','users.id','=','blogs.user_id')->select('users.avatar')->first();

                    //                    dd($user);
                    ?>
                    <div class="col-md-6" >
                        <div class="card-body " style="border: none;">

                            <div class="card mb-sm-2 box-shadow card-blog">
                                <img src="/uploads/avatars/{{ $userimg ->avatar }}" style="width:50px; height:50px; border-radius:50%; margin-left:25px; margin-top: 15px;"><h6 class="userblog"> ชื่อผู้ใช้ : {{ $user->name }}</h6>
                                <h6 class="datetime">{{$blog->updated_at}}</h6>



                                <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                    <br>
                                    <img src="uploads/album_covers/{{$blog->cover_image}}" alt="" style="width: 100%;">
                                </div>
                                <form class="card-body" action="/blog/{{$blog->id}}" method="post">{{csrf_field()}}
                                    <h4 style="font-family:'Pridi', serif; color: black; ">{{$blog->name}}</h4>
                                    <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: #706e70;" >{{Illuminate\Support\Str::limit($blog->description, 50)}} </h6>
                                    <hr>
                                    <button class="btn" style="font-family:'Pridi',serif; background-color: white; border: none;"><i class="far fa-heart" style="color: #F38644; font-size: 24px;"></i> จำนวนคนถูกใจ {{$countlike}} คน</button>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button style="float: right; background: none; margin-top: -10px; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
                                </form>

                                <form class="ajax-form" action="blog/detail/{{$blog->id}}/count" method="POST">
                                    {{csrf_field()}}
                                    <div class="input-group">
                                        @if(empty($reads))
                                            <button type="submit" class="btn button01" style="">อ่านบทความ</button>
                                        @endif
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                @endforeach
            @endif
        </div>
        {{--<row>--}}
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/blog"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:10px; background-color:black; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">ดูทั้งหมด -></a></div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        {{--blog--}}
        <div class="text1">กิจกรรมที่น่าสนใจ
            <center><img class="imgicon2"src="<?php echo asset('assets/images/icon2.png');?>"></center>
        </div>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <?php
                    $countactivity= \Illuminate\Support\Facades\DB::table('activities')->where('activities.id',$activity->id)
                        ->join('events','events.activity_id','=','activities.id')->count();
                    //                    dd($countlike);
                    ?>
                    <div class="col-md-6" >
                        <a href="activity/detail/{{$activity->id}}" style="text-decoration: none;">
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 20px;">
                                    <div class="card-image-overlay" style="overflow: hidden;
  width: 100%; height: 200px; border-top-right-radius: 20px;  border-top-left-radius: 20px;">
                                        <img src="uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%; z-index:100;">

                                    </div>
                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; "> <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right;">ผู้สนใจ<br> {{$countactivity}}</span> {{$activity->name}} </h4>
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

    <div data-aos="fade-right" data-aos-easing="ease-in-sine">
        @foreach($data as $image)
            <?php
            $filename = json_decode($image->filename);?>
                <a href="/blog" style="text-decoration: none;">
            <div class="card-img" style="margin-right: auto;opacity: 1; transform: matrix(1, 0, 0, 1, 0.5, 0);">
                <img style="width: 30%;" src="{{ asset('/image/'.$filename[1]) }}">
            </div>
                </a>
            <br>
        @endforeach
    </div>

    </div>
    {{--con--}}

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


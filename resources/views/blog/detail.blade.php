<body class="dark-mode-body">
@extends('layouts.app')
@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        body {
            background-color: #fcf1dd;
        }
        .read-more {
            position: relative;
            color: #34495e;
            text-decoration: none;
            cursor: text;
        }
        .read-more .trigger {
            display: block;
            position: absolute;
            bottom: 0;
            cursor: pointer;
            color: #2980b9;
            font-weight: bold;
        }
        .read-more .content {
            position: relative;
            overflow: hidden;
            max-height: 450px;
            transition: max-height 500ms ease;

        }
        /*.read-more .content::before {*/
            /*content: '';*/
            /*background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, white 50%, white 100%);*/
            /*position: absolute;*/
            /*bottom: 0;*/
            /*width: 100%;*/
            /*height: 44.8px;*/
            /*transition: opactiy 500ms ease, visibility 500ms ease;*/

        /*}*/
        .read-more.expanded .content {
            max-height: 100%;
        }
        .read-more.expanded .content::before,
        .read-more.expanded .trigger {
            opacity: 0;
            visibility: hidden;

        }

        input[type="checkbox"] {
            transform: scale(1.5);
            line-height: 25px;
            border-color: #F07351;

        }
        .card-outer  {
            border: none;
            background-color: white;
        }

        body.dark-mode-body .card-outer {
            background-color: #fcf1dd;

        }
    </style>
    <br>
    <br>
    <br>
    <br>
<div class="card" style="background-color: white; border: none;">
    <div class="card-outer">
        <br>
        <div class="card-headered" style="font-family:'Pridi',serif; border: none; color: black; font-size: 20px; text-align: center;letter-spacing: 0.75px; line-height: 20pt;  ">{{$blogs->name}}
            <div class="tags" style="color:black; font-size: 14px;"> tag : {{$blogs->tags}}</div>
            {{--<h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; margin-top: 10px;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>--}}
            <br>
            <div class="container">
                <div class="card-image" style="overflow: hidden;
            width: 100%; height: 300px;">
                    <img src="/uploads/album_covers/{{$blogs->cover_image}}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="container">
            <br>
                <input style="float: right;" id='mode' type="checkbox" />
            <div class="card-body">
                <div class="wrap" style="font-family:'Pridi'; font-size: medium;">
                    <div class="read-more" onclick="this.classList.add('expanded')">
                        <div class="content" style="padding:10px 50px 60px 40px; letter-spacing: 0.75px; line-height: 20pt; ">
                            <a style="text-decoration:none;" id="increase-size" href="#">ขยายตัวอักษร</a> |
                            <a style="text-decoration:none;" id="decrease-size" href="#">ลดตัวอักษร</a>
                            <br>
                            <br>
                            <p style="font-size: medium;">{!! nl2br(e($blogs->description)) !!}</p>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button style=" background: none; background-color: #9f9f9f;color: white; border: none; border-radius: 5px; width: 200px; height: 50px;top: 50%;left: 50%; margin-top: 200px;margin-left: -100px;"class="trigger"> + read more </button>
                    </div>
                </div>
                <br>
                <br>
                <hr style="height: 5px; background-color: #fcf1dd; ">
                <br>
                {{--</blockquote>--}}
                    <form class="ajax-form" action="/blog/detail/{{$blogs->id}}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            @if(empty($exitslike))
                                <button class="btn" style="font-family:'Pridi',serif; background-color: white; border: none;"><i class="far fa-heart" style="color: #F38644;"></i> จำนวนคนถูกใจ {{$likecount}} คน</button>
                            @else
                                <button class="btn" style="font-family:'Pridi',serif; background-color: white; border: none;"><i class="fas fa-heart"style="color: #F38644;"></i> จำนวนคนถูกใจ {{$likecount}} คน</button>
                            @endif

                        </div>
                    </form>
                <a href="https://lin.ee/jtM5xJU"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0"></a>

                <br>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <h2 style="font-family: 'Pridi', serif; text-align: center; color: #4e4e4e; font-size: 25px; ">แนะนำบทความ</h2>
    <br>

    @foreach($tagblogs as $tagblog)
        <div class="card mb-3" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
            <a href="{{$tagblog->id}}" style="text-decoration: none;">
                <div class="card-body" style="border: none;">
                    <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                        <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                            <img src="/uploads/album_covers/{{$tagblog->cover_image}}" alt="" style="width: 100%;">
                        </div>
                        <form class="card-body" action="/blog/{{$tagblog->id}}" method="post">{{csrf_field()}}
                            <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$tagblog->name}}</h4>
                            <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($tagblog->description, 50)}} </h6>
                            <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;"> ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="float: right; background: none; margin-top: -10px; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
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
    <div class="container">
        <div class="card mt-2" style="background-color: #f3e5bc; border: none;">
            <form method="POST" action="/blog/detail/{{$blogs->id}}/comment" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body " style="text-align: center;">
                    <div class="form-group" style="font-family:'Pridi', serif; ">
                        <label for="body" class="control-label">แสดงความคิดเห็น</label>
                        <textarea  style="border: none;" class="form-control" name="body" cols="50" rows="5" id="body" placeholder="ใส่ความคิดเห็น"></textarea>
                        <input type="hidden" name="blog_id"id="blog_id" value="{{$blogs->id}}">
                    </div>
                    <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;">แสดงความคิดเห็น</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    {{--showcomment--}}
    <div class="container">
        @if(!empty($comments))
            @foreach($comments as $comment)
                <?php
                $user = \Illuminate\Support\Facades\DB::table('comments')->where('comments.id',$comment->id)
                    ->join('users','users.id','=','comments.user_id')->select('users.name')->first();

                $userimg = \Illuminate\Support\Facades\DB::table('comments')->where('comments.id',$comment->id)
                    ->join('users','users.id','=','comments.user_id')->select('users.avatar')->first();

                //                    dd($user);
                ?>
                <div class="card" style="border: none; border-radius: 10px;" >
                    <div class="card-body" style="border: none; background-color: #fdf9f3;" >
                        <label style="font-family:'Pridi', serif; font-size: small;">ความคิดเห็น</label>
                        <blockquote class="blockquote mb-4" style="border: none;">
                            <h5 style="font-family:'Pridi', serif;">{{$comment->body}}</h5>
                        </blockquote>
                        <hr style="color:#fcf1dd;">
                        <img src="/uploads/avatars/{{ $userimg ->avatar }}" style="width:50px; height:50px; border-radius:50%; margin-left:10px; margin-top: -10px;"><h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; margin-top: -40px; margin-left:80px;">ชื่อผู้ใช้ : {{ $user->name }}</h6>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
    </div>
    {{--createcomment--}}
    <br>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark" style="background-color: #5bb298;">

        <!-- Copyright -->
        <div style="background-color:#5bb298;font-family:'Pridi',serif; color: white;">
            <div class="footer-copyright text-center py-3">© 2020 Copyright Rukyim. All Rights Reserved
            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



@endsection
</body>


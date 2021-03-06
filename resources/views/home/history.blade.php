<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <style>
        .card-blog{
            border-radius: 20px;
            border: none;
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


        }

    </style>
    <div class="container">
            <br>
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
                                        <img src="/uploads/album_covers/{{$blog->cover_image}}" alt="" style="width: 100%;">
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
    </div>


@endsection
</body>


<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <div class="card" style="border: none; background-color: #fffcf8;">
            <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                <img src="/uploads/album_covers/{{$blogs->cover_image}}" alt="" style="width: 100%;">
            </div>
            <div class="card-header" style="font-family:'Pridi',serif; background-color: #fffcf8; border: none; color: black; font-size: 20px;">{{$blogs->name}}
                <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; margin-top: 10px;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
            </div>
            <div class="card-body" style="background-color: #fffcf8;">
                <blockquote class="blockquote mb-4"style="font-family:'Pridi', serif; color: black; font-size: medium;" class="blockquote-footer">
                    {{--{{$blogs->description}}--}}
                    <div class="wrap">
                        <div class="read-more" onclick="this.classList.add('expanded')">
                            <div class="content">
                                <p style="font-size: medium;">{!! nl2br(e($blogs->description)) !!}</p>
                            </div>
                            <span class="trigger">+ read more</span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="tags" style="color:black; font-size: 14px;"> tag : {{$blogs->tags}}</div>
                    <br>
                    <h6 style="text-align: center; color: #e1e2dd;">=================================================</h6>
                </blockquote>

            </div>
            {{--like--}}
            <div class="col-6">
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
            </div>
            <br>
            {{--div like--}}
        </div>
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
        <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; text-align: center; color: black;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
        <center><button  type="button" class="btn btn-outline-secondary" style=" font-family:'Pridi', serif; width:150px;">ติดตาม</button></center>
        {{--container description--}}
        <br>
        {{--showcomment--}}
        <div class="container">
            @if(!empty($comments))
                @foreach($comments as $comment)
                    <div class="card" style="border: none;" >
                        <div class="card-body" style="border: none;">
                            <label style="font-family:'Pridi', serif; font-size: small;">ความคิดเห็น</label>
                            <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                            <blockquote class="blockquote mb-4" style="border: none;">
                                <h5 style="font-family:'Pridi', serif;">{{$comment->body}}</h5>
                            </blockquote>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
        {{--createcomment--}}
        <br>
        <div class="card mt-2" style="background-color: #f3e5bc; border: none;">
            <div class="card-body " style="text-align: center;">
                <div class="form-group" style="font-family:'Pridi', serif; ">
                    <label for="body" class="control-label">แสดงความคิดเห็น</label>
                    <textarea  style="border: none;" class="form-control" name="body" cols="50" rows="5" id="body" placeholder="ใส่ความคิดเห็น"></textarea>
                    <input type="hidden" name="blog_id"id="blog_id" value="{{$blogs->id}}">
                </div>
                <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;">แสดงความคิดเห็น</button>
            </div>
        </div>
    </div>
    <br>

@endsection
</body>


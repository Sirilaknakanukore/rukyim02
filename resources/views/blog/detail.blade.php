<body style="background-color: #fcf1dd;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>

        <br>
        <div class="card" style="border: none;">
            <br>
            <div class="card-header" style="font-family:'Pridi',serif; background-color: #fffcf8; border: none; color: black; font-size: 20px;">{{$blogs->name}}
                <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; margin-top: 10px;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
            </div>
            <div class="card-body" style="background-color: #fffcf8;">
                <blockquote class="blockquote mb-4"style="font-family:'Pridi', serif; color: black; font-size: medium;" class="blockquote-footer">
                     {{$blogs->description}}
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
        <br>
        <br>
    <div class="container">
        <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px; text-align: center; color: black;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
       <center><button  type="button" class="btn btn-outline-secondary" style=" font-family:'Pridi', serif; width:150px;">ติดตาม</button></center>
        {{--container description--}}
        <br>
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
                    <div class="card" style="border: none; border-radius: 10px;" >
                        <div class="card-body" style="border: none;">
                            <label style="font-family:'Pridi', serif; font-size: small;">ความคิดเห็น</label>
                            <blockquote class="blockquote mb-4" style="border: none;">
                                <h5 style="font-family:'Pridi', serif;">{{$comment->body}}</h5>
                            </blockquote>
                            <hr style="color:#fcf1dd;">
                            <h6 style="font-family:'Pridi',serif; color: #b5b4b4; font-size: 14px;">ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
        {{--createcomment--}}
        <br>


@endsection
</body>


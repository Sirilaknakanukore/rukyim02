<body style="background-color: #fcf1dd;">
@extends('layouts.app')
@section('content')
<style>

    /* Styles for the emojis */
    h1 {
        font-size: 2rem;
        margin-bottom: 1rem;
        margin-left: auto;
        display: block;
        /* Add z-index to show them on top of the dark mode overlay and prevent the color change */
        z-index: 1;
    }

    /* Styles for the checkbox */
    input[type=checkbox] {
        margin-left: auto;
        /* This ensures that the input and label will be placed on top of the overlay so they can be clicked */
        z-index: 1;
        /* Remove default styles and style the checkbox */
        -webkit-appearance: none;
        width: 5rem;
        height: 1.6rem;
        border: 1px solid rgba(160,160,160,1);
        border-radius: 1rem;
        position: relative;
    }

    /* Styles for the switch */
    input[type="checkbox"]::after {
        margin-left: auto;
        position: absolute;
        top: 0;
        left: 0;
        content: "";
        width: 50%;
        height: 100%;
        background: #514878;
        border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;
        content: 'OFF';
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    /* Styles for the label */
    label::before {
        display: block;
        color: white;
        /* We place the text here so we can change it when the checbkox is clicked */
        margin-top: 1rem;
        font-size: 2rem;
        font-weight: 100;
    }

    /* This is the dark mode overlay we'll toggle when the checkbox is checked */
    .dark-mode {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        transition: all .3s ease-in-out;
        /* We hide this overlay by default, since we'll be enabling it by clicking on the checkbox*/
        opacity: 0;
        /* These are the two lines that generate the dark mode effect */
        background: white;
        mix-blend-mode: difference;
    }

    /* This line toggles the dark mode overlay when the checkbox is checked */
    input[type=checkbox]:checked ~ .dark-mode {
        opacity: 1;
    }

    /* Move the switch when the checkbox is checked and change the color */
    input[type="checkbox"]:checked::after {
        right: 0;
        left: auto;
        background: #52cf71;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        content: 'ON';
    }

    /* We change the text and the color of the label when the dark mode overlay is enabled */
    input[type=checkbox]:checked ~ label:before {
        content: "Turn off the light";
    }
</style>
    <br>
    <br>
    <br>
        <br>
        <div class="card" style="border: none;">
            <h1>🌞🌙</h1>
            <input type="checkbox" id="switch">
            <label for="switch"></label>
            <section class="dark-mode" style="float: left;"></section>
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
                        <div class="card-body" style="border: none; background-color: #fdf9f3;" >
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


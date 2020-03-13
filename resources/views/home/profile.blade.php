<body style="background-color: #ffffff;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        <div class="col-md-10 col-md-offset-2">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            @if(!empty($backsurveys))
                @foreach($backsurveys as $backsurvey)
                    <h4 style="font-family:'Pridi',serif; color: #F38644;">{{ Auth::user()->name }}</h4>
                    <h6 style="font-family:'Pridi',serif; color: #949ca2;">ความชอบ : {{$backsurvey->description}}</h6>
                    <br>
                @endforeach
            @endif

            <form enctype="multipart/form-data" action="/profile/update" method="POST">
                <label style="font-family:'Pridi',serif;">เปลี่ยนรูปโปรไฟล์</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>
                <input type="submit"class="pull-right btn btn-sm btn-primary">
            </form>

        </div>

        <br>

        <nav class="nav nav-pills nav-justified">
            <a style="font-family:'Pridi', serif; background-color: #F38644;" class="nav-item nav-link active" href="#">profile</a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="/profile/post">โพสต์ ( {{$countwrite}} ) </a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="/profile/activity">กิจกรรม ( {{$count}} )</a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="/profile/group">กลุ่มที่เข้าร่วม ( {{$gcount}} )</a>
        </nav>
        <br>
        @foreach($data as $image)
            <div class="card-body" style=" vertical-align: center;background-color: #f4e6bd;">
                <?php
                $filename = json_decode($image->filename);?>
                <div class="card-img">
                    @if($countblog <= 5)
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[2]) }}">
                    @elseif ($countblog > 5 && $countblog <=10 )
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[3]) }}">
                    @elseif ($countblog > 10 && $countblog <=15 )
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[4]) }}">
                    @elseif ($countblog > 20)
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[5]) }}">
                    @elseif ($countblog > 40)
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[6]) }}">
                    @else
                        <img class="rounded mx-auto d-block" width="50%;" src="{{ asset('/image/'.$filename[2]) }}">
                    @endif
                </div>
            </div>
            <br>
        @endforeach

        <li class="list-group-item d-flex justify-content-between align-items-center" style="font-family:'Pridi',serif;">
            นักอ่าน
            <span class="badge badge-primary badge-pill">{{$countblog}} /50</span>
        </li>
        <br>
        <li class="list-group-item d-flex justify-content-between align-items-center " style="font-family:'Pridi',serif;">
            นักเขียน
            <span class="badge badge-primary badge-pill">{{$countwrite}}  /50</span>
        </li>
        <br>
        <li class="list-group-item d-flex justify-content-between align-items-center" style="font-family:'Pridi',serif;">
            นักกิจกรรม
            <span class="badge badge-primary badge-pill">{{$count}}  /50</span>
        </li>

    </div>



@endsection
</body>


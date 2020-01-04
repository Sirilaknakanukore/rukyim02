<body style="background-color: #ffffff;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        @if(!empty($backsurveys))
            @foreach($backsurveys as $backsurvey)
                <h4 style="font-family:'Pridi',serif; color: #F38644; text-align: center;">{{ Auth::user()->name }}</h4>
                <h6 style="font-family:'Pridi',serif; color: #949ca2; text-align: center;">ความชอบ : {{$backsurvey->description}}</h6>
                <br>
            @endforeach
        @endif

        @if(!empty($avatars))
            @foreach($avatars as $avatar)
                <div class="card-body" style=" vertical-align: center;background-color: #f4e6bd;">
                    <div class="mb-2 box-shadow" style="border: none;">
                        <img src="uploads/cover_avatar/{{$avatar->cover_avatar}}" style="width: 50%; align-items: center; margin-left: 100px;" alt="" class="card-img-top">
                    </div>
                </div>
                <br>
            @endforeach
        @endif
        <div class="card w-100">
            <a href="/profile/post" style="color: black; text-decoration: none;"><div class="card-body">
                    <h5 class="card-title" style="font-family:'Pridi',serif;">ประวัติการโพส</h5>
                </div></a>
        </div>
    </div>



@endsection
</body>


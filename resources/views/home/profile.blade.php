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


        <nav class="nav nav-pills nav-justified">
            <a style="font-family:'Pridi', serif; background-color: #F38644;" class="nav-item nav-link active" href="#">profile</a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="/profile/post">โพสต์</a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="#">กิจกรรม</a>
        </nav>
        <br>
        @foreach($data as $image)
                <div class="card-body" style=" vertical-align: center;background-color: #f4e6bd;">
                    <?php
                    $filename = json_decode($image->filename);?>
                    <div class="card-img">
                    <img class="rounded mx-auto d-block" src="{{ asset('/image/'.$filename[0]) }}">
                    </div>
                </div>
                <br>
        @endforeach

    </div>



@endsection
</body>


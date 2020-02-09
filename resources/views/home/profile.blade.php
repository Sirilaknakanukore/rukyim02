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



        @foreach($data as $image)
                <div class="card-body" style=" vertical-align: center;background-color: #f4e6bd;">
                    <?php
                    $filename = json_decode($image->filename);?>
                    <div class="card-img">
                    <img src="{{ asset('/image/'.$filename[0]) }}" style="width: 100%; height: 100%">
                    </div>
                </div>
                <br>
        @endforeach

        <div class="card w-100">
            <a href="/profile/post" style="color: black; text-decoration: none;"><div class="card-body">
                    <h5 class="card-title" style="font-family:'Pridi',serif;">ประวัติการโพส</h5>
                </div>
            </a>
        </div>
    </div>



@endsection
</body>


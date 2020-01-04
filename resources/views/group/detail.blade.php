<body style="background-color: #fcf1dd;">
<br>
<br>
<div class="card mb-4 box-shadow">
    <img src="/uploads/group_covers/{{$groups->cover_image}}" class="card-img-top" alt="cover_image" style="height:300px;">
</div>
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/photos/create/{{$groups->id}}"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#F38644; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">+ โพสต์</a></div>
        </div>
        <br>
        {{--<h1 style="font-family:'Pridi',serif; ">{{$groups->name}}</h1>--}}
        <div class="row">

            @if(count($groups->photos)>0)
                @foreach($groups->photos as $photos)
                    <div class="card mb-3" style="border: none; background-color: #fdf9f3;border-radius: 20px;">
                        <div class="card-body">
                        <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                            <div class="card-image" style="overflow: hidden;
  width: 100%; height: 300px;">
                            <a href= "/photos/{{$photos->id}}">
                                <img src="/uploads/photos/{{$photos->group_id}}/{{$photos->photo}}" alt="" style="width: 100%">
                            </a>
                            </div>
                            <div class="card-body">
                                <p style="font-family:'Pridi',serif;  ">{{$photos->description}}</p>
                            </div>

                        </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <p style="font-family:'Pridi',serif; text-align: center;">" ไม่มีการโพสต์ของคนในกลุ่ม "</p>
                </div>
            @endif
        </div>
    </div>
@endsection
</body>
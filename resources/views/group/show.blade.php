<body style="background-color: #fbf5e3;">
<br>
<br>
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/group/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#F38644; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">+ สร้างกลุ่ม </a></div>
        </div>
        <br>
        <form class="form-inline col-md-5 col-8" action="/group" method="get">
            <input  class="form-control mr-sm-2" type="search" name="search" placeholder="ค้นหา" aria-label="Search" style="border-color:#F38644; border-width: 3px; border-radius: 20px; font-family:'Pridi', serif; width: 50%; margin: auto 0 ; background-color: #fdf9f3;  ">
            <button class="btn my-2 my-sm-0" type="submit" style="border-radius: 10px; background-color:black; color: white; font-family:'Pridi', serif; width: 100px; margin-left: 10px; ">ค้นหา</button>
        </form>
        <br>
        <div class="row">
            @if(!empty($groups))
                @foreach($groups as $group)
                    <div class="card mb-6" style="border: none;background-color: #fdf9f3; border-radius: 25px;" >
                        <div class="card-body " style="border: none;">
                            <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                <form class="card-body" action="/group/{{$group->id}}" method="post">{{csrf_field()}}
                                    <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$group->name}}</h4>
                                </form>
                                <hr style="margin-top: -20px;">
                                <div class="card-image" style="overflow: hidden;
  width: 100%; height: 300px;">
                                    <img src="uploads/group_covers/{{$group->cover_image}}" alt="" style="width: 100%;">
                                </div>
                                <br>
                                <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: #717070;" >{{$group->description}} </h6>
                            </div>
                            <hr>
                            <br>
                            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="group/{{$group->id}}"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#6B84B5; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">เข้าร่วม </a></div>
                        </div>

                    </div>


                    <br>
                    <br>

                @endforeach
            @endif
        </div>

@endsection
</body>


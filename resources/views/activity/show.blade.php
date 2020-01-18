<body style="background-color: #fbf5e3;">
<br>
<br>
<img style="width: 100%" src="<?php echo asset('assets/images/vv.jpg'); ?>">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <div class="col-md-6" >

                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%;">
                                    </div>

                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$activity->name}}</h4>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($activity->description, 50)}} </h6>
                                    </form>
                                </div>
                            </div>

                    </div>

                @endforeach
            @endif
        </div>

@endsection
</body>


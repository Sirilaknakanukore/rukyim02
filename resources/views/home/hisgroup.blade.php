<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <div class="col-md-6" >
                        <a href="/activity/detail/{{$activity->id}}" style="text-decoration: none;">
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 20px;">
                                    <div class="card-image-overlay" style="overflow: hidden;
  width: 100%; height: 200px; border-top-right-radius: 20px;  border-top-left-radius: 20px;">
                                        <img src="/uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%; z-index:100;">
                                    </div>
                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; "> <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right;"></span> {{$activity->name}} </h4>
                                        <h6 style="font-family:'Pridi', serif; color: #706e70; "><i class="fas fa-circle" style="color: #f47746;"></i> {{$activity->date}}</h6>
                                    </form>
                                </div>
                            </div>
                        </a>

                    </div>


                @endforeach
            @endif
        </div>
    </div>
@endsection
</body>

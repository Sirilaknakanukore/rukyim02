<body style="background-color: #fbf5e3;">
<br>
<br>
<img style="width: 100%" src="<?php echo asset('assets/images/vv.jpg'); ?>">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>

        <nav class="nav nav-pills nav-justified">
            <a style="font-family:'Pridi', serif; background-color: #F38644;" class="nav-item nav-link active" href="/activity">กิจกรรมทั้งหมด</a>
            <a style="font-family:'Pridi', serif; color: #F38644; " class="nav-item nav-link" href="/activity/survey">กิจกรรมแนะนำ</a>
        </nav>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <div class="col-md-6" >
                        <a href="activity/detail/{{$activity->id}}" style="text-decoration: none;">
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="/uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%;">
                                    </div>

                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}

                                        <h4 style="font-family:'Pridi', serif; color: #706e70; "> <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right;">ผู้สนใจ<br> {{$count}}</span> {{$activity->name}} </h4>
                                        <h6 style="font-family:'Pridi', serif; color: #706e70; ">{{$activity->date}}</h6>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($activity->description, 50)}} </h6>
                                    </form>
                                </div>
                            </div>
                        </a>

                    </div>

                @endforeach
            @endif
        </div>
        <br>
        <br>
        <br>

        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark" style="background-color: #5bb298;">

            <!-- Copyright -->
            <div style="background-color:#5bb298;font-family:'Pridi',serif; color: white;">
                <div class="footer-copyright text-center py-3">© 2020 Copyright Rukyim. All Rights Reserved
                </div>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->


@endsection
</body>


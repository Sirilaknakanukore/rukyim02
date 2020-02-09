<body style="background-color: #fcf1dd;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="card" style="border: none; background-color: #fffcf8;">
        <div class="card-image" style="overflow: hidden;
  width: 100%; height: 100%;">
            <img src="/uploads/activity_covers/{{$activities->activity_image}}" alt="" style="width: 100%;">
        </div>

<br>
        <div class="card-header" style="font-family:'Pridi',serif; background-color: #fffcf8; border: none; color: black; font-size: 20px;">{{$activities->name}}
            <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right; width: 60px;">ผู้สนใจ<br> {{$count}}</span>
        </div>
        <div class="card-body" style="background-color: #fffcf8;">
            <blockquote class="blockquote mb-4"style="font-family:'Pridi', serif; color: black; font-size: medium;" class="blockquote-footer">
                {{--{{$blogs->description}}--}}
                <div class="wrap">
                    <div class="content">
                        <p style="font-size: medium;">{!! nl2br(e($activities->description)) !!}</p>
                    </div>
                </div>
                <br>
                <h6 style="text-align: center; color: #e1e2dd;">=================================================</h6>
            </blockquote>

        </div>
    </div>
    <br>
    <br>
    <div class="card" style="border: none; background-color: #6B84B5; ">
        <div class="card-body" style="border: none;">
            <p style="font-size: large; font-family:'Pridi',serif; color: white;"><i class="far fa-calendar-minus"></i>  {{$activities->date}}</p>
            <p style="font-size: large; font-family:'Pridi',serif; color: white;"><i class="fas fa-map-marker-alt"></i>  {{$activities->location}}</p>
            <p style="font-size: large; font-family:'Pridi',serif; color: white;"><i class="far fa-clock"></i>  {{$activities->time}}</p>
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-12 order-md-2 mb-4">
        <form class="card  ajax-form" action="/activity/detail/{{$activities->id}}" method="POST">
            {{csrf_field()}}
            <div class="input-group ">
                @if(empty($exits))
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-family:'Pridi',serif; background-color: #F38644; border: none; color: white;">เข้าร่วมกิจกรรม</button>
                @else
                    <button type="submit" class="btn btn-lg btn-block" style="font-family:'Pridi',serif;border-color: #F38644; border-width: medium; color:#F38644; ">ได้เข้าร่วมกิจกรรมเป็นที่เรียบร้อย</button>
                @endif
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
@endsection
</body>


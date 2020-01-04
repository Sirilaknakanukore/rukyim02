<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        @if(!empty($blogs))
            @foreach($blogs as $blog)

                <div class="card" style="border: none;">
                    <div class="card mb-2 box-shadow" style="border: none;">

                        <br>
                        <form action="/blog/{{$blog->id}}" method="post">{{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="float: right; margin-top: -20px; background: none; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        {{--<img src="uploads/album_covers/{{$blog->cover_image}}" alt="" class="card-img-top">--}}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-4">
                            <h6 style="font-family:'Pridi', serif;">{{$blog->name}}</h6>
                            <div class="tags" style="color: #5a6268; font-family:'Pridi', serif; font-size: 14px;"> tag : {{$blog->tags}}</div>
                            <h6 class="card-body" style="font-family:'Pridi', serif; font-size: 18px; " class="blockquote-footer">{{Illuminate\Support\Str::limit($blog->description, 120)}} </h6>
                        </blockquote>
                        <a href="blog/detail/{{$blog->id}}"class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi',serif; background-color: black; border-radius: 15px;">อ่านบทความ</a>
                    </div>
                </div>
                <br>
            @endforeach
        @endif

    </div>

@endsection
</body>


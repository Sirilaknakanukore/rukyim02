<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="container">
            <br>
            <div class="row">
                @if(!empty($blogs))
                    @foreach($blogs as $blog)
                        <div class="col-md-6" >
                            <a href="blog/detail/{{$blog->id}}" style="text-decoration: none;">
                                <div class="card-body" style="border: none;">
                                    <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                        <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                            <img src="/uploads/album_covers/{{$blog->cover_image}}" alt="" style="width: 100%;">
                                        </div>

                                        <form class="card-body" action="/blog/{{$blog->id}}" method="post">{{csrf_field()}}
                                            <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$blog->name}}</h4>
                                            <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($blog->description, 50)}} </h6>
                                            <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;"> ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button style="float: right; background: none; margin-top: -10px; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>
    </div>


@endsection
</body>


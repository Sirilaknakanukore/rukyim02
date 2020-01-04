@extends('layouts.app')
@section('content')

    <h1>{{$photo->titile}}</h1>
    <a class="btn btn-secondary" href="/group/detail/{{$photo->group_id}}">
        <i class="fas fa-chevron-left"></i> Go Back
    </a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img src="/uploads/photos/{{$photo->group_id}}/{{$photo->photo}}" class="card-img-top" alt="">
            </div>
            <div class="card-body">
                <hr>
                <small>Title: {{$photo->title}}</small>
                <br>
                <small>Menu: {{$photo->description}}</small>
                <hr>
                <form action="/photos/{{$photo->id}}" method="post">{{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">DELETE</button>
                </form>
            </div>
        </div>

    </div>

@endsection
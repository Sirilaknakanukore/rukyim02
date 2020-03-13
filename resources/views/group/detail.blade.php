<body style="background-color: #fcf1dd;">
<br>
<br>
<div class="card  box-shadow">
    <img src="/uploads/group_covers/{{$groups->cover_image}}" class="card-img-top" alt="cover_image" style="height:100%; width: 100%; overflow: hidden;">
</div>
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <style>

    </style>
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <!-- Blog Post -->

            <div class="mb-4">
                <br>
                   <center><a href="/photos/create/{{$groups->id}}"class="btn btn-block " style="font-family:'Pridi',serif; border-radius:40px; background-color:#F38644; z-index:999;color: white;width: 50%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">+ โพสต์</a>
                <br></center>
                @if(count($groups->photos)>0)
                    @foreach($groups->photos as $photos)
                        <div class="card mb-3" style="border: none; background-color: #fdf9f3;border-radius: 20px; width: 100%">
                            <div class="card-body">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 100%">
                                        <a href= "/photos/{{$photos->id}}">
                                            <img src="/uploads/photos/{{$photos->group_id}}/{{$photos->photo}}" alt="" style="width: 100%">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p style="font-family:'Pridi',serif; font-size: 24px;">{{$photos->description}}</p>
                                    </div>
                                    <br>

                                </div>
                            </div>


                            <input type="hidden" value="{{$comphotos = \Illuminate\Support\Facades\DB::table('photos')->where('group_id',$groups->id)->join('comphotos','photos.id','=','comphotos.photo_id')->where('comphotos.photo_id',$photos->id)->select('*')->get()}}">


                            {{--comment--}}
                            <div class="container">
                                @if(!empty($comphotos))
                                    @foreach($comphotos as $comphoto)
                                        <div class="card" style="border: none; border-radius: 10px; margin-top: 10px;" >
                                            <div class="card-body" style="border: none;">
                                                <label style="font-family:'Pridi', serif; font-size: small;">ความคิดเห็น</label>
                                                <blockquote class="blockquote mb-4" style="border: none;">
                                                    <h5 style="font-family:'Pridi', serif;">{{$comphoto->body}}</h5>
                                                </blockquote>
                                                <hr style="color:#fcf1dd;">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <form method="POST" action="/group/{{$photos->id}}/comphoto" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="card-body " style="text-align: center;">
                                    <div class="form-group" style="font-family:'Pridi', serif; ">
                                        <textarea  style="border: none;" class="form-control" name="body" cols="5" rows="2" id="body" placeholder="ใส่ความคิดเห็น"></textarea>
                                        <input type="hidden" name="photo_id" id="photo_id" value="{{$photos->id}}">
                                        <input type="hidden" name="group_id" id="group_id" value="{{$groups->id}}">

                                    </div>
                                    <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;">แสดงความคิดเห็น</button>
                                </div>
                            </form>
                            {{--/formcomment--}}
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <p style="font-family:'Pridi',serif; text-align: center;">" ไม่มีการโพสต์ของคนในกลุ่ม "</p>
                    </div>
                @endif

                {{--showcomment--}}

            </div>
        </div>
    </div>
@endsection
</body>
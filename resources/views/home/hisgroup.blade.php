<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            @if(!empty($groups))
                @foreach($groups as $group)
                    <?php
                    $countgroup = \Illuminate\Support\Facades\DB::table('groups')->where('groups.id',$group->id)
                        ->join('groupcounts','groupcounts.group_id','=','groups.id')->count();
                    //                    dd($countlike);
                    ?>
                    <div class="col-md-6" >
                        <div class="card mb-3" style="border: none; border-radius: 10px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <br>
                                    <img  src="/uploads/group_covers/{{$group->cover_image}}" alt="" style="width: 100%; margin-left: 10px; border-radius: 10px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none; ">{{$group->name}}</h6>
                                        <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;">คนเข้าร่วม {{$countgroup }}</h6>
                                        <hr>
                                        <h6 style="font-family:'Pridi', serif; font-size: 18px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($group->description, 50)}} </h6>
                                        <p class="card-text"><small class="text-muted">{{$group->updated_at}}</small></p>

                                        <form class="ajax-form" action="/group/{{$group->id}}/count" method="POST">
                                            {{csrf_field()}}
                                            @if(empty($groupcount))
                                                <button  type="submit" class="btn button01" style="background-color: #fbb370;">เข้าร่วมกลุ่ม</button>@else
                                                <button type="submit" class="btn btn-outline-primary" style="font-family:'Pridi',serif;border-color: #F38644; border-width: medium; color:#F38644; ">ได้เข้าร่วมกิจกรรมเป็นที่เรียบร้อย</button>

                                            @endif
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>

        </div>
@endsection
</body>

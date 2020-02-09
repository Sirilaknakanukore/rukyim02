<body style="background-color: #fbf5e3;">
@extends('layouts.adminapp')
@section('content')
    <html lang="en">
    <head>
        <title style="font-family: 'Pridi', serif;  ">อัพโหลดภาพ</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <style>
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry !</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="jumbotron" style="font-family: 'Pridi', serif; "><i class="glyphicon glyphicon-upload"></i> อัพโหลดภาพ</h3>
        <form method="post" action="{{url('upload_data')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="input-group control-group increment" >
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info" style="margin-top:12px"><i class="glyphicon glyphicon-check"></i> Submit</button>
        </form>
        <br><hr>

        <h4><i class="glyphicon glyphicon-picture"></i> Display Data Image    </h4>
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr><th>#</th>
                <th>Picture</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $image)
                <tr><td>{{$image->id}}</td>
                    <td> <?php foreach (json_decode($image->filename)as $picture) { ?>
                        <img src="{{ asset('/image/'.$picture) }}" style="height:500px; width:400px"/>
                        <?php } ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });
        });
    </script>
    </html>



@endsection
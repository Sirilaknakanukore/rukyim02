@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <style>
        /* Font from Google fonts */
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900");
        /* Color palette */
        /* Basic styles */

        /* Form Styles */
        .form {
            max-width: 610px;
            margin: 60px auto;
        }


        .form__answer {
            display: inline-block;
            box-sizing: border-box;
            width: 23%;
            margin: 20px 1% 20px 0;
            height: 180px;
            vertical-align: top;
            font-size: 22px;
            text-align: center;
        }

        label {
            border: 1px solid rgba(250, 250, 250, 0.15);
            box-sizing: border-box;
            display: block;
            height: 300px;
            width: 100%;
            padding: 10px 10px 30px 10px;
            cursor: pointer;
            opacity: .5;
            transition: all .5s ease-in-out;
        }
        label:hover, label:focus, label:active {
            border: 1px solid rgba(250, 250, 250, 0.5);
        }


        /* Input style */
        input[type="radio"] {
            opacity: 0;
            width: 0;
            height: 0;
        }

        input[type="radio"]:active ~ label {
            opacity: 1;
        }

        input[type="radio"]:checked ~ label {
            opacity: 1;
            border: 1px solid #FAFAFA;
        }






    </style>

<div class="container">
    <h1 style="font-family:'Pridi', serif; color: #764740; " class="🍔">เลือก</h1>
    <h4 style="font-family:'Pridi', serif; color: #764740; " class="🍔">ผู้ช่วยของคุณ</h4>

    @if(!empty($avatars))
        @foreach($avatars as $avatar)
            <div class="row row-cols-md-3"style="border: none;">
                <div class="col mb-4" style="background-color: #f8d9a9; border: none;">
                    <div class="card" style="background-color: #f8d9a9; border: none;">
                        <center><img src="uploads/cover_avatar/{{$avatar->cover_avatar}}" class="card-img-top" alt="..." style="width: 30%; "></center>
                    </div>
                </div>
            </div>
                    {{--<a href="/home/survey"><button type="submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; margin-top: 230px; background-color: black; height: 60px;" >ขั้นตอนถัดไป</button></a>--}}




    {{--<div class="choose-emojis">--}}
        {{--<a class="emoji"><span class="e"><img src="uploads/cover_avatar/{{$avatar->cover_avatar}}" alt="" style="width: 100%;"></span></a>--}}
        @endforeach
    @endif

<br>


</div>



@endsection


@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/home.css');?>">

    <h1 style="font-family:'Pridi', serif; color: #764740; " class="🍔">เลือก</h1>
    <h4 style="font-family:'Pridi', serif; color: #764740; " class="🍔">ผู้ช่วยของคุณ</h4>
    <p class="🎩-wrapper"><span class="🎩"></span> <span class="🐑"><img style="width: 30%;" src="<?php echo asset('assets/images/gif1.gif'); ?>"></span></p>
    @if(!empty($avatars))
        @foreach($avatars as $avatar)
    <div class="choose-emojis">
        <a class="emoji"><span class="e"><img src="uploads/cover_avatar/{{$avatar->cover_avatar}}" alt="" style="width: 100%;"></span></a>
        <a class="emoji"><span class="e"><img style="width: 100%" src="<?php echo asset('assets/images/img3.gif'); ?>"></span></a>
        <a class="emoji"><span class="e"><img style="width: 100%" src="<?php echo asset('assets/images/img1.png'); ?>"></span></a>
        <a class="emoji"><span class="e"><img style="width: 100%" src="<?php echo asset('assets/images/img4.png'); ?>"></span></a>

        @endforeach
    @endif
    <a href="/home/survey"><button type="submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; margin-top: 230px; background-color: black; height: 60px;" >ขั้นตอนถัดไป</button></a>




@endsection


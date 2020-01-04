@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/blog.css');?>">
    <br>
    <br>
    <div class="container">
        @if(!empty($backsurveys))
            @foreach($backsurveys as $backsurvey)

                <div class="card">
                    <div class="card-header" style="font-family:'Pridi',serif;">
                        {{$backsurvey->description}}
                        <br>
                        <br>
                        @endforeach
                        @endif

                    </div>
                </div>


@endsection
<body style="background-color: #fbf5e3;">
<br>
<br>
<img style="width: 100%" src="<?php echo asset('assets/images/imgg-01.jpg'); ?>">
@extends('layouts.app')
@section('content')
    <style>
        svg:not(:root) {
            overflow: hidden;
        }

        /* Forms
           ========================================================================== */
        /**
         * 1. Change the font styles in all browsers (opinionated).
         * 2. Remove the margin in Firefox and Safari.
         */
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            /* 1 */
            font-size: 100%;
            /* 1 */
            line-height: 1.15;
            /* 1 */
            margin: 0;
            /* 2 */
        }

        /**
         * Show the overflow in IE.
         * 1. Show the overflow in Edge.
         */
        button,
        input {
            /* 1 */
            overflow: visible;
        }

        /**
         * Remove the inheritance of text transform in Edge, Firefox, and IE.
         * 1. Remove the inheritance of text transform in Firefox.
         */
        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /**
         * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
         *    controls in Android 4.
         * 2. Correct the inability to style clickable types in iOS and Safari.
         */
        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
            /* 2 */
        }

        /**
         * Remove the inner border and padding in Firefox.
         */
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
         * Restore the focus styles unset by the previous rule.
         */
        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        legend {
            box-sizing: border-box;
            /* 1 */
            color: inherit;
            /* 2 */
            display: table;
            /* 1 */
            max-width: 100%;
            /* 1 */
            padding: 0;
            /* 3 */
            white-space: normal;
            /* 1 */
        }

        /**
         * 1. Add the correct display in IE 9-.
         * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
         */
        progress {
            display: inline-block;
            /* 1 */
            vertical-align: baseline;
            /* 2 */
        }

        /**
         * Remove the default vertical scrollbar in IE.
         */
        textarea {
            overflow: auto;
        }

        /**
         * 1. Add the correct box sizing in IE 10-.
         * 2. Remove the padding in IE 10-.
         */
        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            /* 1 */
            padding: 0;
            /* 2 */
        }

        /**
         * Correct the cursor style of increment and decrement buttons in Chrome.
         */
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        /**
         * 1. Correct the odd appearance in Chrome and Safari.
         * 2. Correct the outline style in Safari.
         */
        [type="search"] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /**
         * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
         */
        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
         * 1. Correct the inability to style clickable types in iOS and Safari.
         * 2. Change font properties to `inherit` in Safari.
         */
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /* Interactive
           ========================================================================== */
        /*
         * Add the correct display in IE 9-.
         * 1. Add the correct display in Edge, IE, and Firefox.
         */
        details,
        menu {
            display: block;
        }

        /*
         * Add the correct display in all browsers.
         */
        summary {
            display: list-item;
        }

        /* Scripting
           ========================================================================== */
        /**
         * Add the correct display in IE 9-.
         */
        canvas {
            display: inline-block;
        }

        /**
         * Add the correct display in IE.
         */
        template {
            display: none;
        }

        /* Hidden
           ========================================================================== */
        /**
         * Add the correct display in IE 10-.
         */
        [hidden] {
            display: none;
        }

        fieldset {
            margin: 0;
            padding: 0;
            -webkit-margin-start: 0;
            -webkit-margin-end: 0;
            -webkit-padding-before: 0;
            -webkit-padding-start: 0;
            -webkit-padding-end: 0;
            -webkit-padding-after: 0;
            border: 0;
        }

        legend {
            margin: 0;
            padding: 0;
            display: block;
            -webkit-padding-start: 0;
            -webkit-padding-end: 0;
        }
        input,
        button {
            font-family:'Pridi', serif;
        }

        * {
            box-sizing: border-box;
        }

        .s130 {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            font-family:'Pridi', serif;
            padding: 15px;
        }

        .s130 form {
            width: 100%;
            max-width: 790px;
            padding-top: 5px;
        }

        .s130 form .inner-form {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .s130 form .inner-form .input-field {
            height: 68px;
        }

        .s130 form .inner-form .input-field input {
            height: 100%;
            background: transparent;
            border: 0;
            display: block;
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #000;
        }

        .s130 form .inner-form .input-field input.placeholder {
            color: #222;
            font-size: 16px;
        }

        .s130 form .inner-form .input-field input:-moz-placeholder {
            color: #222;
            font-size: 16px;
        }

        .s130 form .inner-form .input-field input::-webkit-input-placeholder {
            color: #222;
            font-size: 16px;
        }

        .s130 form .inner-form .input-field input:hover, .s130 form .inner-form .input-field input:focus {
            box-shadow: none;
            outline: 0;
        }

        .s130 form .inner-form .input-field.first-wrap {
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            background: #f6e8c5;
        }

        .s130 form .inner-form .input-field.first-wrap input {
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .s130 form .inner-form .input-field.first-wrap .svg-wrapper {
            min-width: 80px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .s130 form .inner-form .input-field.first-wrap svg {
            width: 36px;
            height: 36px;
            fill: #222;
        }

        .s130 form .inner-form .input-field.second-wrap {
            min-width: 216px;
        }

        .s130 form .inner-form .input-field.second-wrap .btn-search {
            height: 100%;
            width: 100%;
            white-space: nowrap;
            font-size: 16px;
            color: #fff;
            border: 0;
            cursor: pointer;
            position: relative;
            z-index: 0;
            background: #F38644;
            transition: all .2s ease-out, color .2s ease-out;
            font-weight: 300;
        }

        .s130 form .inner-form .input-field.second-wrap .btn-search:hover {
            background: #F38644;
        }

        .s130 form .inner-form .input-field.second-wrap .btn-search:focus {
            outline: 0;
            box-shadow: none;
        }

        .s130 form .info {
            font-size: 15px;
            color: #ccc;
            padding-left: 26px;
        }

        @media screen and (max-width: 992px) {
            .s130 form .inner-form .input-field {
                height: 50px;
            }
        }

        @media screen and (max-width: 767px) {
            .s130 form .inner-form .input-field.first-wrap .svg-wrapper {
                min-width: 40px;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-pack: center;
                justify-content: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0 10px;
            }
            .s130 form .inner-form .input-field.first-wrap svg {
                width: 26px;
                height: 26px;
                fill: #222;
            }
            .s130 form .inner-form .input-field.second-wrap {
                min-width: 100px;
            }
            .s130 form .inner-form .input-field.second-wrap .btn-search {
                font-size: 13px;
            }
        }

        /*# sourceMappingURL=Searchs_130.css.map */

    </style>
    <div class="container">
        <br>
        <br>
        <br>
        <div class="s130">
            <form action="/group" method="get">
                <div class="inner-form">
                    <div class="input-field first-wrap">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>
                        </div>
                        <input id="search" type="search" name="search"placeholder="กลุ่มที่ท่านจะเข้าร่วม ?" />
                    </div>
                    <div class="input-field second-wrap">
                        <button type="submit" class="btn-search">SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-7 col-9" style="margin: 0 auto;"><a href="/group/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#5bb298; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; box-shadow: 0 8px 6px -6px #a3a3a3;">+ สร้างกลุ่ม </a></div>
        </div>
        <br>
        <nav class="nav nav-pills nav-justified" style="background-color: white;">
            <a style="font-family:'Pridi', serif; color: #F38644;  " class="nav-item nav-link" href="/group">กลุ่มทั้งหมด</a>
            <a style="font-family:'Pridi', serif;background-color: #F38644;" class="nav-item nav-link active" href="/group/groupsurvey">กลุ่มแนะนำที่เหมาะกับคุณ</a>
        </nav>
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
                                                <button  type="submit" class="btn button01" style="background-color: #fbb370;">เข้าร่วมกลุ่ม</button>
                                            @endif
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                @endforeach
            @endif

        </div>
        <br>
        <br>
        <br>

        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark" style="background-color: #5bb298;">

            <!-- Copyright -->
            <div style="background-color:#5bb298;font-family:'Pridi',serif; color: white;">
                <div class="footer-copyright text-center py-3">© 2020 Copyright Rukyim. All Rights Reserved
                </div>
            </div>
            <!-- Copyright -->

        </footer>
@endsection

</body>


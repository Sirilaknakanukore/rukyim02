<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <style>

        #main{
            width:100%;
            height:100%;
            margin:0 auto
        }
        textarea{
            line-height:1.6;
            font-size:137.5%;
            padding:8%;
            border:0;
            border-top:1px solid #FFF;
            background:white;
            width:100%;height:100%;
            overflow-y:scroll;
            overflow-x:hidden;
            font-family:'Pridi',serif;
            outline:0
        }
        .select2-container {
            min-width: 100%;
            height: 50px;
            font-family:'Pridi',serif;
        }

        .select2-results__option {
            padding-right: 20px;
            vertical-align: middle;
        }
        .select2-results__option:before {
            content: "";
            display: inline-block;
            position: relative;
            height: 20px;
            width: 20px;
            border: 2px solid #e9e9e9;
            border-radius: 4px;
            background-color: #fff;
            margin-right: 20px;
            vertical-align: middle;

        }
        .select2-results__option[aria-selected=true]:before {
            font-family:fontAwesome;
            content: "\f00c";
            color: #fff;
            background-color: #f77750;
            border: 0;
            display: inline-block;
            padding-left: 3px;
        }
        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #fff;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #eaeaeb;
            color: #272727;
        }
        .select2-container--default .select2-selection--multiple {
            margin-bottom: 10px;
        }
        .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
            border-radius: 4px;
        }
        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #f77750;
            border-width: 2px;

        }
        .select2-container--default .select2-selection--multiple {
            border-width: 2px;
        }
        .select2-container--open .select2-dropdown--below {

            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);

        }


    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/blog.css');?>">
    <br>
    <br>
    <div class="container">
        <br>
        <form method="POST" action="/blog/store" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group" style="font-family:'Pridi',serif; ">
                <label for="text" class="control-label">ชื่อหัวข้อ</label>
                <input style="border: none;" class="form-control" name="name" type="text" id="text" placeholder="หัวข้อเรื่อง">
            </div>

            <div class="form-group" style="font-family:'Pridi',serif;">
                <label for="due" class="control-label">ใส่ภาพหน้าปก</label>
                <input style="border: none;" class="form-control" name="cover_image" type="file">
            </div>
            <label for="text" class="control-label" style="font-family:'Pridi',serif;">เพิ่ม tag ที่เกี่ยวข้องกับบทความของคุณ</label>

            <select class="js-select2" multiple="multiple" name="tags[]">
                <option value="ฟังเพลง"  data-badge="">ฟังเพลง</option>
                <option value="ปลูกต้นไม้"  data-badge="">ปลูกต้นไม้</option>
                <option value="ทำอาหาร"  data-badge="">ทำอาหาร</option>
                <option value="งานฝีมือ"  data-badge="">งานฝีมือ</option>
                <option value="งานศิลปะ"  data-badge="">งานศิลปะ</option>
                <option value="ท่องเที่ยว"  data-badge="">ท่องเที่ยว</option>
                <option value="ธรรมชาต"  data-badge="">ธรรมชาติ</option>
                <option value="สัตว์เลี้ยง"  data-badge="">สัตว์เลี้ยง</option>
                <option value="ธรรมะ"    data-badge="">ธรรมะ</option>
                <option value="เล่นกีฬา"  data-badge="">เล่นกีฬา</option>
            </select>
            <div id="main">
                <textarea id="editor" name="description" placeholder="เขียนเรื่องเล่า"cols="45" rows="5"></textarea>
            </div>
            {{--<div class="card mt-2" style="border: none;">--}}
            {{--<div class="card-body" style="border: none;" >--}}
            {{--<div id="tags" class="tags-container">--}}
            {{--<span style="font-family:'Pridi', serif;" class="tag">ติดแท็กเรื่องเล่า</span>--}}
            {{--<input style="border: none;" id="search" name="tags" type="text"/>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <br>
            <br>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;" >เขียนบันทึกเสร็จสิ้น</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

    <script>

        $(".js-select2").select2({
            closeOnSelect : false,
            placeholder : "เลือกหมวดหมู่",
            allowHtml: true,
            allowClear: true
        });
    </script>


@endsection
</body>
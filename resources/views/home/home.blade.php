@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <style class="cp-pen-styles">.nopad {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        /*image gallery*/
        .image-checkbox {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }
        .image-checkbox input[type="checkbox"] {
            display: none;
        }

        .image-checkbox-checked {
            border-color: #714233;
        }
        .image-checkbox .fa {
            position: absolute;
            color: #4A79A3;
            background-color: #fff;
            padding: 10px;
            top: 0;
            right: 0;
        }
        .image-checkbox-checked .fa {
            display: block !important;
        }
    </style>
    <div class="container">
        <br>
        <br>
        <h3 style="font-family:'Pridi', serif; color: #4c110f; text-align: center;">เลือกผู้ช่วยของคุณ <br/>
            <span style="font-family:'Pridi', serif; color: #e49965; font-size: 20px;">(เลือก 1 คำตอบ)</span></h3>

        <form style="font-family:'Pridi', serif;" class="form" action="/avatar/store" method="post">
            {{ csrf_field() }}
            @foreach($data as $image)
                <div class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                    <label class="image-checkbox">
                        <?php $img = json_decode($image);
                            $filename = json_decode($img->filename);?>
                            <img src="{{ asset('/image/'.$filename[0]) }}" style="width: 50%; height: 80%">
                        <input type="checkbox" name="image_id" value="{{ $img->id }}">
                    </label>
                </div>
                <br>
                <br>
            @endforeach
            <input type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;">
        </form>

    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>// image gallery
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            } else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop("checked", !$checkbox.prop("checked"))

            e.preventDefault();
        });
        //# sourceURL=pen.js
    </script>



@endsection


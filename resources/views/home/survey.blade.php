@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <style>
        .inputGroup {
            background-color: #fff;
            display: block;
            margin: 10px 0;
            position: relative;

        }
        .inputGroup label {
            padding: 12px 30px;
            width: 100%;
            display: block;
            text-align: left;
            color: #3C454C;
            cursor: pointer;
            position: relative;
            border-radius: 10px;
            z-index: 2;
            transition: color 200ms ease-in;
            overflow: hidden;
        }
        .inputGroup label:before {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            content: '';
            background-color: #F38644;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
            transform: translate(-50%, -50%) scale3d(1, 1, 1);
            transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            z-index: -1;
        }
        .inputGroup label:after {
            width: 32px;
            height: 32px;
            content: '';
            border: 2px solid #D1D7DC;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
            background-repeat: no-repeat;
            background-position: 2px 3px;
            border-radius: 50%;
            z-index: 2;
            position: absolute;
            right: 30px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 200ms ease-in;
        }
        .inputGroup input:checked ~ label {
            color: #fff;
        }
        .inputGroup input:checked ~ label:before {
            -webkit-transform: translate(-50%, -50%) scale3d(56, 56, 1);
            transform: translate(-50%, -50%) scale3d(56, 56, 1);
            opacity: 1;
        }
        .inputGroup input:checked ~ label:after {
            background-color: #714233;
            border-color: #714233;

        }
        .inputGroup input {
            width: 32px;
            height: 32px;
            order: 1;
            z-index: 2;
            position: absolute;
            right: 30px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            visibility: hidden;
        }

        .form {
            padding: 0 16px;
            max-width: 550px;
            margin: 50px auto;
            font-size: 18px;
            font-weight: 600;
            line-height: 36px;

        }

        body {
            background-color: #D1D7DC;
            font-family: 'Fira Sans', sans-serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
        }

        code {
            background-color: #9AA3AC;
            padding: 0 8px;
        }

    </style>

    <div class="container">

        <br>

        <h3 style="font-family:'Pridi', serif; color: #4c110f; text-align: center;">เลือกสิ่งที่คุณสนใจ <br/>
            <span style="font-family:'Pridi', serif; color: #e49965; font-size: 20px;">(สามารถเลือกได้ 1 คำตอบ)</span></h3>

        <form style="font-family:'Pridi', serif;" class="form" action="/backend/survey/store" method="POST">
            {{ csrf_field() }}
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option1" name="description[]" value="ฟังเพลง" type="checkbox"/>
                <label for="option1">ฟังเพลง</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option2" name="description[]" value="ปลูกต้นไม้" type="checkbox"/>
                <label for="option2">ปลูกต้นไม้</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option3" name="description[]" value="ทำอาหาร" type="checkbox"/>
                <label for="option3">ทำอาหาร</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option4" name="description[]" value="งานฝีมือ" type="checkbox"/>
                <label for="option4">งานฝีมือ</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option5" name="description[]" value="งานศิลปะ" type="checkbox"/>
                <label for="option5">งานศิลปะ</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option6" name="description[]" value="ท่องเที่ยว" type="checkbox"/>
                <label for="option6">ท่องเที่ยว</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option7" name="description[]" value="ธรรมชาติ" type="checkbox"/>
                <label for="option7">ธรรมชาติ</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option8" name="description[]" value="สัตว์เลี้ยง" type="checkbox"/>
                <label for="option8">สัตว์เลี้ยง</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option9" name="description[]" value="ธรรมมะ" type="checkbox"/>
                <label for="option9">ธรรมมะ</label>
            </div>
            <div class="inputGroup" style="border-radius: 10px;">
                <input id="option9" name="description[]" value="เล่นกีฬา" type="checkbox"/>
                <label for="option9">เล่นกีฬา</label>
            </div>
            <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: black; height: 50px;">เขียนบันทึกเสร็จสิ้น</button>
        </form>


    </div><!-- End Wrapper -->


@endsection
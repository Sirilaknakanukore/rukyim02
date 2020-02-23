<body style="background-color: #fbf5e3;">
<br>
<br>
<img style="width: 100%" src="<?php echo asset('assets/images/vv.jpg'); ?>">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <div class="row">
            @if(!empty($activities))
                @foreach($activities as $activity)
                    <div class="col-md-6" >
                        <a href="activity/detail/{{$activity->id}}" style="text-decoration: none;">
                            <div class="card-body" style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/activity_covers/{{$activity->activity_image}}" alt="" style="width: 100%;">
                                    </div>

                                    <form class="card-body" action="/activity/{{$activity->id}}" method="post">{{csrf_field()}}




                                        <h4 style="font-family:'Pridi', serif; color: #706e70; "> <span class="badge badge-secondary" style="background-color:#F38644; font-size: medium; font-family:'Pridi', serif; float: right;">ผู้สนใจ<br> {{$count}}</span> {{$activity->name}} </h4>
                                        <h6 style="font-family:'Pridi', serif; color: #706e70; ">{{$activity->date}}</h6>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($activity->description, 50)}} </h6>
                                    </form>
                                </div>
                            </div>
                        </a>

                    </div>

                @endforeach
            @endif
        </div>
        <br>
        <br>
        <br>
        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark" style="background-color: #faf4d5;">

            <div style="background-color: #F38644;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0" style="font-family:'Pridi',serif; ">ช่องทางการติดต่อ RUKYIM</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g white-text mr-4"> </i>
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">RUKYIM:-)</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p style="font-family:'Pridi',serif;">Rukyim ชุมชนแลกเปลี่ยนประสบการณ์ ทั้งองค์ความรู้หรือแบ่งปันชีวิตของท่าน</p>

                    </div>
                    <!-- Grid column -->



                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a style="font-family:'Pridi',serif; color: black; text-decoration: none;" href="#!">แบ่งปันประสบการณ์</a>
                        </p>
                        <p>
                            <a style="font-family: 'Pridi',serif; color: black; text-decoration: none;" href="#!">สร้างกลุ่ม</a>
                        </p>
                        <p>
                            <a style="font-family: 'Pridi',serif; color: black; text-decoration: none;" href="#!">กิจกรรม</a>
                        </p>
                        <p>
                            <a style="font-family: 'Pridi',serif; color: black; text-decoration: none;" href="#!">โปรไฟล์</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold" style="font-family: 'Pridi',serif;">ช่องทางติดต่อ</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p style="font-family: 'Pridi',serif;">
                            <i class="fas fa-home mr-3"></i> บางนาตราด 13 , 10260</p>
                        <p style="font-family: 'Pridi',serif;">
                            <i class="fas fa-envelope mr-3"></i> Rukyim@example.com</p>
                        <p style="font-family: 'Pridi',serif;">
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p style="font-family: 'Pridi',serif;">
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div style="background-color: #faf7e7;">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/"> Rukyim.com</a>
                </div>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->


@endsection
</body>


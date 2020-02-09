<br>
<br>

<img style="width: 100%" src="<?php echo asset('assets/images/imgg-01.jpg'); ?>">

<div class="row">
    <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="blog/create"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#F38644; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">แบ่งปันประสบการณ์ <i class="fas fa-pencil-alt"></i></a></div>
</div>
<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
        <div class="card-deck">
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 1.png');?>"></center>
                    <h5 class="card-title"style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- โพสต์ -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">เขียนเรื่องเล่าหรือแบ่งปันประสบกาณ์ให้ผู้อื่น</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 2.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กลุ่ม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">พูดคุยแลกเปลี่ยนข้อมูลต่างๆ หรือปรึกษาพูดคุยกับผู้สนใจเรื่องเดียวกัน</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="card"  style="border: none; background-color:#fbf5e3;">
                <div class="card-body" style="background-color: #fce7be; border-radius: 25px;">
                    <center><img style="width:50%; margin-top: -100px;" src="<?php echo asset('assets/images/Artboard – 3.png');?>"></center>
                    <h5 class="card-title" style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e;">- กิจกรรม -</h5>
                    <h6 class="card-text" style="font-family:'Pridi',serif; text-align: center; color: #9d9287;">ข้อมูลข่าวสารเกี่ยวกับกิจกรรมต่างๆ และกิจกรรมที่เราสนใจ</h6>
                </div>
            </div>
        </div>
        </div>
            <br><br>
          <h6 style="font-family:'Pridi',serif; text-align: center; color: #4e4e4e; font-size: 25px;">เรื่องเล่ายอดนิยม</h6>
            {{--new blog--}}
            <div class="row">
            @if(!empty($blogs))
                @foreach($blogs as $blog)
                    <div class="col-md-6" >
                        <a href="blog/detail/{{$blog->id}}" style="text-decoration: none;">
                            <div class="card-body " style="border: none;">
                                <div class="card mb-sm-2 box-shadow" style="border: none;background-color: #fdf9f3; border-radius: 25px;">
                                    <div class="card-image" style="overflow: hidden;
  width: 100%; height: 200px;">
                                        <img src="uploads/album_covers/{{$blog->cover_image}}" alt="" style="width: 100%;">
                                    </div>
                                    <form class="card-body" action="/blog/{{$blog->id}}" method="post">{{csrf_field()}}
                                        <h4 style="font-family:'Pridi', serif; color: #706e70; ">{{$blog->name}}</h4>
                                        <h6 style="font-family:'Pridi', serif; font-size: 20px;text-decoration: none; color: black; " >{{Illuminate\Support\Str::limit($blog->description, 50)}} </h6>
                                        <hr>
                                        <h6 style="font-family:'Pridi',serif; color: #cac7c1;text-decoration: none;"> ชื่อผู้ใช้ : {{ Auth::user()->name }}</h6>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button style="float: right; background: none; margin-top: -10px; color: #F38644;"class="btn"><i class="fas fa-trash-alt"></i></button>
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
        <div class="row">
            <div class="col-md-5 col-8" style="margin: 0 auto;"><a href="/blog"class="btn btn-block" style="font-family:'Pridi',serif; border-radius:40px; background-color:#6B84B5; z-index:999;color: white;width: 100%; margin-top: -20px; height: 50px;font-size: 18px; padding-top: 9px; ">ดูทั้งหมด -></a></div>
        </div>
    </div>

    {{--<a href="https://lin.ee/jtM5xJU"><img height="36" border="0" src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png"></a>--}}
    <br>
    <br>
    <br>

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left" style="background-color: black;">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mb-4" style="color: white;font-family:'Pridi', serif;">Content</h5>
                    <p style="color: white;font-family:'Pridi', serif;">Rukyim</p>
                    <p style="color: white;font-family:'Pridi', serif;">ชุมชนแลกเปลี่ยนประสบการณ์ของคนวัยเก๋า แชร์เรื่องราวหรือบทความ</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4" style="color: white;font-family:'Pridi', serif;">About</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="/blog" style="color: white;font-family:'Pridi', serif; text-decoration: none;">แบ่งปันเรื่องราว</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="/group" style="color: white;font-family:'Pridi', serif; text-decoration: none;">สร้างกลุ่ม</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="/activity" style="color: white;font-family:'Pridi', serif; text-decoration: none;">กิจกรรม</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="/profile" style="color: white;font-family:'Pridi', serif; text-decoration: none;">โปรไฟล์</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4" style="color: white;font-family:'Pridi', serif; text-decoration: none;">Address</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="color: white;font-family:'Pridi', serif; text-decoration: none;">
                                <i class="fas fa-home mr-3" style="color: white;"></i>บางนาตราด</p>
                        </li>
                        <li>
                            <p style="color: white;font-family:'Pridi', serif; text-decoration: none;">
                                <i class="fas fa-envelope mr-3" style="color: white;" ></i> rukyim@gmail.com</p>
                        </li>
                        <li>
                            <p style="color: white;font-family:'Pridi', serif; text-decoration: none;">
                                <i class="fas fa-phone mr-3" style="color: white;"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p style="color: white;font-family:'Pridi', serif; text-decoration: none;">
                                <i class="fas fa-print mr-3" style="color: white;"></i> + 01 234 567 89</p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4" style="color: white;font-family:'Pridi', serif;" >Follow Us</h5>

                    <!-- Facebook -->
                    <a type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-f" style="color: white;"></i>
                    </a>
                    <!-- Twitter -->
                    <a type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter" style="color: white;"></i>
                    </a>
                    <!-- Google +-->
                    <a type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g" style="color: white;"></i>
                    </a>
                    <!-- Dribbble -->
                    <a type="button" class="btn-floating btn-dribbble">
                        <i class="fab fa-dribbble" style="color: white;"></i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/"> Rukyim.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

@endsection

</body>


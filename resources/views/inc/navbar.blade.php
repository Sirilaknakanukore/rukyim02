<header>
    <!-- Fixed navbar -->

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top " style="background-color: #ffffff;">
        <a style="font-family: 'Pridi', serif; color: #4c110f;" class="navbar-brand" href="/">RUKYIM:-)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a style="font-family: 'Pridi', serif; color: #4c110f;" class="nav-link" href="/blog">เรื่องเล่า</a>
                </li>

                <li class="nav-item dropdown">
                    <a style="font-family: 'Pridi', serif; color: #4c110f;" class="nav-link" href="/group">สร้างกลุ่ม</a>
                </li>

                <li class="nav-item dropdown">
                    <a style="font-family: 'Pridi', serif; color: #4c110f;" class="nav-link" href="/activity">กิจกรรม</a>
                </li>

                <li class="nav-item dropdown">
                    <a style="font-family: 'Pridi', serif; color: #4c110f;" class="nav-link" href="/profile">โปรไฟล์</a>
                </li>
            </ul>

            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@if (Auth::guest())--}}
                    {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                {{--@else--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">--}}
                            {{--<img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>--}}
                            {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        </div>
    </nav>
</header>
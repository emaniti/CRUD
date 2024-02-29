        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Header Area Start-->
        {{-- {{ $contact_info->social_links }} --}}
        <header class=" bg-white ">
            <div class="header-top ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8">
                            <div class="header-top-info">
                                <div class="social-links">

                                      <a target="_blank" href="{{ $contact_info->facebook_link }}"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="{{ $contact_info->instagram_link }}"><i class="fa fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCgqFa9rxp1Yj2qVqaEBLeew"><i class="fa fa-youtube"></i></a>
                                    {{-- <a href="{{ $contact_info->facebook }}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ $contact_info->instagram }}"><i class="fa fa-instagram"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <div class="header-login-register">
                                <ul class="login">
                                    <li>

                                            @if (auth()->user())
                                            <div class="dropdown text-white py-3 mb-0 border-0">
                                                <button class="btn btn-transparent dropdown-toggle border-0 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   Welcome {{auth()->user()->account_updated ? auth()->user()->name : auth()->user()->user_name}}
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        {{-- <a class="dropdown-item text-dark" href="{{route('profile.show')}}">profile</a> --}}
                                                        @if (trim(auth()->user()->role->name) === 'student')
                                                        <a class="dropdown-item text-dark" href="{{route('studetn.edit.account')}}">Edit account</a>
                                                        <a class="dropdown-item text-dark" href="{{url('/student/dashboard')}}">Student Dashboard</a>
                                                        @elseif (trim(auth()->user()->role->name) === 'admin')
                                                        <a class="dropdown-item text-dark" href="{{url('/admin/dashboard')}}">Admin Dashboard</a>
                                                        @elseif (trim(auth()->user()->role->name) === 'teacher')

                                                        <a class="dropdown-item text-dark" href="{{url('/teacher/dashboard')}}">Teacher Dashboard</a>
                                                        <a class="dropdown-item text-dark" href="{{route('teacher.edit.account')}}">Edit account</a>
                                                        @endif
                                                        <a class="dropdown-item text-dark" href="{{url('/logout')}}">logout</a>

                                                        {{-- <form action="{{route('logout')}}" method="post">
                                                            @csrf
                                                        <button type="submit" class="dropdown-item">logout</button> --}}
                                                    </div>
                                                </div>
                                            @else
                                                <a href="{{ url('/login') }}"><i class="fa fa-key"></i>Login</a>
                                            @endif
                                        </li>
                                </ul>
                                <!--<ul class="register">
                                    <li>
                                        <a href="!#"><i class="fa fa-lock"></i>Sign Up</a>
                                        <div class="register-form">
                                            <h4>Sign Up</h4>
                                            <span>Please sign up using account detail bellow.</span>
                                            <form action="!#" method="post">
                                                <div class="form-box">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" name="user-name" placeholder="Username">
                                                </div>
                                                <div class="form-box">
                                                    <i class="fa fa-lock"></i>
                                                    <input type="password" name="user-password" placeholder="Password">
                                                </div>
                                                <div class="form-box">
                                                    <i class="fa fa-envelope"></i>
                                                    <input type="email" name="user-email" placeholder="Email">
                                                </div>
                                                <div class="button-box">
                                                    <input checked data-toggle="toggle" type="checkbox">
                                                    <span>Remember me</span>
                                                    <button type="submit" class="register-btn">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Logo Mainmenu Start-->
            <div class="header-logo-menu ">
                <div class="container">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{asset('img/logo/logo.png')}}" alt="TECHEDU"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 d-none d-lg-block">
                                <div class="mainmenu-area">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('/about-us') }}">About us</a></li>
                                                <li>
                                                    <a href="{{ url('/seriess') }}">Books <i class="fa fa-angle-down"></i></a>
                                                    <ul class="sub-menu">
                                                        @isset($seriess)
                                                            @if ($seriess)
                                                                @foreach ($seriess as $series )
                                                                    <li><a href="{{ url('/series', $series->id) }}">{{$series->series_name}}</a></li>
                                                                @endforeach
                                                            @endif
                                                        @endisset

                                                    </ul>

                                                </li>
                                                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                                                <!--<li>
                                                    <a href="class-grid.html">Teacher Resources <i class="fa fa-angle-down"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#!">Teacher’s guide</a></li>
                                                        <li><a href="#!">Parent Resources</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    {{-- <ul class="header-search">
                                        <li class="search-menu">
                                            <i id="toggle-search" class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <!--Search Form-->
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="!#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End of Search Form--> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Logo Mainmenu-->
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('/about') }}">About us</a></li>
                                                <li>
                                                    <a href="{{ url('/books') }}">Books</a>
                                                    <ul>
                                                        @isset($seriess)
                                                        @if ($seriess)
                                                            @foreach ($seriess as $series )
                                                                <li><a href="{{ url('/series', $series->id) }}">{{$series->series_name}}</a></li>
                                                            @endforeach
                                                        @endif
                                                    @endisset
                                                    </ul>

                                                </li>
                                                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                                                <!--<li>
                                                    <a href="class-grid.html">Teacher Resources</a>
                                                    <ul>
                                                        <li><a href="#!">Teacher’s guide</a></li>
                                                        <li><a href="#!">Parent Resources</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->
        </header>
        <!--End of Header Area-->

<nav class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="{{ route('home') }}">
                <img src="{{ asset('frontend/img/logo/ankur_logo.png') }}" alt="">
            </a>
        </div>
        <nav>
            <div class="nav-mobile">
                <a id="navbar-toggle" href="#!"><span></span>
                </a>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/img/nav/nav_home.png') }}" class="img-fluid" alt="Home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('website.about') }}">
                        <img src="{{ asset('frontend/img/nav/about_nav.png') }}" class="img-fluid" alt="About">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('website.courses') }}">
                        <img src="{{ asset('frontend/img/nav/air_nav.png') }}" class="img-fluid" alt="Services">
                        Courses
                    </a>
                </li>

                <li>
                    <a href="{{ route('website.catalogue') }}">
                        <img src="{{ asset('frontend/img/nav/gallery_nav.png') }}" class="img-fluid" alt="catalogue">
                        Catalogue
                    </a>
                </li>

                <li>
                    <a href="{{ route('website.blogs') }}">
                        <img src="{{ asset('frontend/img/nav/news_nav.png') }}" class="img-fluid" alt="News">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="{{ route('website.contact') }}"><img src="{{ asset('frontend/img/nav/contact_nav.png') }}" alt="Contact">
                        Contact
                    </a>
                </li>
                @if (auth()->check())
                    @if(auth()->user()->role_id == 3)
                        <li>
                            <a href="{{route('teacher.index')}}">
                                <img src="{{ asset('frontend/img/nav/about_nav.png') }}" class="img-fluid" alt="About">
                                {{auth()->user()->role->name }} Profile
                            </a>
                        </li>
                    @elseif(auth()->user()->role_id == 2)

                        <li>
                            <a href="{{route('student.index')}}">
                                <img src="{{ asset('frontend/img/nav/about_nav.png') }}" class="img-fluid" alt="About">
                                {{auth()->user()->role->name }} Profile
                            </a>
                        </li>
                    @elseif(auth()->user()->role_id == 1)

                        <li>
                            <a href="{{route('school.index')}}">
                                <img src="{{ asset('frontend/img/nav/about_nav.png') }}" class="img-fluid" alt="About">
                                {{auth()->user()->role->name }} Dashboard
                            </a>
                        </li>
                    @endif
                @else
                <li>
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('frontend/img/nav/air_nav.png') }}" class="img-fluid" alt="Services">
                        Login
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
    <div id="navbar-img">
        <img src="{{ asset('frontend/img/nav/nav-bg.png') }}" class="img-fluid" alt="Navbar img">
    </div>
</nav>

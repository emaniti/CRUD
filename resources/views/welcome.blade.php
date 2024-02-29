<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KnowledgeWave :: Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="kav-custom.css">

		<!-- Modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Header Area Start-->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-8">
                            <div class="header-top-info">
                                <div class="social-links">
                                    <a href="!#"><i class="fa fa-facebook"></i></a>
                                    <a href="!#"><i class="fa fa-google-plus"></i></a>
                                    <a href="!#"><i class="fa fa-twitter"></i></a>
                                    <a href="!#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="!#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <div class="header-login-register">
                                <ul class="login">
                                    <li>
                                        <a href="!#"><i class="fa fa-key"></i>Login</a>
                                        <div class="login-form">
                                            <h4>Login</h4>
                                            <form action="{{ route('login') }}" method="post">
                                                @csrf
                                                <div class="form-box">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" name="user-name" placeholder="Username">
                                                </div>
                                                <div class="form-box">
                                                    <i class="fa fa-lock"></i>
                                                    <input type="password" name="user-password" placeholder="Password">
                                                </div>
                                                <div class="button-box">
                                                    <button type="submit" class="login-btn">Login</button>
                                                </div>
                                            </form>
                                        </div>
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
            <div class="header-logo-menu sticker">
                <div class="container">
                    <div class="logo-menu-bg">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt="TECHEDU"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 d-none d-lg-block">
                                <div class="mainmenu-area">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li class="current"><a href="index.html">Dashboard</a></li>
                                                <li><a href="about.html">About us</a></li>
                                                <li>
                                                    <a href="books.html">Books <i class="fa fa-angle-down"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#!">English Fundamentals</a></li>
                                                        <li><a href="#!">English Fundamentals 3</a></li>
                                                        <li><a href="#!">Reading</a></li>
                                                        <li><a href="#!">Reading 2</a></li>
                                                        <li><a href="#!">Language</a></li>
                                                        <li><a href="#!">Language 3</a></li>
                                                        <li><a href="#!">Science</a></li>
                                                        <li><a href="#!">Social Sciences</a></li>
                                                        <li><a href="#!">Social Sciences 2</a></li>                                                        
                                                    </ul>
                                                
                                                </li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <!--<li>
                                                    <a href="class-grid.html">Teacher Resources <i class="fa fa-angle-down"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#!">Teacher’s guide</a></li>
                                                        <li><a href="#!">Parent Resources</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-search">
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
                                    <!--End of Search Form-->
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
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="current"><a href="index.html">Dashboard</a></li>
                                                <li><a href="about.html">About us</a></li>
                                                <li>
                                                    <a href="books.html">Books</a>
                                                    <ul>
                                                        <li><a href="#!">English Fundamentals</a></li>
                                                        <li><a href="#!">English Fundamentals 3</a></li>
                                                        <li><a href="#!">Reading</a></li>
                                                        <li><a href="#!">Reading 2</a></li>
                                                        <li><a href="#!">Language</a></li>
                                                        <li><a href="#!">Language 3</a></li>
                                                        <li><a href="#!">Science</a></li>
                                                        <li><a href="#!">Social Sciences</a></li>
                                                        <li><a href="#!">Social Sciences 2</a></li>                                                        
                                                    </ul>
                                                
                                                </li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <!--<li>
                                                    <a href="class-grid.html">Teacher Resources</a>
                                                    <ul>
                                                        <li><a href="#!">Teacher’s guide</a></li>
                                                        <li><a href="#!">Parent Resources</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="contact.html">Contact</a></li>
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
        <!--Slider Area Start-->
        <div class="slider-area slider-style-1">
            <div class="preview-2">
                <div id="nivoslider" class="slides">
                    <img src="img/slider/1.jpg" alt="" title="#slider-1-caption1"/>
                    <img src="img/slider/2.jpg" alt="" title="#slider-1-caption2"/>
                </div>
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="text-content">
                                        <h1 class="title1">Education for Kids</h1>
                                        <p class="sub-title">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo<br> at susp, vivamus orci urna.</p>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="!#">Enroll your child</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="text-content slide-2 hidden-xs">
                                        <h1 class="title1">Education for Kids</h1>
                                        <p class="sub-title">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo<br> at susp, vivamus orci urna.</p>
                                        <div class="banner-readmore">
                                            <a title="Read more" href="!#">Enroll your child</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Slider Area-->
        <!--Activity Area Start-->
        <div class="activity-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <img src="img/dashboard-skills/skills1.jpg" alt="">
                                
                            </div>
                            <h4>Fundamentals</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 activity">
                        <div class="single-activity">
                            <div class="single-activity-icon">
                                <img src="img/dashboard-skills/panda.jpg" alt="">
                                
                            </div>
                            <h4>Reading</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 activity">
                        <div class="single-activity mrg-res-top-md">
                            <div class="single-activity-icon">
                                <img src="img/dashboard-skills/oral1.jpg" alt="">
                            </div>
                            <h4>Language</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 activity">
                        <div class="single-activity mrg-res-top-md">
                            <div class="single-activity-icon">
                                <img src="img/dashboard-skills/health3.jpg" alt="">
                            </div>
                            <h4>Social Sciences</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Activity Area-->
        <!--Advertise Area Start-->
        <div class="home-intro advertise-area text-center section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Knowledge wave Teaching<br><span>Materials</span> and <span>Educational</span> Books<br>for Children</h2>
                        <p>Knowledgewave’s educational resources provide teachers with research-based lesson plans that promote continuity and consistency throughout a student’s education. Shop by subject to find Kindergarten grade books and resources. All of our teaching materials are correlated to Kindergarten Standards to ensure your students’ skills are where they need to be.</p>
                        <a href="!#">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Advertise Area-->
        <!--Class Area Start-->
        <div class="home-service class-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Services</h3>
                                <p>A nice slogan for service section</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="!#">
                                <img src="img/dashboard-service/serv-library.jpg" alt="">
                                <span class="class-date">Read<br>more</span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="!#">Our Library</a></h4>
                                <p>Knowledge Wave is proud to offer its extensive collection of books in various areas to tackle all sorts of grade school needs. Explore our rich array of products to see how they empower teachers and equip students with the modern-day skills they require to thrive inside and outside of the classroom.</p>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="!#">
                                <img src="img/dashboard-service/serv-resources.jpg" alt="">
                                <span class="class-date">Read<br>more</span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="!#">Our Reasources</a></h4>
                                <p>Knowledge Wave offers you the resources and tools needed to help students move to the next stage of learning smoothly. Our Teacher Resources help make your lesson plan a fun activity for you and your students. Our objective is to make teaching easier, get the message across to the students easily and effectively.</p>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="!#">
                                <img src="img/dashboard-service/serv-arts.jpg" alt="">
                                <span class="class-date">Read<br>more</span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="!#">Arts & Crafts</a></h4>
                                <p>Let us help you put the fun back in your class; or even at home with your kids. With our ideas for Arts & Crafts you spend less time thinking and planning and more time creating with your kids at school or at home. Learning becomes more interesting and engaging when combined with a fun activity your kids like.</p>
                            </div>                            
                        </div>
                    </div>            
                </div>        
                </div>
            </div>
        </div>
        <!--End of Class Area-->
        
        <!--Gallery Area Start-->
        <div class="home-library gallery-area section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Our Library</h3>
                                <p>Discove Our Fascinating Books Library</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul>
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter=".drawing">Drawing</li>
                                <li class="filter" data-filter=".excursions">Excursions</li>
                                <li class="filter" data-filter=".courses">Courses</li>
                                <li class="filter" data-filter=".play">Play time</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                    <div class="filter-items row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-01.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/1.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play courses overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-02.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/2.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Activities, Photos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-03.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/3.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Play Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-04.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/4.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Play</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-05.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/5.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Courses, Exursions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-06.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/12.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-07.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/6.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Excursions, Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing excursions overlay-hover">
                            <div class="overlay-effect">
                                <a href="!#"><img src="img/dashboard-library/lib-08.jpg" alt=""></a>
                                <div class="gallery-hover-effect">
                                    <a class="gallery-icon venobox" href="img/gallery/10.jpg"><i class="fa fa-image"></i></a>
                                    <span class="gallery-text">Drawing, Exursions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="view-gallery text-center">
                            <h4>Our library is just<span>waiting!</span> for you</h4>
                            <a href="!#" class="button-default">Visit Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Gallery Area-->
        
        <!--Footer Area Start-->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-info-container text-center section-padding">
                            <div class="footer-logo">
                                <a href="!#"><img src="img/logo/footer-logo.png" alt=""></a>
                            </div>
                            <div class="footer-info">
                                <span><i class="fa fa-map-marker"></i>El Azareta, Alexandria, Egypt</span>
                                <span><i class="fa fa-envelope"></i>Knowledgewave1@outlook.com</span>
                                <span><i class="fa fa-phone"></i>01222283711</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-container section-padding">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Our School</h4>
                                <ul class="footer-widget-list">
                                    <li><a href="!#">About Us</a></li>
                                    <li><a href="!#">Blog</a></li>
                                    <li><a href="!#">Contact</a></li>
                                    <li><a href="!#">Become a Teacher</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Links</h4>
                                <ul class="footer-widget-list">
                                    <li><a href="!#">Courses</a></li>
                                    <li><a href="!#">Events</a></li>
                                    <li><a href="!#">Gallery</a></li>
                                    <li><a href="!#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="single-footer-widget">
                                <h4>Support</h4>
                                <ul class="footer-widget-list">
                                    <li><a href="!#">Documentation</a></li>
                                    <li><a href="!#">Forums</a></li>
                                    <li><a href="!#">Language Packs</a></li>
                                    <li><a href="!#">Release Status</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="subscribe-container">
                                <p>Subscribe now and receive weekly newsletter with educational materials,  interesting posts, popular books and much more!</p>
                                <form action="!#">
                                    <div class="subscribe-form">
                                        <input type="email" name="email" placeholder="Your email here">
                                        <button type="submit"><i class="fa fa-send"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span>&copy; 2021 <a href="!#">Knowledge Wave</a>. All rights reserved</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="social-links">
                                        <a href="!#"><i class="fa fa-facebook"></i></a>
                                        <a href="!#"><i class="fa fa-google-plus"></i></a>
                                        <a href="!#"><i class="fa fa-twitter"></i></a>
                                        <a href="!#"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="!#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Area-->


		<!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.3.min.js"></script>

		<!-- Popper JS
		============================================ -->
        <script src="js/popper.js"></script>

		<!-- bootstrap JS
		============================================ -->
        <script src="js/bootstrap.min.js"></script>

		<!-- bootstrap Toggle JS
		============================================ -->
        <script src="js/bootstrap-toggle.min.js"></script>

        <!-- nivo slider js
		============================================ -->
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="lib/nivo-slider/dashboard.js"></script>

		<!-- wow JS
		============================================ -->
        <script src="js/wow.min.js"></script>

		<!-- meanmenu JS
		============================================ -->
        <script src="js/jquery.meanmenu.js"></script>

		<!-- Owl carousel JS
		============================================ -->
        <script src="js/owl.carousel.min.js"></script>

		<!-- Countdown JS
		============================================ -->
        <script src="js/jquery.countdown.min.js"></script>

		<!-- scrollUp JS
		============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>

		<!-- Waypoints JS
		============================================ -->
        <script src="js/waypoints.min.js"></script>

		<!-- Counterup JS
		============================================ -->
        <script src="js/jquery.counterup.min.js"></script>

		<!-- Slick JS
		============================================ -->
        <script src="js/slick.min.js"></script>

		<!-- Mix It Up JS
		============================================ -->
        <script src="js/jquery.mixitup.js"></script>

		<!-- Venubox JS
		============================================ -->
        <script src="js/venobox.min.js"></script>

		<!-- plugins JS
		============================================ -->
        <script src="js/plugins.js"></script>

        <!-- Google Map js
		============================================ -->

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		<script src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.763494, 90.432226)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		<!-- main JS
		============================================ -->
        <script src="js/main.js"></script>
    </body>
</html>
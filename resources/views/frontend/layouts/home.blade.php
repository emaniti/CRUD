@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
     <nav id="home" class="navigation hidden-lg">
        <div class="nav-container">
            <div class="brand">
                <a href="/index"><img src="{{ asset('img/logo/ankur_logo.png')}}" alt=""></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="{{url('/index')}}"><img src="{{ asset('img/nav/nav_home.png')}}" class="img-fluid" alt="Home">Home </a>

                    </li>
                    <li>
                        <a href="{{url('/about-us')}}"><img src="{{ asset('img/nav/about_nav.png')}}" class="img-fluid"
                                alt="About">About</a>
                    </li>
                    <li>
                        <a href="{{url('/courses')}}"><img src="{{ asset('img/nav/air_nav.png')}}" class="img-fluid" alt="Services">Courses</a>
                    </li>

                    <li>
                        <a href="{{url('/blogs')}}"><img src="{{ asset('img/nav/news_nav.png')}}" class="img-fluid" alt="News">Blog</a>
                    </li>

                    <li>
                        <a href="{{url('/contact')}}"><img src="{{ asset('img/nav/contact_nav.png')}}" alt="Contact">Contact</a>
                    </li>

                </ul>
            </nav>
        </div>
        <div id="navbar-img">
            <img src="{{ asset('img/nav/nav-bg.png')}}" class="img-fluid" alt="Navbar img">
        </div>
    </nav>
    <!--Navbar Area-->
    <nav class="navigation hidden-xs">
        <div class="nav-container">
            <div class="brand">
                <a href="index.html"><img src="{{ asset('img/logo.png')}}" alt=""></a>
            </div>


        </div>
        <div id="navbar-img">
            <img src="{{ asset('img/nav/nav-bg.png')}}" class="img-fluid" alt="Navbar img">
        </div>
    </nav>

    <!--Navbar Area Ends-->

  <!--Main Slider-->
    <section class="main-slider" id="banner">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_486_1_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_486_1" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1685" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{asset('img/main-slider/image-1.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('img/main-slider/image-1.jpg')}}">

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['160','160','160','160']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>The PrimeKidz School</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['200','200','200','200']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        	<h2><span class="text-parrot">We make</span> Kids education <br> <span class="text-orange">easier &amp; fun</span></h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['880','880','680','580']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['35','55','35','35']"
                        data-x="['left','left','left','left']"
                        data-y="['center','center','center','center']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        	<p>Eusmod tempor incididunt ut labore et dolore magna aliqua minim veniam <br> quis nostrud exercitation ullamco laboris dolor.</p>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['5','5','5','5']"
                        data-voffset="['125','130','120','120']"
                        data-x="['left','left','left','left']"
                        data-y="['center','center','center','center']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        	<a href="courses.html" class="theme-btn btn-style-one">Get Started</a>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['260','260','260','260']"
                        data-voffset="['125','125','125','125']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('img/icons/flower-1.png')}}" alt=""></figure>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['232','232','232','232']"
                        data-voffset="['205','175','195','155']"
                        data-x="['left','left','left','left']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('img/icons/pencil.png')}}" alt=""></figure>
                        </div>
                    </li>



                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('img/main-slider/image-3.jpg')}}">

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['160','160','160','160']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>The PrimeKidz School</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['200','200','200','200']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2><span class="text-parrot">We make</span> Kids education <br> <span class="text-orange">easier &amp; fun</span></h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['880','880','680','580']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['35','55','35','35']"
                        data-x="['left','left','left','left']"
                        data-y="['center','center','center','center']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <p>Eusmod tempor incididunt ut labore et dolore magna aliqua minim veniam <br> quis nostrud exercitation ullamco laboris dolor.</p>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['5','5','5','5']"
                        data-voffset="['125','130','120','120']"
                        data-x="['left','left','left','left']"
                        data-y="['center','center','center','center']"
                        data-textalign="['left','left','left','left']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="courses.html" class="theme-btn btn-style-one">Get Started</a>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['260','260','260','260']"
                        data-voffset="['125','125','125','125']"
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('img/icons/flower-1.png')}}" alt=""></figure>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['232','232','232','232']"
                        data-voffset="['205','175','195','155']"
                        data-x="['left','left','left','left']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('img/images/icons/pencil.png')}}" alt=""></figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->




<div class="waves hidden-xs" style="position:relative; ">
<div class="wave1 wave" style="
    background-image:url({{asset('img/background/1.png')}});width:100%;background-size:cover;" >

<div class="wave-details">
<h2><a href="/index">Home</a></h2>
<img src="{{ asset('img/icons/doll-44.png')}}"  class="hidden-img1"/>
</div>
	</div>

	<div class="wave2 wave" style="
    background-image:url({{asset('img/background/2.png')}});width:100%;background-size:cover;" >

<div class="wave-details">
<h2><a href="coueses.html">Courses</a></h2>
<img src="{{asset('img/icons/doll-55.png')}}"  class="hidden-img2"/>
</div>
	</div>

	<div class="wave3 wave" style="
    background-image:url({{asset('img/background/3.png')}});width:100%;background-size:cover;" >

<div class="wave-details">
<h2><a href="/about-us">About us</a></h2>
<img src="{{ asset('img/icons/doll-66.png')}}"  class="hidden-img3"/>
</div>
	</div>

	<div class="wave4 wave" style="
    background-image:url({{ asset('img/background/4.png')}});width:100%;background-size:contain;background-repeat:no-repeat;" >

<div class="wave-details">
<h2><a href="/contact">Contact</a></h2>
<img src="{{ asset('img/icons/doll-77.png')}}"  class="hidden-img4"/>
</div>
	</div>
	</div>


    <!-- End Call To Action -->




    <!--Offer Section-->
    <section id="offer" class="section-wrapper">
        <div class="container">

            <!-- upper part -->
            <div id="offer_upper">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="horizontal-heading light">

                            <h2>New Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- upper part Ends -->

            <!-- Lower Part -->
            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="offer-items wow zoomIn learning-program text-center  img11">

                        <img src="{{ asset('img/icons/Option1-Export-08.png')}}" class="img-fluid" alt="Learning Program">
                      <div class="img-details11">
					    <img src="{{ asset('img/icons/Option1-Export-14.png')}}" class="img-fluid img-ff" alt="Learning Program">
					  <h6>Learning Program</h6>
                       <ul>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>

					   </ul>

                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="offer-items wow zoomIn expert-teacher text-center img22">
                        <img src="{{ asset('img/icons/Option1-Export-09.png')}}" class="img-fluid" alt="Expert Teachers">
                        <div class="img-details22">
						<img src="{{ asset('img/icons/Option1-Export-14.png')}}" class="img-fluid img-ff" alt="Learning Program">
					   <h6>Expert Teachers</h6>
                         <ul>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>

					   </ul>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="offer-items wow zoomIn large-playground text-center img33">
                        <img src="{{ asset('img/icons/Option1-Export-10.png')}}" class="img-fluid" alt="Large Playground">
                        <div class="img-details33">
						<img src="{{ asset('img/icons/Option1-Export-14.png')}}" class="img-fluid img-ff" alt="Learning Program">
					   <h6>Large Playground</h6>
                         <ul>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>

					   </ul>
                    </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="offer-items wow zoomIn full-day text-center img44">
                        <img src="{{ asset('img/icons/Option1-Export-11.png')}}" class="img-fluid" alt="Full Day Program">
                       <div class="img-details44">
					   <img src="{{ asset('img/icons/Option1-Export-14.png')}}" class="img-fluid img-ff" alt="Learning Program">
					  <h6>Full Day Program</h6>
                        <ul>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>
					   <li><a href="">Chapter Name</a></li>

					   </ul>
                    </div>
                    </div>
                </div>

            </div>
            <!-- Lower Part Ends -->
        </div>
    </section>
    <!--Offer Section Ends-->
    <!--About Us Section-->
    <section id="about" class="section-wrapper">
        <div class="container">

            <!--Upper Part-->
           <div class="sec-title text-center wow slideInDown">
                <span class="icon-1 doll-5"></span>
                <span class="icon-2 icon-pencil-2"></span>
                <h2><span class="text-sky">About</span> Us</h2>
                <p>Sit amet consectetur elit usmod tempor dunt aliqua utas enim veniam tempore quis</p>
            </div>
            <!--Upper Part Ends-->

            <!--Lower Part-->
            <div class="row">
                <!-- Lower Left Side -->

                <!-- Lower Left Side Ends -->

                <!--Lower Right Side-->
                <div class="=col-md-2 col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="about-para text-center wow slideInDown">
					   <h3>Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet<span class="text-sky"> consectetur adcing elit Lorem </span> consectetur adcing elit Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.
                                           Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.

                        Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.

                        Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adcing elit Lorem ipsum dolor sit amet, consectetur adip iscing elit psum dolor sit amet. Aenean consectetur fringilla mi in mollis. Etiam eleifend sollicitudin dignissim.</p>

				   </div>
                    <!--About List-->



                </div>
                <!--Lower Right Side Ends-->

            </div>

            <!--Lower Part Ends-->
        </div>
        <!--About BG Image-->
        <div id="about-bg-img">
            <div class="about-bg-img1">
                <img src="{{ asset('img/about/about_us_element1.png')}}" class="img-fluid" alt="Element 1">
            </div>
            <div class="about-bg-img2">
                <img src="{{ asset('img/about/about_us_element2.png')}}" class="img-fluid" alt="Element 2">
            </div>
            <div class="about-bg-img3">
                <img src="{{ asset('img/about/about_us_element3.png')}}" class="img-fluid" alt="Element 3">
            </div>
            <div class="about-bg-img4">
                <img src="{{ asset('img/about/about_us_element4.png')}}" class="img-fluid" alt="Element 4">
            </div>
            <div class="about-bg-img5">
                <img src="{{ asset('img/about/about_us_element5.png')}}" class="img-fluid" alt="Element 5">
            </div>
        </div>
        <!--About BG Image Ends-->
    </section>
       <!--Gallery Section-->
    <section class="gallery-full-width no-pd-bottom">
        <div class="auto-container">
            <div class="sec-title text-center wow slideInDown">
                <span class="icon-1 doll-4 wow tada" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                <span class="icon-2 icon-moon"></span>
                <h2><span class="text-sky">Our</span> library</h2>
                <p>Dolor sit amet consectetur elit eiusmod tempor dunt aliqua utas enim veniam tempore quis nostrud ipsume<br> amet  onsectetur adipisicing elit sedo eiusmod tempor incididunt labore</p>
            </div>
        </div>

        <!--MixitUp Galery-->
        <div class="mixitup-gallery">

            <!--Filter-->
            <div class="filters text-center clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".campus">Campus</li>
                    <li class="filter" data-role="button" data-filter=".events">Events</li>
                    <li class="filter" data-role="button" data-filter=".photos">Photos</li>
                    <li class="filter" data-role="button" data-filter=".activity">Activities</li>
                    <li class="filter" data-role="button" data-filter=".video">Videos</li>
                </ul>
            </div>

            <div class="filter-list row clearfix">

                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus video col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/1.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/1.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all activity video col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/2.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/2.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus photos col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/3.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/3.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all events video col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/4.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/4.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all activity campus events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/5.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus video events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/6.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
  <!--Gallery Item Two-->
                <div class="gallery-item mix all activity campus events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/5.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus video events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/6.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus photos events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/7.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/7.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all photos video activity col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/8.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/8.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

				  <!--Gallery Item Two-->
                <div class="gallery-item mix all activity campus events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/5.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item Two-->
                <div class="gallery-item mix all campus video events col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('img/gallery/6.jpg')}}" alt="">
                            <!--Overlay Box-->
                            <div class="caption-box clearfix">
                                <div class="title">
                                    <h3><a href="#">Study Class</a></h3>
                                    <ul>
                                        <li><a href="#">Campus</a>,</li>
                                        <li><a href="#">Class</a>,</li>
                                        <li><a href="#">Learning</a>,</li>
                                    </ul>
                                </div>
                                <div class="icon-box">
                                    <a href="{{ asset('img/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    @endsection

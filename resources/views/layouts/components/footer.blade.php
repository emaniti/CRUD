<!--Footer Section-->
<footer id="footer-top"
    style="width:100%;background-image: url({{ asset('frontend/images/background/Option1-Export-16.png') }});">
    <div class="section-wrapper">
        <div class="container">
            <div id="contact-content">
                <div class="row">
                    <!--Contact Content 01-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="contact-content1">
                            <div class="contact-content-head text-center">
                                <a href="{{url('/index')}}"><img src="{{ asset('frontend/img/contact/footer_logo.png') }}"
                                        alt="wave Logo"></a>
                                <ul class="text-center footer-icons">
                                    <li><a href="https://wa.me/1207029002"><img
                                                src="{{ asset('frontend/images/icons/Option1-Export-17.png') }}"
                                                alt="wave Logo"></a></li>
                                    <li><a href="#"><img
                                                src="{{ asset('frontend/images/icons/Option1-Export-18.png') }}"
                                                alt="wave Logo"></a></li>
                                    <li><a href="{{$contactInfo->facebook_link}}"><img
                                                src="{{ asset('frontend/images/icons/Option1-Export-19.png') }}"
                                                alt="wave Logo"></a></li>
                                    <li><a href="{{$contactInfo->instagram_link}}"><img
                                                src="{{ asset('frontend/images/icons/Option1-Export-20.png') }}"
                                                alt="wave Logo"></a></li>

                                </ul>
                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!--Footer-Bottom Area-->
    <div id="footer-main">
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="footer-main-left">
                            <p><a href="{{url('/index')}}"><span>Knowledge Wave</span></a> &#169;&nbsp;2024. All Rights Reserved Powered By ILS</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="footer-main-right">
                            <p><a href="{{url('/index')}}"><span>Home -</span></a> <a href="{{url('/about-us')}}"><span>About Us
                                        -</span></a> <a href="{{url('/login')}}"><span>Login - </span></a>
                                <a href="{{url('/courses')}}"><span>Courses -</span></a><a
                                    href="{{url('/contact')}}"><span>Contact</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Bottom Area Ends-->
    <!--Footer Elements-->
    <div class="footer-elements">
        <img src="{{ asset('frontend/img/icons/element-2.png') }}" class="img-fluid" alt="">
    </div>
</footer>
<!--Footer Section Ends-->

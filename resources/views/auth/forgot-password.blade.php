@extends('layouts.guest')

@section('page_content')
<section id="contact-us" class="section-wrapper" style="padding:155px 0;    background: #13b4b2;">
    <div class="container">
        <div class="row">
            <!--Left Side-->

            <!--Right Side-->
            <div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div id="contact-us-right">

                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

        <x-jet-validation-errors class="mb-4" />


                    <form method="POST" action="{{ route('password.email') }}">
                        <div class="row">
                            @csrf
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group cntct-grp">
                                    <input type="email" name="email" :value="old('email')" required autofocus class="form-control contact-form" placeholder="Email"/>

                                </div>

                                <div class="contact-us-btn text-center" style="margin:auto;">
                                    <button type="submit" class="btn btn-general btn-about">{{ __('Email Password Reset Link') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Body Area Ends-->



@endsection

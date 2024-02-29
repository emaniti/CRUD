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


                    <x-jet-validation-errors class="mb-4" />


                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                        <div class="row">
                            @csrf
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group cntct-grp">
                                    <input type="email" name="email" :value="old('email')" required autofocus class="form-control contact-form" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group cntct-grp">
                                    <input  type="password" name="password" required autocomplete="new-password"  class="form-control contact-form" placeholder="Password" id="password"/>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group cntct-grp">
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" id="password_confirmation"   class="form-control contact-form" placeholder="Password Confirmation"/>
                                </div>
                            </div>

                            <div class="contact-us-btn text-center" style="margin:auto;">
                                <button type="submit" class="btn btn-general btn-about">{{ __('Password Reset') }}</button>
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

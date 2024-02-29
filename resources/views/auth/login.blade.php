@extends('frontend.app' , ['seriess'=>$seriess])
@section('title','Books')
@section('styles')
@endsection

@section('content')
<div class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                    <div class="bg-light border-circle w-100 h-100">

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <div class="single-title">
                        <h3>Login</h3>
                    </div>
                    <div class="contact-form-container">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="login-btn">Login</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

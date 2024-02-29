
@extends('frontend.layouts.app' , ['seriess'=>$seriess, 'contact_info'=> $contactInfo])
@section('title','Teacher Profile')
@section('content')

<!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area teachers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Teacher Profile</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="{{ url('teacher/dashboard') }}">Teacher Profile</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Teacher Details Area Start-->
<div class="teacher-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="teacher-details-image text-center">
                    <img src="{{ !empty(auth()->user()->profile_photo_path) ? asset(auth()->user()->profile_photo_path) : 'https://www.pngitem.com/pimgs/m/30-307416_profile-icon-png-image-free-download-searchpng-employee.png' }}" class="img-fluid w-100 h-100 text-center" alt="">
                </div>
                <div class="teacher-details-info">
                    <h4>{{auth()->user()->teacher->name}}</h4>
                    <div class="teacher-info-text">
                        <span>Name: {{auth()->user()->name }}</span>
                        <span>School: {{auth()->user()->teacher->school->school_name}}</span>
                        <span>Grades: @foreach (auth()->user()->teacher->grades as $grade)
                            <span class="badge">{{ $grade->grade_name }}</span>
                        @endforeach
                    </span>
                    </div>
                </div>
            </div>
            @yield('teacher_content')
        </div>
    </div>
</div>
    <!--End of Teacher Details Area-->

@endsection
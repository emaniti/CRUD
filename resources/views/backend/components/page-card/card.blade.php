@extends('backend.layout.metronic-layout')
@section('page_content')
@yield('custome_content')
<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label"> @yield('card_label')</h3>
            </div>
            <div class="card-toolbar">
                @yield('card_buttons')
            </div>
        </div>
        <div class="card-body">
            @yield('card_content')
        </div>
    </div>
@endsection
@extends('backend.components.page-card.card')
@section('custome_styles')
<link href="{{ asset('dist/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('card_label')
{{ $card_title }}
@endsection
@section('card_buttons')
    @yield('card_actions')
@endsection
@section('card_content')
    @yield('table_content')
@endsection

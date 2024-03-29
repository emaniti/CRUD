<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <!--begin::Head-->
        <head>
            <meta charset="utf-8" />
            <title>Crud</title>
            <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!--begin::Fonts-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
            <!--end::Fonts-->
            <!--begin::Page Scripts(used by this page)-->
            @yield('custome_styles')
            <!--end::Page Scripts-->
            <!--begin::Global Theme Styles(used by all pages)-->
            <link href="{{ asset('dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('dist/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
            <!--end::Global Theme Styles-->
            <!--begin::Layout Themes(used by all pages)-->
            <link href="{{ asset('dist/assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('dist/assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('dist/assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('dist/assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
            <!--end::Layout Themes-->
            <link rel="shortcut icon" href="{{asset('dist/assets/media/logos/favicon.ico')}}" />
            <style>
                .header-fixed.subheader-fixed.subheader-enabled .wrapper {
                    padding-top: 65px !important;
                }
            </style>
        </head>
        <!--end::Head-->
        <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
            @if (isset($blank))
            <div class="d-flex flex-column flex-root">
                <!--begin::Container-->
                @yield('page_content')
                <!--end::Container-->
            </div>
            @else

            <div class="d-flex flex-column flex-root">
                <!--begin::Page-->
                <div class="d-flex flex-row flex-column-fluid page">
                   @include('backend.components.metronic.menu')
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                        @include('backend.components.metronic.navbar')
                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Entry-->
                            <div class="d-flex flex-column-fluid">
                                <!--begin::Container-->
                            <div class="container">
                                @if(session()->has('message'))
                                        <div class="alert alert-custom alert-success alert-shadow gutter-b" role="alert">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="alert alert-custom alert-danger alert-shadow gutter-b" role="alert">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                                @yield('page_content')
                            </div>
                            <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>

            @endisset

            <!--begin::Global Config(global config for global JS scripts)-->
            <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
            <!--end::Global Config-->
            <!--begin::Global Theme Bundle(used by all pages)-->
            <script src="{{ asset('dist/assets/plugins/global/plugins.bundle.js') }}"></script>
            {{-- <script src="{{ asset('dist/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script> --}}
            <script src="{{ asset('dist/assets/js/scripts.bundle.js') }}"></script>
            <!--end::Global Theme Bundle-->
            <!--begin::Page Scripts(used by this page)-->
            @yield('custome_script')
            <!--end::Page Scripts-->
        </body>
</html>

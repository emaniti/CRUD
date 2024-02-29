<!DOCTYPE html>
<html lang="en">


    <head>
        @section('title','Teacher Profile')
        @include('layouts.components.header')
        <!-- Project Stylesheet -->
    </head>

    <body>
        <!-- Preloader -->

        <!-- Preloader Ends -->

        @include('layouts.components.navbar')

        @yield('page_content')

        @include('layouts.components.footer')

        @include('layouts.components.scripts')

    </body>


</html>

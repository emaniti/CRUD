<!DOCTYPE html>
<html lang="en">


<head>
    @include('layouts.components.header')
</head>

<body>
    <!-- Preloader -->

    <!-- Preloader Ends -->

    @include('layouts.components.navbar')

    @yield('page_content')


    @include('layouts.components.scripts')

</body>


</html>

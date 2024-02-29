<!doctype html>
<html>
    {{-- Header Component --}}
    @include('backend.components.header.head')
    {{-- End Header Component --}}
    <body>
    @yield('modals')

	<div class="container-fluid" id="content">
        @include('backend.components.Navs.top_nav')
        @include('backend.components.Navs.left_nav')
        {{-- Page Content --}}
        <div id="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">

                        @yield('page_content')
                    </div>
                </div>
            </div>
        </div>
        {{-- End Page Content --}}
    </div>
    {{-- Scripts Component --}}
    @include('backend.components.header.scripts')
    {{-- End Scripts Component --}}
</body>

</html>

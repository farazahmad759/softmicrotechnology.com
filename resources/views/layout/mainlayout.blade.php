<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('layout.partials.head')

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        @include('layout.partials.header')
        @include('layout.partials.slider')
        @yield('content')
        @include('layout.partials.footer')
    </div><!-- #wrapper end -->

    <div id="gotoTop" class="icon-angle-up"></div>
    @include('layout.partials.footer-scripts')
</body>

</html>
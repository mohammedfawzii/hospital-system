<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Medi-tech - HTML Template | Home Page 03</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/web/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/web/css/responsive.css') }}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ asset('assets/web/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('assets/web/css/color-themes/default-theme.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/web/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/web/images/favicon.png') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
        <header class="main-header header-style-three">
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <div class="logo-outer">
                        <x-logo />
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <x-nav-bar-web />
                    </div>
                </div>
            </div>
        </header>
        <!-- End Main Header -->

        <!-- Main Slider Three -->
        @include('sections.web.slider')
        <!-- End Main Slider -->

        <!-- Health Section -->
        @include('sections.web.health-section')
        <!-- End Health Section -->

        <!-- Featured Section -->
        @include('sections.web.Featured-Section')
        <!-- End Featured Section -->

        <!-- Department Section Three -->
        @include('sections.web.Department')
        <!-- End Department Section -->

        <!-- Team Section -->
        @include('sections.web.team')

        <!-- End Team Section -->

        <!-- Video Section -->

        @include('sections.web.Video')
        <!-- End Video Section -->


        <!-- Appointment Section Two -->
        @include('sections.web.Appointment')

        <!-- Testimonial Section Two -->
        @include('sections.web.Testimonial')

        <!-- End Testimonial Section Two -->

        <!-- Counter Section -->
        @include('sections.web.Counter')

        <!-- End Counter Section -->

        <!-- Doctor Info Section -->
        @include('sections.web.Doctor')

        <!-- End Doctor Info Section -->

        <!-- News Section Two -->
        @include('sections.web.News')


        <!--Clients Section-->
        @include('sections.web.Clients')
        <!--End Clients Section-->

        <!--Main Footer-->
        <x-footer-web />

    </div>
    <!--End pagewrapper-->





    <!--Scroll to top-->
    <script src="{{ asset('assets/web/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery-ui.js') }}"></script>
    <script src = "{{ asset('assets/web/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/web/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/web/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl.js') }}"></script>
    <script src="{{ asset('assets/web/js/wow.js') }}"></script>
    <script src="{{ asset('assets/web/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script>
    <script src="{{ asset('assets/web/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/appear.js') }}"></script>
    <script src="{{ asset('assets/web/js/script.js') }}"></script>
    <script src="{{ asset('assets/web/js/color-settings.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>@yield('title', 'DS Innovative Solutions')</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/tekmino-icon.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/venobox.min.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/main-light.css" />
</head>

<body class="tj-light-mode">
    <div class=" body-overlay">
    </div>
    @include('frontend.components.preloader')
    @include('frontend.components.back-to-top')
    @include('frontend.components.offcanvas')
    @include('frontend.components.mobile-menu')
    @include('frontend.components.navbar')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">
                @yield('content')
            </main>
            @include('frontend.components.footer')
        </div>
    </div>

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/gsap-scroll-smoother.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
    <script src="assets/js/gsap-scroll-trigger.min.js"></script>
    <script src="assets/js/gsap-split-text.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/matter.min.js"></script>
    <script src="assets/js/throwable.js"></script>
    <script src="assets/js/validate.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

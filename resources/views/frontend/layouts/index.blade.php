<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Silvester Rangga">
    <meta name="keywords" content="Bali Bliss Uma, Kosan Bali, Bali">
    <meta name="description" content="Bali Bliss Uma menawarkan kosan terjangkau di Bali.">

    <!-- Title -->
    <title>BALI BLISS UMA</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/brand.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/brand.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/brand.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/brand.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/brand.png') }}">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/animate.css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/animsition/dist/css/animsition.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/photoswipe/dist/photoswipe.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/photoswipe/dist/default-skin/default-skin.css') }}" />

    <!-- CSS Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}" />

    <!-- CSS Theme -->
    <link id="theme" rel="stylesheet" href="{{ asset('frontend/css/themes/theme-blue.css') }}" />
</head>
<body class="header-horizontal dark-overlay">

    <!-- Body Wrapper -->
    <div id="body-wrapper" class="animsition" data-animsition-overlay="true">

        <!-- Header -->
        <header id="header" class="header-horizontal dark">

            <!-- Module - Navigation -->
            <nav id="navigation-main" class="module module-nav">
                <ul class="nav nav-main-horizontal">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#facilities">FACILITIES</a></li>
                    <li><a href="#rooms">ROOMS</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="#top-spot">TOP SPOT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
                <div class="selector"></div>
            </nav>

            <!-- Module - Objects -->
            <div class="module module-object">
                <img class="object-image" src="{{ asset('images/brand.png') }}" alt="" width="36">
                <span class="object-name text-md">BALI BLISS UMA</span>
            </div>

            <!-- Module - Navigation Toggle -->
            <div class="module module-nav-toggle">
                <a href="#" id="nav-toggle" class="nav-toggle"><span></span><span></span><span></span><span></span></a>
            </div>

        </header>
        <!-- Header / End -->

        <!-- Content -->
        <div id="content">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer-fixed bg-dark dark">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                        <a href="index.html"><img src="{{ asset('images/brand.png') }}" width="120" alt=""></a>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="nav nav-footer mr-4">
                            <li class="text-lg">{{ date('Y') }} &copy; Bali Bliss Uma</li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Footer / End -->

        <!-- Body Overlay -->
        <div id="body-overlay"></div>
    </div>

    <!-- Video Modal / Demo -->
    <div class="modal modal-video fade" id="modalVideo" role="dialog">
        <button class="close dark" data-dismiss="modal"></button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <iframe height="500"></iframe>
            </div>
        </div>
    </div>

    <!-- JS Plugins -->
    <script src="{{ asset('frontend/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/animsition/dist/js/animsition.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.scrollto/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery.localscroll/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/twitter-fetcher/js/twitterFetcher_min.js') }}"></script>

    <!-- JS Core -->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>

    <!-- JS Gallery -->
    @yield('gallery-script')

    <!-- JS Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>
</html>

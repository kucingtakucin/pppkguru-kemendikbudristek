<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PPPK Guru Kemdikbudristek</title>
    <meta name="author" content="Dirjen GTK Kemdikbudristek">
    <meta name="description" content="PPPK Kemdikbudristek">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/custom/kemdikbud-sm.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/custom/kemdikbud-sm.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/custom/kemdikbud-sm.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/custom/kemdikbud-sm.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/simplebar.min.css') }}">

    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/navigation.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom-2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-always-fixed-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-auto col-sm-6 col-lg-2 mr-auto pl-lg-0">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('frontend/images/custom/pppk-light.png') }}"
                            data-at2x="{{ asset('frontend/images/custom/pppk-light.png') }}" class="default-logo"
                            alt="">
                        <img src="{{ asset('frontend/images/custom/pppk-dark.png') }}"
                            data-at2x="{{ asset('frontend/images/custom/pppk-dark.png') }}" class="alt-logo" alt="">
                        <img src="{{ asset('frontend/images/custom/pppk-dark.png') }}"
                            data-at2x="{{ asset('frontend/images/custom/pppk-dark.png') }}" class="mobile-logo"
                            alt="">
                    </a>
                </div>
                <div class="col-auto col-lg-8 menu-order px-lg-0">
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item">
                                <a href="#tentang" class="nav-link section-link">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="#syarat" class="nav-link section-link">Alur Seleksi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#unduhan" class="nav-link section-link">Unduh Dokumen</a>
                            </li>
                            <li class="nav-item">
                                <a href="#faq" class="nav-link section-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#kontak" class="nav-link section-link">Kontak</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-right pr-0 font-size-0">
                    <!-- class="ml-auto" <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    @php
                        $show = 0;
                    @endphp

                    @if ($show === 1)
                        <div class="header-push-button d-none d-lg-inline-block hidden-xs">
                            <a href="javascript:void(0);" class="push-button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        {{-- <section class="bg-extra-dark-gray padding-25px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-6">
                        <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-left"></h1>
                    </div>
                    <div
                        class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                        <ul class="xs-text-center">
                            <li><a href="" class="text-white-hover">Beranda</a></li>
                            <li>Kontak</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

        @if ($show === 1)
            <div class="push-menu padding-50px-lr bg-white">
                <a href="javascript:void(0);" class="close-menu text-extra-dark-gray text-green-hover"><i
                        class="fas fa-times"></i></a>
                <div class="push-menu-wrapper text-center" data-scroll-options='{ "theme": "dark" }'>
                    <h3
                        class="text-extra-dark-gray alt-font font-weight-700 letter-spacing-minus-3px text-uppercase no-margin-bottom">
                        Login</h3>
                    <!-- <span class="alt-font text-green text-large text-uppercase d-block">Admin.</span> -->
                    <div class="margin-5-rem-bottom text-center lg-margin-3-rem-bottom">
                        <span
                            class="alt-font text-large margin-3-rem-bottom w-70 mx-auto text-extra-dark-gray d-inline-block line-height-26px lg-margin-2-rem-bottom">Silakan
                            login dengan akun anda</span>
                        <form action="email-templates/subscribe-newsletter.php" method="post">
                            <div class="position-relative">
                                <input class="border-radius-5px medium-input mb-3 required" name="email"
                                    placeholder="Masukkan Email" type="email">
                                <input class="border-radius-5px medium-input mb-3 required" name="password"
                                    placeholder="Masukkan Password" type="password">
                                <input type="hidden" name="redirect" value="">
                                <button class="float-right btn btn-primary rounded line-height-18px submit"
                                    type="submit"><i class="far fa-envelope left-icon"></i>Masuk</button>
                                <div class="form-results rounded d-none position-absolute"></div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center elements-social social-icon-style-05 margin-10px-bottom">
                        <ul class="small-icon">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                        class="fab fa-dribbble"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                        class="fab fa-twitter"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                        class="fab fa-instagram"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                                        class="fab fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </header>
    <!-- end header -->

    {{-- main content --}}
    <main>
        @yield('content')
    </main>
    <!-- start footer -->
    <footer class="bg-extra-dark-gray">
        <div class="footer-top pt-5">
            <div class="container">
                <div class="row">
                    <!-- start footer column -->
                    <div class="col-12 col-md-3">
                        <a href="index.html" class="footer-logo mb-md-4 mb-3 d-block"><img
                                src="{{ asset('frontend/images/custom/pppk-light.png') }}"
                                data-at2x="{{ asset('frontend/images/custom/pppk-light.png') }}" alt=""
                                class="max-h-inherit"></a>
                        <span
                            class="alt-font font-weight-300 text-medium letter-spacing-minus-1-half d-inline-block w-85 lh-13">

                        </span>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-12 offset-md-1 col-md-5">
                        <span
                            class="alt-font font-weight-500 d-block text-white text-uppercase letter-spacing-2px margin-20px-bottom xs-margin-10px-bottom">
                            Hubungi Kami
                        </span>
                        <ul>
                            <li><a href="#" class="text-white-hover">Kompleks Kementerian Pendidikan dan Kebudayaan,
                                    Gedung D Lantai 16, Jl. Jenderal Sudirman, Senayan, Jakarta 10270</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-12 offset-md-1 col-md-2">
                        <span
                            class="alt-font font-weight-500 d-block text-white text-uppercase letter-spacing-2px margin-20px-bottom xs-margin-10px-bottom">
                            Call Center
                        </span>
                        <ul>
                            <li style="font-size:20px"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;<a
                                    href="tel:1 500 997" class="text-white-hover"><b>1 500 997</b></a></li>
                        </ul>
                        <!-- </div> -->
                    </div>
                    <!-- end footer column -->
                </div>
            </div>
        </div>
        <div class="footer-bottom pt-4 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 text-center text-md-right last-paragraph-no-margin">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Hak Cipta Kemdikbudristek</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('frontend/js/theme-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- revolution js files -->
    <script type="text/javascript" src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js') }}">
    </script>

    <script type="text/javascript"
        src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/simplebar.min.js') }}"></script>

    <script src="https://www.jquery-az.com/jquery/js/imagepreview/imagepreview.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $('.preview').anarchytip();
      $('.previewright').anarchytip();
    </script>

    <script type="text/javascript">
        var revapi263,
            tpj;
        (function() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on")
                    tpj.noConflict();
            }
            if (!/loaded|interactive|complete/.test(document.readyState))
                document.addEventListener("DOMContentLoaded", onLoad);
            else
                onLoad();

            function onLoad() {
                if (tpj("#rev_slider_26_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_26_1");
                } else {
                    var revOffset = tpj(window).width() <= 991 ? '73px' : '';
                    revapi263 = tpj("#rev_slider_26_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 4500,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                enable: true,
                                style: 'ares',
                                tmp: '',
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 767,
                                hide_over: 9999,
                                hide_delay: 0,
                                hide_delay_mobile: 0,

                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 60,
                                    v_offset: 0
                                },

                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 60,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                style: 'zeus',
                                direction: 'horizontal',
                                rtl: false,

                                container: 'slider',
                                h_align: 'center',
                                v_align: 'bottom',
                                h_offset: 0,
                                v_offset: 30,
                                space: 7,

                                hide_onleave: false,
                                hide_onmobile: false,
                                hide_under: 0,
                                hide_over: 767,
                                hide_delay: 200,
                                hide_delay_mobile: 1200
                            },
                        },
                        responsiveLevels: [1240, 1025, 778, 480],
                        visibilityLevels: [1920, 1500, 1025, 768],
                        gridwidth: [1200, 991, 778, 480],
                        gridheight: [1025, 1366, 1025, 868],
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner4",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "on",
                        fullScreenAutoWidth: "on",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: revOffset,
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLimit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */
            }; /* END OF ON LOAD FUNCTION */
        }()); /* END OF WRAPPING FUNCTION */
    </script>

    {!! NoCaptcha::renderJs() !!}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-93NGDNYKNY');
    </script>
    @stack('scripts')
</body>

</html>

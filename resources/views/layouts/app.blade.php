<!DOCTYPE html>
<html>


<!-- Mirrored from MakerZN.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 05:47:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="tjCHecAr4lofShpXqC1sASXZheYnWYC2bBjrtmCe">
    <meta name="title" content="MakerZN | Easy Cryptocurrency Cloud Mining with ASIC Miner">
    <meta name="description"
        content="Join MakerZN for secure crypto cloud mining with the latest ASIC miners and GPU rigs. Enjoy automated payouts, eco-friendly operations, and expert support.">
    <title>MakerZN | Easy Cryptocurrency Cloud Mining with ASIC Miner</title>
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('asset/js/cookie.min.js') }}"></script>
    <link href="{{ asset('asset/css/iziToast.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('asset/img/logos/66a7e0c49abd51722278084.png') }}" type="image/x-icon">

    <!-- Default Statcounter code for MakerZN {{ env('APP_URL') }} -->
    <script type="text/javascript">
        var sc_project = 13022378;
        var sc_invisible = 1;
        var sc_security = "8f4f8dc8";
    </script>

    <!-- End of Statcounter Code -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <style>
        .swal2-styled {
            color: black !important;
            background-color: #761FE2 !important;
            min-width: 100px !important;

        }

        .input-group {
            border: 1px solid gray;
            /* Add border to input group */
            border-radius: .25rem;
            /* Optional: Add border radius for input group */
            width: 100%;
            display: flex
                /* Ensure input group stretches to full width */
        }

        .input-group .form-control {
            border: none;
            /* Remove border from input field */
            border-radius: 0;
            /* Optional: Remove border radius from input field */
            box-shadow: none;
            flex: 1;
            /* Optional: Remove any box shadow */
        }

        #passwordField {
            border: none;
            outline: none;
        }
    </style>

</head>

<style>
    body {
        top: 0 !important;
    }

    .skiptranslate {
        display: none;
        height: 0;
    }

    .VIpgJd-yAWNEb-VIpgJd-fmcmS-sn54Q {
        background-color: inherit !important;
        box-shadow: inherit !important;
    }

    #goog-gt-vt,
    #goog-gt-tt {
        display: none !important;
    }

    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
        display: none !important;
    }

    .__jivoMobileButton {
        margin-bottom: 100px !important;
    }
</style>


<body>
    <div class="page-wrapper">
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader" style="background: #761FE3!important;">
                    <div class="animation-preloader">
                        <div class="txt-loading">
                            <span data-text-preloader="L" class="letters-loading">L</span>
                            <span data-text-preloader="O" class="letters-loading">O</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="D" class="letters-loading">D</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="G" class="letters-loading">G</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cursor"></div>
        <div class="cursor-follower"></div>

        <header class="main-header header-style-one ">
            <div class="header-lower">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">

                            <div class="logo-box">
                                <div class="logo"><a href="{{ route('home') }}"><img
                                            src="{{ asset('asset/img/logos/66a7e0c48e8441722278084.png') }}"
                                            alt="" title=""></a></div>
                            </div>

                            <div class="nav-outer d-flex flex-wrap">
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix  notranslate "
                                        id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li id="Home">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li><a href="{{ route('plans') }}" id="Plans">Plans</a></li>
                                            <li><a href="{{ route('affiliates') }}" id="Affiliates">Affiliates</a>
                                            </li>
                                            <li><a href="{{ route('about') }}" id="About">About Us</a></li>
                                            <li><a href="{{ route('blogs') }}" id="Blogs">Blogs</a></li>
                                            <li><a href="{{ route('faq') }}" id="FAQs">FAQ</a></li>
                                            <li><a href="{{ route('app') }}" id="APP">APP</a></li>
                                            <li><a href="{{ route('contact') }}" id="Contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <div class="outer-box d-flex align-items-center flex-wrap">
                                <div class="language-dropdown notranslate">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="flag"><img
                                                src="{{ asset('asset/img/flags/64ea534b5cf3b1693078347.png') }}"
                                                width="32px" height="24px" /></span> <span
                                            class="fa-solid fa-angle-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#" data-google-lang="en"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea534b5cf3b1693078347.png') }}"
                                                        class="ic" /></span> English</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="de"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea51ed538fc1693077997.png') }}"
                                                        class="ic" /></span> Deutsch</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="fr"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea51fd816461693078013.png') }}"
                                                        class="ic" /></span> Français</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="ja"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea520b408e31693078027.png') }}"
                                                        class="ic" /></span> 日本</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="ko"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea5212319621693078034.png') }}"
                                                        class="ic" /></span> 한국인</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="pt"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea521a19c081693078042.png') }}"
                                                        class="ic" /></span> Português</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="ru"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea5220ea6221693078048.png') }}"
                                                        class="ic" /></span> Русский</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="es"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea522710cf81693078055.png') }}"
                                                        class="ic" /></span> Español</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="tr"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/65a86bbeb5f221705536446.png') }}"
                                                        class="ic" /></span> Türkçe</a></li>
                                        <li><a class="dropdown-item" href="#" data-google-lang="vi"><span
                                                    class="flag"><img
                                                        src="{{ asset('asset/img/flags/64ea52323b4901693078066.png') }}"
                                                        class="ic" /></span> Tiếng Việt</a></li>
                                    </ul>
                                </div>

                                <div class="main-header_buttons">

                                    @if (auth()->user())
                                        <a href="{{ route('dashboard') }}" class="template-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Dashboard</span>
                                                <span class="text-two">Dashboard</span>
                                            </span>
                                        </a>
                                    @else
                                        <a href="{{ route('signin') }}" class="template-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Login</span>
                                                <span class="text-two">Login</span>
                                            </span>
                                        </a>
                                        <a href="{{ route('signup') }}" class="template-btn btn-style-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">Join now</span>
                                                <span class="text-two">Join now</span>
                                            </span>
                                        </a>
                                    @endif

                                </div>

                                <div class="mobile-nav-toggler">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-menu-2" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6l16 0" />
                                        <path d="M4 12l16 0" />
                                        <path d="M4 18l16 0" />
                                    </svg>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa-solid fa-xmark fa-fw"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="#"><img
                                src="{{ asset('asset/img/logos/66a7e0c491f2f1722278084.png') }}" alt=""
                                title=""></a>
                    </div>
                    <div class="menu-outer"></div>
                </nav>
            </div>
        </header>

        <script>
            const menu = 'Home'
            if (document.getElementById(menu)) {
                document.getElementById(menu).classList.add('current')
            }
        </script>
        @yield('content')


        <footer class="main-footer">
            <div class="footer_pattern" style="background-image: url(asset/img/background/footer-pattern.png')}})">
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="widgets-section">
                        <div class="row clearfix">

                            <div class="big-column col-lg-4 col-md-12 col-sm-12">
                                <div class="logo-box">
                                    <div class="logo"><a href="{{ route('home') }}"><img
                                                src="{{ asset('asset/img/logos/66a7e0c48e8441722278084.png') }}"
                                                alt="" title=""></a></div>
                                </div>
                                <p class="f-text">MakerZN is a versatile company with a clear mission: to equip you
                                    with the essential tools and services for success in the digital asset realm.
                                    Whether you need high-performance equipment for maximum hash power or expert
                                    guidance in cloud mining investments, we're committed to ensuring your crypto
                                    journey is efficient and profitable.</p>
                                <div class="txd d-flex align-items-center">
                                    <span class="icon fa-solid fa-envelope fa-fw"></span>
                                    <p class="txt"><a href="#" class="__cf_email__"
                                            data-cfemail="9be8eeebebf4e9efdbf6fae8f3fae8f3b5f8f4f6">[email&#160;protected]</a>
                                    </p>
                                </div>
                                <div class="txd d-flex align-items-center">
                                    <span class="icon fa-solid fa-map-marker fa-fw"></span>
                                    <p class="txt">483 Green Lanes, London, England, N13 4BS</p>
                                </div>
                                <div class="footer-social_box mt-4">
                                    <a href="https://www.facebook.com/profile.php?id=61563547275911"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://x.com/Mas_Hash_"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/@MakerZNMiner"><i
                                            class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>

                            <div class="big-column col-lg-8 col-md-12 col-sm-12">
                                <div class="footer-lists_outer">
                                    <div class="row clearfix">
                                        <div class="column col-lg-5 col-md-4 col-sm-6">
                                            <h5 class="footer-title">Services</h5>
                                            <ul class="footer-pages_list">
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('plans') }}">Plans</a></li>
                                                <li><a href="{{ route('affiliates') }}">Affiliates</a></li>
                                                <li><a href="{{ route('blogs') }}">Blog</a></li>
                                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-lg-3 col-md-4 col-sm-6">
                                            <h5 class="footer-title">resources</h5>
                                            <ul class="footer-pages_list">
                                                <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                        <div class="column col-lg-4 col-md-4 col-sm-6">
                                            <h5 class="footer-title">App</h5>
                                            <ul class="footer-pages_list">
                                                <li>
                                                    <a href="{{ route('app') }}">
                                                        <img src="{{ asset('asset/img/android.png') }}"
                                                            style="width:110px;height:auto;" alt="image">
                                                    </a>
                                                    <a href="{{ route('app') }}">
                                                        <img src="{{ asset('asset/img/ios.png') }}"
                                                            style="width:110px;height:auto;" alt="image">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-center align-items-center flex-wrap">
                        <div class="footer-copyright">Copyright 2019-2024 MakerZN. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
</body>

<script src="{{ asset('asset/js/iziToast.js') }}"></script>
<script>
    function show(type, options) {
        if (type === 'info') {
            iziToast.info(options);
        } else if (type === 'success') {
            iziToast.success(options);
        } else if (type === 'warning') {
            iziToast.warning(options);
        } else if (type === 'error') {
            iziToast.error(options);
        } else {
            iziToast.show(options);
        }

    }
</script>


<script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

<script src="{{ asset('asset/js/google-translate.js') }}"></script>

<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/appear.js') }}"></script>
<script src="{{ asset('asset/js/parallax.min.js') }}"></script>
<script src="{{ asset('asset/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('asset/js/wow.js') }}"></script>
<script src="{{ asset('asset/js/swiper.min.js') }}"></script>
<script src="{{ asset('asset/js/backtotop.js') }}"></script>
<script src="{{ asset('asset/js/odometer.js') }}"></script>
<script src="{{ asset('asset/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('asset/js/gsap.min.js') }}"></script>
<script src="{{ asset('asset/js/SplitText.min.js') }}"></script>
<script src="{{ asset('asset/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('asset/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('asset/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('asset/js/touchspin.js') }}"></script>
<script src="{{ asset('asset/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('asset/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('asset/js/nav-tool.js') }}"></script>
<script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
<script src="{{ asset('asset/js/element-in-view.js') }}"></script>
<script src="{{ asset('asset/js/scriptc619.js') }}?v=1.0"></script>

<script src="{{ asset('asset/js/all.js') }}"></script>

@if (Session::has('success'))
    <script>
        Swal.fire('Success', '{{ Session('success') }}', 'success');
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal.fire('Error', '{{ Session('error') }}', 'error');
    </script>
@endif
@stack('js')

<!-- Mirrored from MakerZN.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2024 05:48:24 GMT -->

</html>

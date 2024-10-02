<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV">
    <meta name="dashboard" content="true">
    <title>MasHash-Cryptocurrency Cloud Mining Platform | Dashboard</title>
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('asset/js/cookie.min.js') }}"></script>
    <link href="{{ asset('asset/css/iziToast.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('asset/img/logos/66a7e0c49abd51722278084.png') }}" type="image/x-icon">


    <!-- End of Statcounter Code -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <style>
        .swal2-styled {
            color: black !important;
            background-color: #DBB75F !important;
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

    .icon-dep {
        width: 26px;
        height: 26px;
        border-radius: 10px;
        margin-right: 7px;
    }

    .nice-select .current {
        display: flex;
        align-items: center;
        height: 100%;
    }

    .nice-select .list li {
        display: flex;
        align-items: center;
    }

    .dw .list {
        width: 100%;
    }

    .nice-select {
        height: 58px;
    }

    .__jivoMobileButton {
        margin-bottom: 100px !important;
    }
</style>


<body>
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


    <header class="main-header header-style-one  newcals fixed-header ">
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <div class="logo-box">
                            <div class="logo"><a href="home"><img
                                        src="{{ asset('asset/img/logos/66a7e0c48e8441722278084.png') }}" alt=""
                                        title=""></a></div>
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

                                <div class="navbar-collapse collapse clearfix " id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li id="Home">
                                            <a href="home">Home</a>
                                        </li>
                                        <li><a href="plans" id="Plans">Plans</a></li>
                                        <li><a href="affiliates" id="Affiliates">Affiliates</a></li>
                                        <li><a href="about" id="About">About Us</a></li>
                                        <li><a href="blogs" id="Blogs">Blogs</a></li>
                                        <li><a href="faq" id="FAQs">FAQ</a></li>
                                        <li><a href="app" id="APP">APP</a></li>
                                        <li><a href="contact" id="Contact">Contact</a></li>
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
                                                class="flag"><img src="{{ asset('asset/img/flags/germany.png') }}"
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
                                <a href="dashboard" class="template-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Dashboard</span>
                                        <span class="text-two">Dashboard</span>
                                    </span>
                                </a>
                            </div>

                            <div class="mobile-nav-toggler">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
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
                <div class="nav-logo"><a href="{{ route('dashboard') }}"><img
                            src="{{ asset('asset/img/logos/66a7e0c491f2f1722278084.png') }}" alt=""
                            title=""></a>
                </div>
                <div class="menu-outer"></div>
            </nav>
        </div>
    </header>

    <script>
        const menu = 'dashboard'
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add('current')
        }
    </script>
    <aside class="aside">
        <div class="contents-a">
            <ul>
                <a href="{{ route('dashboard') }}">
                    <li id="dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <rect height="7" width="7" x="3" y="3" />
                            <rect height="7" width="7" x="14" y="3" />
                            <rect height="7" width="7" x="14" y="14" />
                            <rect height="7" width="7" x="3" y="14" />
                        </svg>
                        Dashboard
                    </li>
                </a>
                <a href="{{ route('deposit') }}">
                    <li id="deposit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <rect height="16" rx="2" ry="2" width="22" x="1" y="4" />
                            <line x1="1" x2="23" y1="10" y2="10" />
                        </svg>

                        Deposit
                    </li>
                </a>
                <a href="{{ route('withdraw') }}">
                    <li id="withdraw">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="12" x2="12" y1="19" y2="5" />
                            <polyline points="5 12 12 5 19 12" />
                        </svg>

                        Withdraw
                    </li>
                </a>
                <a href="{{ route('orders') }}">
                    <li id="orders">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <line x1="16.5" x2="7.5" y1="9.4" y2="4.21" />
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                            <line x1="12" x2="12" y1="22.08" y2="12" />
                        </svg>

                        My Orders
                    </li>
                </a>
                <a href="{{ route('bills') }}">
                    <li id="bills">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" x2="8" y1="13" y2="13" />
                            <line x1="16" x2="8" y1="17" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>

                        My Bills
                    </li>
                </a>
                <a href="{{ route('referrals') }}">
                    <li id="referrals">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>

                        Referrals
                    </li>
                </a>
                <a href="{{ route('settings') }}">
                    <li id="settings">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                        </svg>

                        Settings
                    </li>
                </a>
                <a href="{{ route('settings') }}">
                    <li id="settings_sec">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>

                        Two Factor Security
                    </li>
                </a>
                <a href="{{ route('profile') }}">
                    <li id="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>

                        Profile Details
                    </li>
                </a>
            </ul>
            <div class="d-flex justify-content-center w-100">
                <a href="{{ route('logout') }}"
                    class="template-btn btn-style-one w-100 nd d-flex justify-content-center"
                    style="padding: 13px 34px;">
                    <span class="btn-wrap">
                        <span class="text-one">Log Out</span>
                        <span class="text-two">Log Out</span>
                    </span>
                </a>
            </div>
        </div>
    </aside>

    <script>
        const menu3 = 'dashboard'
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add('act')
        }
    </script>

    @yield('content')
</body>

<script src="{{ asset('asset/js/iziToast.js') }}"></script>
<script>
    var type = 'success';



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

<script src="{{ asset('asset/js/google-translate.js') }}"></script>

<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('asset/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('asset/js/script.js') }}?v=1.0"></script>
<script src="{{ asset('asset/js/all.js') }}"></script>


<script src="https://translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<script>
    $(document).ready(function() {
        $('#copyButton').click(function(e) {
            e.preventDefault();
            var copyText = $('.copyd');
            copyText.select();

            document.execCommand('copy')
            iziToast.success({
                message: 'Copied',
                position: "center"
            });
        });
    });
</script>
<script>
    $(".select-bar").niceSelect()

    $(document).ready(function() {
        $('[data-bs-toggle="modal"]').on('click', function() {
            var target = $(this).attr('data-bs-target');
            var newUrl = new URL(window.location);
            newUrl.searchParams.set('modal', target);
            history.pushState(null, '', newUrl);
        });

        var params = new URLSearchParams(window.location.search);
        var modal = params.get('modal');

        if (modal && $(modal).length) {
            $(modal).modal('show');
        }

        function removeModalParam() {
            var newUrl = new URL(window.location);
            newUrl.searchParams.delete('modal');
            history.pushState(null, '', newUrl);
        }

        $('.modal').on('hide.bs.modal', function() {
            removeModalParam();
        });

        $('.btn-close').on('click', function() {
            removeModalParam();
        });
    });
</script>
@stack('js')
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

</html>

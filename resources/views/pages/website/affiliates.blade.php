@extends('layouts.app')
@section('content')
    <script>
        const menu = "Affiliates";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-1.png') }});
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-2.png') }});
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url({{ asset('asset/img/background/page-title-1.png') }});
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url({{ asset('asset/img/background/page-title-2.png') }});
        "></div>
        <div class="auto-container">
            <h2>
                MakerZN Affiliate | Cryptocurrency Cloud Mining Platform
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    MakerZN Affiliate | Cryptocurrency Cloud Mining
                    Platform
                </li>
            </ul>
        </div>
    </section>

    <section class="data-one">
        <div class="auto-container">
            <div class="sec-title style-three centered">
                <div class="sec-title_icon">
                    <i class="fa-solid fa-users fa-fw"></i>
                </div>
                <h2 class="sec-title_heading">
                    Exploring new <span>Referral System</span>
                </h2>
            </div>

            <div class="data-blocks_outer">
                <div class="data-block_one">
                    <div class="data-block_one-inner">
                        <div class="row clearfix">
                            <div class="data-block_one-image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="data-block_one-image">
                                    <img src="{{ asset('asset/img/sections/referral/66a42344470b71722032964.png') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="data-block_one-content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="data-block_one-content">
                                    <h3 class="data-block_one-title">
                                        Join Our Affiliate Program and
                                        Maximize Your Earnings!
                                    </h3>
                                    <div class="data-block_one-text">
                                        Our affiliate program offers
                                        various benefits. Join our
                                        Partner Program to earn up to 6%
                                        commission for life through our
                                        cloud mining platform! Help your
                                        friends earn money effortlessly
                                        while benefiting from our robust
                                        system. Share your unique
                                        referral link with friends eager
                                        to make money, and they’ll
                                        appreciate it! Here's how it
                                        works: Sign up for an account to
                                        get your referral link. Share it
                                        on social media or your website;
                                        your link is always valid. When
                                        someone signs up using your
                                        link, you’ll earn 6% of their
                                        purchases for life, allowing you
                                        to earn free Bitcoin! You can
                                        earn without any deposit!
                                        There’s no upfront investment,
                                        and you can withdraw easily.
                                        This is a fantastic opportunity
                                        to earn cryptocurrency for free!
                                    </div>
                                    <ul class="data-block_one-list">
                                        <li>
                                            <i class="fa-solid fa-check fa-fw"></i>NO DEPOSIT NEEDED
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check fa-fw"></i>HIGH COMMISSIONS
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check fa-fw"></i>INSTANT PAYMENTS
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check fa-fw"></i>UNLIMITED EARNING POTENTIAL
                                        </li>
                                    </ul>
                                    <div class="data-block_one-button">
                                        <a href="#next" class="template-btn btn-style-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">Learn more</span>
                                                <span class="text-two">Learn more</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-one mt-4" id="next">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title style-two centered">
                    <div class="sec-title_title">REFERRAL SYSTEM</div>
                    <h2 class="sec-title_heading">
                        How does it <span>work?</span>
                    </h2>
                </div>
                <div class="row clearfix">
                    <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                        <div class="h-100 counter-block_two-inner wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="
                            visibility: visible;
                            animation-duration: 1500ms;
                            animation-delay: 0ms;
                            animation-name: fadeInLeft;
                        ">
                            <div class="color-layer"></div>
                            <div class="counter-block_two-count">
                                <span class="odometer odometer-auto-theme" data-count="01">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                            <h5 class="counter-block_two-title">
                                Sign up and get a referral link.
                            </h5>
                            <div class="counter-block_two-text">
                                Sign up and get a referral link.
                            </div>
                        </div>
                    </div>
                    <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                        <div class="h-100 counter-block_two-inner wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="
                            visibility: visible;
                            animation-duration: 1500ms;
                            animation-delay: 0ms;
                            animation-name: fadeInLeft;
                        ">
                            <div class="color-layer"></div>
                            <div class="counter-block_two-count">
                                <span class="odometer odometer-auto-theme" data-count="02">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                            <h5 class="counter-block_two-title">
                                Invite your friends use referral link.
                            </h5>
                            <div class="counter-block_two-text">
                                Invite your friends use referral link.
                            </div>
                        </div>
                    </div>
                    <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                        <div class="h-100 counter-block_two-inner wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="
                            visibility: visible;
                            animation-duration: 1500ms;
                            animation-delay: 0ms;
                            animation-name: fadeInLeft;
                        ">
                            <div class="color-layer"></div>
                            <div class="counter-block_two-count">
                                <span class="odometer odometer-auto-theme" data-count="03">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                            <h5 class="counter-block_two-title">
                                Referrals buy packages.
                            </h5>
                            <div class="counter-block_two-text">
                                Referrals buy packages.
                            </div>
                        </div>
                    </div>
                    <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                        <div class="h-100 counter-block_two-inner wow fadeInLeft animated" data-wow-delay="0ms"
                            data-wow-duration="1500ms"
                            style="
                            visibility: visible;
                            animation-duration: 1500ms;
                            animation-delay: 0ms;
                            animation-name: fadeInLeft;
                        ">
                            <div class="color-layer"></div>
                            <div class="counter-block_two-count">
                                <span class="odometer odometer-auto-theme" data-count="04">
                                    <div class="odometer-inside">
                                        <span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                            <h5 class="counter-block_two-title">
                                Get Your Reward.
                            </h5>
                            <div class="counter-block_two-text">
                                Get Your Reward.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-block_one-button d-flex justify-content-center">
                    <a href="signup.html" class="template-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">Join Now</span>
                            <span class="text-two">Join Now</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-1.png') }});
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-2.png') }});
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>MakerZN.</span>
                            </h2>
                            <div class="cta-one_button">
                                <a href="#" class="template-btn btn-style-three">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get Started Free</span>
                                        <span class="text-two">Get Started Free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_image-outer">
                            <div class="image">
                                <img src="{{ asset('asset/img/sections/subfooter/66a42302d54b71722032898.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

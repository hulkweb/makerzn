@extends('layouts.app')
@section('content')
    <script>
        const menu = "APP";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="banner_section" style="margin-top: 220px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500">
                    <div class="banner_text">
                        <h2 class="sec-title_heading mb-4">
                            Best way to manage<br /><span>your mining</span>
                        </h2>
                        <p>
                            Keep your MakerZN activities at your
                            fingertips with our mobile apps. Access
                            real-time data and track your mining
                            portfolio wherever you are, whenever you
                            need. The MakerZN app provides a convenient,
                            easy solution for purchasing and managing
                            mining plans, helping you grow your revenue
                            seamlessly.
                        </p>
                    </div>
                    <div class="d-flex" style="gap: 20px">
                        <a href="#">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&amp;data={{ env('APP_URL') }}app"
                                class="qr_app" />
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 aos-init aos-animate" data-aos="fade-in" data-aos-duration="1500">
                    <div class="banner_slider">
                        <div class="left_icon">
                            <img src="{{ asset('asset/img/message_icon.png') }}" class="moving_position_animatin"
                                alt="image" />
                        </div>
                        <div class="right_icon">
                            <img src="{{ asset('asset/img/shield_icon.png') }}" class="moving_position_animatin"
                                alt="image" />
                        </div>
                        <div id="frmae_slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                            <img src="{{ asset('asset/img/app/1.png') }}" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row_am about_app_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_img aos-init" data-aos="fade-in" data-aos-duration="1500">
                        <div class="frame_img d-flex justify-content-center" style="width: 490px">
                            <img src="{{ asset('asset/img/app/2.png') }}" alt="image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text">
                        <div class="section_title aos-init">
                            <h2 class="sec-title_heading">
                                MakerZN Awesome Mining APP
                            </h2>
                            <p>
                                MakerZN Cloud Mining APP has achieved
                                1.7 million downloads and has 860,000
                                followers. It offers more than 20 mining
                                plan contracts and serves customers in
                                more than 100 countries around the
                                world. Its broad user base and diverse
                                mining options demonstrate its
                                popularity and reliability in the
                                market.
                            </p>
                        </div>

                        <ul class="app_statstic aos-init" id="counter" data-aos="fade-in" data-aos-duration="1500">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('asset/img/download.png') }}" alt="image" />
                                </div>
                                <div class="text">
                                    <p>
                                        <span class="counter-value" data-count="17">1.7</span><span>M+</span>
                                    </p>
                                    <p>Download</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('asset/img/followers.png') }}" alt="image" />
                                </div>
                                <div class="text">
                                    <p>
                                        <span class="counter-value" data-count="08">0.86</span><span>M+</span>
                                    </p>
                                    <p>Followers</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('asset/img/reviews.png') }}" alt="image" />
                                </div>
                                <div class="text">
                                    <p>
                                        <span class="counter-value" data-count="2300">20</span><span>+</span>
                                    </p>
                                    <p>Contracts</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('asset/img/countries.png') }}" alt="image" />
                                </div>
                                <div class="text">
                                    <p>
                                        <span class="counter-value" data-count="150">100</span><span>+</span>
                                    </p>
                                    <p>Countries</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row_am modern_ui_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ui_text">
                        <div class="section_title aos-init">
                            <h2 class="sec-title_heading mb-3">
                                Start Your Cloud Mining From
                                <span style="color: #fff">MakerZN APP</span>
                            </h2>
                            <p>
                                Download the MakerZN APP today to enjoy
                                a seamless mining order management
                                experience. Gain access to real-time
                                data and track your mining portfolio
                                from anywhere, at any time. The MakerZN
                                APP provides an easy and convenient way
                                to purchase and manage mining plans,
                                helping you grow your revenue
                                efficiently.
                            </p>
                        </div>
                        <ul class="design_block">
                            <ul class="answer-one_list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Easy Start With Mining
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>One-click Mining
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Real-time Manage
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ui_images aos-init" data-aos="fade-in" data-aos-duration="1500">
                        <div class="about_img d-flex w-100 justify-content-center aos-init" data-aos="fade-in"
                            data-aos-duration="1500">
                            <div class="frame_img">
                                <img src="{{ asset('asset/img/app/3.png') }}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row_am free_app_section" id="getstarted" style="margin-top: 120px">
        <div class="container">
            <div class="free_app_inner aos-init" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="free_text">
                            <div class="section_title">
                                <h2>
                                    Download MakerZN and start your
                                    first mining
                                </h2>
                            </div>
                            <div class="d-flex" style="gap: 20px">
                                <a href="#">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data={{ env('APP_URL') }}app"
                                        class="qr_app" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="free_img">
                            <img src="{{ asset('asset/img/app/5.png') }}" alt="image" />
                            <img class="mobile_mockup" src="{{ asset('asset/img/app/4.png') }}" alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .apps img {
            height: 55px;
        }

        .apps {
            gap: 10px;
        }

        p {
            color: var(--color-three);
        }

        .cta-footer {
            display: none;
        }
    </style>

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

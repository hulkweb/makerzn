@extends('layouts.app')
@section('content')
    <script>
        const menu = "Contact";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url(asset/img/icons/page-title_icon-1.png);
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url(asset/img/icons/page-title_icon-2.png);
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url(asset/img/background/page-title-1.png);
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url(asset/img/background/page-title-2.png);
        "></div>
        <div class="auto-container">
            <h2>
                Contact MasHash | Cryptocurrency Cloud Mining Platform
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    Contact MasHash | Cryptocurrency Cloud Mining
                    Platform
                </li>
            </ul>
        </div>
    </section>

    <section class="team-detail_form">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="sec-title style-four">
                        <div class="sec-title_title">CONTACT US</div>
                        <h2 class="sec-title_heading">
                            Feel Free To Ask Any Questions Here
                        </h2>
                        <div class="sec-title_text">
                            If you have any questions, please fill in
                            your question or consult 24-hour online
                            customer service.
                        </div>
                    </div>
                    <div class="faq-phone_box">
                        <span class="icon fa-solid fa-envelope fa-fw"></span>
                        Email <br />
                        <a href="tel:+1-678-772-6710"><span class="__cf_email__"
                                data-cfemail="33404643435c4147735e52405b52405b1d505c5e">[email&#160;protected]</span></a>
                    </div>
                    <div class="faq-phone_box mt-2">
                        <span class="icon fa-solid fa-map-marker fa-fw"></span>
                        Address <br />
                        <a href="tel:+1-678-772-6710">483 Green Lanes, London, England, N13
                            4BS</a>
                    </div>
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="default-form">
                        <form method="post" action="https://mashash.com/contact">
                            <input type="hidden" name="_token" value="tjCHecAr4lofShpXqC1sASXZheYnWYC2bBjrtmCe" />
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="name" value="" placeholder="Full Name" required />
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" value="" placeholder="Email" required />
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea type="text" name="message" placeholder="Type Message here" required></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Now</span>
                                            <span class="text-two">Send Now</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url(asset/img/icons/cta-icon-1.png);
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url(asset/img/icons/cta-icon-2.png);
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>MasHash.</span>
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
                                <img src="asset/img/sections/subfooter/66a42302d54b71722032898.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

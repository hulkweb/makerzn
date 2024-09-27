@extends('layouts.app')
@section('content')
    <script>
        const menu = "Plans";
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
                MasHash Cloud Minig Plans | Cryptocurrency Cloud Mining
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    MasHash Cloud Minig Plans | Cryptocurrency Cloud
                    Mining
                </li>
            </ul>
        </div>
    </section>

    <section class="price-four">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b23fa2267251722957730.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Free Trial Project
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>50
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 1 Day
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $50
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $1.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $50 + $1.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193520.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b23fc0d77421722957760.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Starter Experience Project
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>200
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 1 Day
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $200
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $6.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $200 + $6.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193519.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b23fe4802201722957796.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer E9 Pro 3.68Gh/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>600
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 3 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $600
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $10.50
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $600 + $31.50
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193518.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b24006d58bc1722957830.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer S21 200Th/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>1,200
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 5 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $1,200
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $22.80
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $1,200 + $114.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193517.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b24025902531722957861.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer L7 9.16Gh/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>3,600
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 6 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $3,600
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $75.60
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $3,600 + $453.60
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193516.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b240456d8811722957893.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer S21 Hyd 335Th/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>8,000
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 8 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $8,000
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $180.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $8,000 +
                                    $1,440.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193515.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b2405c9a8571722957916.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer L9 16Gh/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>16,800
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 10 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $16,800
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $420.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $16,800 +
                                    $4,200.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193514.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b24077a0add1722957943.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer KS5 20Th/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>32,000
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 12 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $32,000
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $896.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $32,000 +
                                    $10,752.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193513.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                    <div class="price-block_one-inner">
                        <div class="plan-image"
                            style="
                            background-image: url('{{ asset('asset/img/plans/images/66b2408f832571722957967.png') }}');
                        ">
                        </div>
                        <div class="price-block_one-title">
                            Antminer S21 XP Hyd 473Th/s
                        </div>
                        <div class="price-block_one-content">
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                <div class="price-block_one-price">
                                    <sup>$</sup>60,000
                                </div>
                            </div>
                            <ul class="price-block_one-list">
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Terms: 7 Days
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Contract Price: $60,000
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Daily Rebate: $1,980.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Recoverable funds: $60,000 +
                                    $13,860.00
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Settle Interests: Every 24 Hours
                                </li>
                                <li>
                                    <i class="fa-solid fa-check fa-fw"></i>Principal Refund: Yes
                                </li>
                            </ul>
                            <div class="price-block_one-button">
                                <a class="template-btn price-one_button" href="plan/193512.html">
                                    Invest Now
                                </a>
                            </div>
                        </div>
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

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
                {{ setting('site_name') }} Cloud Minig Plans | Cryptocurrency Cloud Mining
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    {{ setting('site_name') }} Cloud Minig Plans | Cryptocurrency Cloud
                    Mining
                </li>
            </ul>
        </div>
    </section>

    <section class="price-four">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($plans as $item)
                    <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                        <div class="price-block_one-inner">
                            <div class="plan-image"
                                style="
                            background-image: url('{{ asset('uploads/plans/' . $item->image) }}') !Important;
                        ">
                            </div>
                            <div class="price-block_one-title">
                                {{ $item->name }}
                            </div>
                            <div class="price-block_one-content">
                                <div class="d-flex justify-content-between align-items-end flex-wrap">
                                    <div class="price-block_one-price">
                                        <sup>$</sup>{{ number_format($item->price, 0, '', '') }}
                                    </div>
                                </div>
                                <ul class="price-block_one-list">
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Contract Terms:
                                        {{ $item->duration }} Day
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Contract Price:
                                        {{ priceHTML($item->price) }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Daily Rebate:
                                        {{ priceHTML($item->daily_rebate) }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Recoverable
                                        funds: {{ priceHTML($item->recoverable_funds) }}+
                                        {{ priceHTML($item->recoverable_funds_two) }}
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Settle
                                        Interests: Every
                                        {{ $item->interest_settlement_time }} Hours
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check fa-fw"></i>Principal
                                        Refund: {{ $item->principal_refund ? 'Yes' : 'No' }}
                                    </li>
                                </ul>
                                <div class="price-block_one-button">
                                    <a class="template-btn price-one_button" href="{{ route('plan', $item->id) }}">
                                        Invest Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


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
                                <span>{{ setting('site_name') }}.</span>
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

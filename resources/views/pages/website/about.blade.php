@extends('layouts.app')
@section('content')
    <script>
        const menu = 'About'
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add('current')
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon" style="background-image:url({{ asset('asset/img/icons/page-title_icon-1.png') }})"></div>
        <div class="page-title-icon-two" style="background-image:url({{ asset('asset/img/icons/page-title_icon-2.png') }})">
        </div>
        <div class="page-title-shadow" style="background-image:url({{ asset('asset/img/background/page-title-1.png') }})">
        </div>
        <div class="page-title-shadow_two" style="background-image:url({{ asset('asset/img/background/page-title-2.png') }})">
        </div>
        <div class="auto-container">
            <h2>About MakerZN | Cryptocurrency Cloud Mining Platform</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>About MakerZN | Cryptocurrency Cloud Mining Platform</li>
            </ul>
        </div>
    </section>

    <section class="about-one">
        <div class="about-one_pattern" style="background-image:url({{ asset('asset/img/background/about-pattern.png') }})">
        </div>
        <div class="about-one_icon" style="background-image:url({{ asset('asset/img/icons/about-1.png') }})"></div>
        <div class="about-one_icon-two" style="background-image:url({{ asset('asset/img/icons/about-2.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_tab-outer">
                        <div class="about-one_tab-shadow"
                            style="background-image:url({{ asset('asset/img/background/tab-shadow.png') }})">
                        </div>
                        <div class="about-one_tab-image">
                            <img src="{{ asset('asset/img/resource/about.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content-outer">
                        <div class="sec-title">
                            <div class="sec-title_title">ABOUT US</div>
                            <h2 class="sec-title_heading">About MakerZN</h2>
                        </div>
                        <p style="white-space: break-spaces">Established in 2019, MakerZN has been at the forefront of
                            cryptocurrency cloud mining from the beginning. Our mission is to make cloud mining
                            straightforward, convenient, and accessible to all users. We have built a world-class cloud
                            computing platform, employing cutting-edge deployment technology to cater to a diverse user
                            base. With MakerZN, you can mine cryptocurrencies from anywhere in the world. Our primary aim is
                            to democratize access to cryptocurrency cloud mining, regardless of an individual&#039;s initial
                            investment, experience, or technical expertise. We provide the opportunity to mine
                            cryptocurrencies such as Bitcoin, Ethereum, and Litecoin using equipment housed in our data
                            centers and those of our partners. Our team of experienced specialists handles equipment
                            maintenance and customer support, ensuring a secure and reliable service. By using the most
                            efficient hardware, we enhance mining performance while offering some of the most competitive
                            cloud mining plans available on the market.</p>
                        <div class="about-one_options d-flex align-items-center flex-wrap">
                            <a href="signup.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Join Now</span>
                                    <span class="text-two">Join Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="value-one">
        <div class="auto-container">
            <div class="sec-title style-four centered">
                <div class="sec-title_title">Join US</div>
                <h2 class="sec-title_heading">How To Work With MakerZN？</h2>
            </div>
            <div class="row clearfix">

                <div class="value-block_one  col-lg-4 col-md-6 col-sm-12">
                    <div class="value-block_one-inner">
                        <div class="value-block_one-icon">
                            <i class="icon-users-4 fa-fw"></i>
                        </div>
                        <h5 class="value-block_one-title">SIGN UP</h5>
                        <div class="value-block_one-text">Fill in the form and get ready to start mining in under than 1
                            minute</div>
                    </div>
                </div>
                <div class="value-block_one active col-lg-4 col-md-6 col-sm-12">
                    <div class="value-block_one-inner">
                        <div class="value-block_one-icon">
                            <i class="icon-bulb1 fa-fw"></i>
                        </div>
                        <h5 class="value-block_one-title">PURCHASE A CONTRACT</h5>
                        <div class="value-block_one-text">Choose one of the most profitable contracts and start cloud mining
                        </div>
                    </div>
                </div>
                <div class="value-block_one  col-lg-4 col-md-6 col-sm-12">
                    <div class="value-block_one-inner">
                        <div class="value-block_one-icon">
                            <i class="fa-solid fa-bullseye fa-fw"></i>
                        </div>
                        <h5 class="value-block_one-title">GET PAID</h5>
                        <div class="value-block_one-text">Withdraw your mining income on a daily basis to your crypto wallet
                        </div>
                    </div>
                </div>

                <div class="value-one_button text-center">
                    <a href="login.html" class="template-btn btn-style-two">
                        <span class="btn-wrap">
                            <span class="text-one">Join Now</span>
                            <span class="text-two">Join Now</span>
                        </span>
                    </a>
                </div>
            </div>
    </section>


    <section class="testimonial-three">
        <div class="auto-container">
            <div class="sec-title style-four centered">
                <div class="sec-title_title">TESTIMONIALS</div>
                <h2 class="sec-title_heading">What our respectable<br><span>clients says</span></h2>
            </div>

            <div class="three-item_carousel ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">For me, Mashaash is a trustworthy cryptocurrency
                                    mining platform, which is one of the reliable investment channels I have had in the past
                                    few months.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="{{ asset('asset/img/sections/elements/66971cc1e6f731721179329.jpg') }}"
                                            alt="Angelo Dora" />
                                    </div>
                                    Angelo Dora <span>Investor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">This is a company with strong strength. Every time
                                    I invest, they have fulfilled their promises and withdraw money very quickly.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="{{ asset('asset/img/sections/elements/66971e0d792491721179661.jpg') }}"
                                            alt="Carol Micah" />
                                    </div>
                                    Carol Micah <span>Trader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">Great! My life has changed a lot since I learned
                                    about MakerZN. I realized how much help it is to choose a reliable investment platform.
                                </div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="{{ asset('asset/img/sections/elements/66971fbc881ce1721180092.jpg') }}"
                                            alt="Richard Priestley" />
                                    </div>
                                    Richard Priestley <span>Driver</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">My heartfelt tribute to the MakerZN platform
                                    operation team! Every detail reflects their hard work and dedication.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="{{ asset('asset/img/sections/elements/669720949d1911721180308.jpg') }}"
                                            alt="Iris Gracie" />
                                    </div>
                                    Iris Gracie <span>Prof</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">I have to praise the operation team of this
                                    platform! Their work is truly impressive. From the details of the platform, I can feel
                                    the great importance they attach to user experience. The interface design is simple and
                                    elegant, allowing people to browse content happily; the website loads quickly, allowing
                                    people to get the information they need effortlessly; the search function is smart and
                                    efficient, allowing people to quickly find the answers they want. This attention to
                                    detail demonstrates the dedication and professionalism of the operations team</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="{{ asset('asset/img/sections/elements/6697222b778261721180715.jpg') }}"
                                            alt="Madge Stella" />
                                    </div>
                                    Madge Stella <span>Doctor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="three-item_carousel-pagination"></div>
            </div>
        </div>
    </section>

    <section class="clients-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title style-two light centered">
                    <div class="sec-title_title">Our partners</div>
                    <h2 class="sec-title_heading">Our Partners</h2>
                </div>
                <div class="clients-box_one">
                    <div class="animation_mode">
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694af8aba6581721020298.png') }}"
                                    alt="Google" style="border-radius: 4px;" />
                            </a>
                        </div>
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694b94320df21721022787.jpg') }}"
                                    alt="Binance" style="border-radius: 4px;" />
                            </a>
                        </div>
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694afeaa6c6c1721020394.png') }}"
                                    alt="Coinbase" style="border-radius: 4px;" />
                            </a>
                        </div>
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694b02468b591721020452.png') }}"
                                    alt="Yahoo" style="border-radius: 4px;" />
                            </a>
                        </div>
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694b03d6932a1721020477.png') }}"
                                    alt="CoinPedia" style="border-radius: 4px;" />
                            </a>
                        </div>
                        <div class="clients-box">
                            <a href="#">
                                <img src="{{ asset('asset/img/sections/elements/6694b05984b051721020505.png') }}"
                                    alt="YouTube" style="border-radius: 4px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one" style="background-image:url({{ asset('asset/img/icons/cta-icon-1.png') }})">
                </div>
                <div class="cta-icon_two" style="background-image:url({{ asset('asset/img/icons/cta-icon-2.png') }})">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">Start your first mining with <span>MakerZN.</span></h2>
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

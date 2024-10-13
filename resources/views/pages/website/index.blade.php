@extends('layouts.app')
@section('content')
    <section class="slider-one">
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-one_icon"
                        style="
                        background-image: url({{ asset('asset/img/main-slider/icon-1.png') }});
                    ">
                    </div>
                    <div class="slider-one_icon-two"
                        style="
                        background-image: url({{ asset('asset/img/main-slider/icon-1.png') }});
                    ">
                    </div>
                    <div class="slider-one_pattern"
                        style="
                        background-image: url({{ asset('asset/img/main-slider/pattern-1.png') }});
                    ">
                    </div>
                    <div class="slider-one_pattern-two"
                        style="
                        background-image: url({{ asset('asset/img/main-slider/pattern-2.png') }});
                    ">
                    </div>
                    <div class="slider-one_pattern-four"
                        style="
                        background-image: url({{ asset('asset/img/main-slider/pattern-4.png') }});
                    ">
                    </div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-one_content-inner">
                                    <div class="slider-one_title">
                                        👋 {{ setting('site_name') }} makes mining fast &
                                        easy
                                    </div>
                                    <h1 class="slider-one_heading">
                                        Easy Mining,Start With {{ setting('site_name') }}
                                    </h1>
                                    <div class="slider-one_text">
                                        {{ setting('site_name') }} is a leading cloud
                                        mining platform dedicated to
                                        providing users with efficient
                                        and secure mining services.
                                    </div>
                                    <div class="slider-one_button d-flex align-items-center flex-wrap">
                                        <a href="signup.html" class="template-btn btn-style-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">Get Started
                                                    Now</span>
                                                <span class="text-two">Get Started
                                                    Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-one_pattern-three"
                                    style="
                                    background-image: url({{ asset('asset/img/main-slider/pattern-3.png') }});
                                ">
                                </div>
                                <div class="slider-one_image-outer">
                                    <div class="slider-one_image">
                                        <img src="{{ asset('asset/img/sections/elements/66a421888a2691722032520.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">OUR FEATURES</div>
                <h2 class="sec-title_heading">Why Choose {{ setting('site_name') }}?</h2>
            </div>
            <div class="row clearfix">
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-speaker1"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">Newest Hardware</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            We use the newest ASIC miner, GPU rigs. We
                            have extensive experience in cloud mining
                            operations and competitive mining
                            technologies.
                        </div>
                    </div>
                </div>
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-marketing"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">100% Money Security</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            The majority of funds are securely stored in
                            offline, cold wallets. Additionally, robust
                            security measures such as McAfee® SECURE
                            protection and Cloudflare® SECURE protection
                            are implemented.
                        </div>
                    </div>
                </div>
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-users"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">Automated Earning</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            Our system will automatically start running
                            after you place an order, and payouts will
                            be processed every 24 hours.
                        </div>
                    </div>
                </div>
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-copyright"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">Expert Team</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            Our mining team consists of professionals
                            from the blockchain industry and IT
                            engineers, ensuring that our team possesses
                            the necessary knowledge and skills to meet
                            your needs.
                        </div>
                    </div>
                </div>
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-tag"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">EasyMining</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            No hardware is needed as we provide hash
                            power, and the platform takes care of the
                            mining process. All you need to do is
                            purchase a package, relax, and wait for the
                            rewarding profits!
                        </div>
                    </div>
                </div>
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="d-flex align-items-center" style="gap: 10px">
                            <div class="service-block_one-icon">
                                <i class="icon-speaker1"></i>
                            </div>
                            <h5 class="service-block_one-heading m-0">
                                <a href="signup.html">Eco-friendly Minning</a>
                            </h5>
                        </div>
                        <div class="service-block_one-text">
                            Our miners and cooling systems are powered
                            by the best mono crystalline solar panels
                            thus environment-friendly and very
                            profitable.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price-one">
        <div class="price-one_bg"
            style="
            background-image: url({{ asset('asset/img/background/price-bg.png') }});
            position: relative;
            z-index: -1;
        ">
        </div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title title-anim centered">
                    <div class="sec-title_title">Our Plans</div>
                    <h2 class="sec-title_heading">
                        Choose your <span>Plan</span>
                    </h2>
                </div>
                <div class="pricing-tabs tabs-box">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="prod-monthly">
                            <div class="content">
                                <div class="row clearfix">
                                    @foreach ($plans as $item)
                                        <div class="price-block_one style-two active col-lg-4 col-md-6 col-sm-12">
                                            <div class="price-block_one-inner">
                                                <div class="plan-image"
                                                    style="
                                                background-image: url('{{ asset('uploads/plans/' . $item->image) }}');
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
                                                        <a class="template-btn price-one_button"
                                                            href="{{ route('plan', $item->id) }}">
                                                            Invest Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                            <div class="value-one_button text-center">
                                <a href="plans.html" class="template-btn btn-style-two">
                                    <span class="btn-wrap">
                                        <span class="text-one">View All</span>
                                        <span class="text-two">View All</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-one">
        <div class="about-one_pattern"
            style="
            background-image: url({{ asset('asset/img/background/about-pattern.png') }});
        ">
        </div>
        <div class="about-one_icon" style="background-image: url({{ asset('asset/img/icons/about-1.png') }})"></div>
        <div class="about-one_icon-two" style="background-image: url({{ asset('asset/img/icons/about-2.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_tab-outer">
                        <div class="about-one_tab-shadow"
                            style="
                            background-image: url({{ asset('asset/img/background/tab-shadow.png') }});
                        ">
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
                            <h2 class="sec-title_heading">
                                About {{ setting('site_name') }}
                            </h2>
                        </div>
                        <p style="white-space: break-spaces">
                            Established in 2019, {{ setting('site_name') }} has been at the
                            forefront of cryptocurrency cloud mining
                            from the beginning. Our mission is to make
                            cloud mining straightforward, convenient,
                            and accessible to all users. We have built a
                            world-class cloud computing platform,
                            employing cutting-edge deployment technology
                            to cater to a diverse user base. With
                            {{ setting('site_name') }}, you can mine cryptocurrencies from
                            anywhere in the world. Our primary aim is to
                            democratize access to cryptocurrency cloud
                            mining, regardless of an individual&#039;s
                            initial investment, experience, or technical
                            expertise. We provide the opportunity to
                            mine cryptocurrencies such as Bitcoin,
                            Ethereum, and Litecoin using equipment
                            housed in our data centers and those of our
                            partners. Our team of experienced
                            specialists handles equipment maintenance
                            and customer support, ensuring a secure and
                            reliable service. By using the most
                            efficient hardware, we enhance mining
                            performance while offering some of the most
                            competitive cloud mining plans available on
                            the market.
                        </p>
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

    <section class="choose-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title light centered">
                    <div class="sec-title_title">WHY CHOSE US</div>
                    <h2 class="sec-title_heading">
                        Reason to chose our<br /><span>platform</span>
                    </h2>
                </div>
                <div class="row clearfix">
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fa-brands fa-instagram fa-fw"></div>
                            <div class="counter-block_one-text">
                                Advanced Technology and Facilities:
                                {{ setting('site_name') }} has a world-class cloud
                                computing platform and the most advanced
                                equipment deployment technology to
                                ensure mining efficiency and stability.
                                Our data centers and partner computing
                                centers are equipped with the best
                                quality equipment to provide you with
                                stable and efficient mining services.
                            </div>
                        </div>
                    </div>
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fa-brands fa-instagram fa-fw"></div>
                            <div class="counter-block_one-text">
                                Comprehensive technical support: Our
                                team of experts provides comprehensive
                                technical support and equipment
                                maintenance services to ensure your
                                mining operations are safe and reliable.
                                Whether you are technically experienced
                                or not, we are committed to providing
                                you with quality customer support so
                                that you can mine with confidence.
                            </div>
                        </div>
                    </div>
                    <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="counter-block_one-icon fas fa-heart fa-fw"></div>
                            <div class="counter-block_one-text">
                                Competitive pricing and transparent fee
                                structure: {{ setting('site_name') }}&#039;s cloud mining
                                plans are competitively priced and have
                                a transparent fee structure with no
                                hidden fees. We are committed to
                                providing users with the most
                                cost-effective cloud mining solutions,
                                allowing you to get the most mining
                                benefits in the market.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="answer-one">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="answer-one_title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="answer-one_title-outer">
                        <div class="sec-title title-anim">
                            <div class="sec-title_title">
                                Referral Program
                            </div>
                            <h2 class="sec-title_heading">
                                Our affiliate program offers a variety
                                of benefits.
                            </h2>
                        </div>
                        <ul class="answer-one_list">
                            <li>
                                <i class="fa-solid fa-check fa-fw"></i>You can become an affiliate and take
                                advantage of our program even without
                                making a deposit.
                            </li>
                            <li>
                                <i class="fa-solid fa-check fa-fw"></i>For each purchase made by a user
                                referred by you, you will receive a
                                generous referral reward of up to
                                1-3.5%.
                            </li>
                            <li>
                                <i class="fa-solid fa-check fa-fw"></i>We provide instant payouts of referral
                                rewards in cryptocurrency, which are
                                credited to your account balance.
                            </li>
                            <li>
                                <i class="fa-solid fa-check fa-fw"></i>There are no limits to the number of
                                referrals you can bring in, so your
                                earning potential is boundless.
                            </li>
                        </ul>
                        <div class="answer-one_button">
                            <a href="affiliates.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Know More</span>
                                    <span class="text-two">Know More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="answer-one_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="answer-one_content-outer">
                        <div class="answer-one_pattern"
                            style="
                            background-image: url({{ asset('asset/img/background/faq-shadow.png') }});
                        ">
                        </div>
                        <div class="answer-one_image">
                            <img src="{{ asset('asset/img/resource/answer.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-one style-four">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="faq-one_title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="faq-one_title-outer">
                        <div class="sec-title style-four">
                            <div class="sec-title_title">
                                YOU HAVE QUESTIONS
                            </div>
                            <h2 class="sec-title_heading">
                                Frequently Asked <span>Questions</span>
                            </h2>
                            <div class="sec-title_text">
                                We answer some of your Frequently Asked
                                Questions regarding our platform. If you
                                have a query that is not answered here,
                                Please feel free to contact us.
                            </div>
                        </div>
                        <div class="faq-one_button">
                            <a href="contact.html" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact now</span>
                                    <span class="text-two">Contact now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                    <div class="faq-one_accordian-outer">
                        <ul class="accordion-box_two">
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    What is {{ setting('site_name') }}?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            {{ setting('site_name') }} is a leading
                                            cryptocurrency investment
                                            firm founded in the UK in
                                            2019. Our website and mobile
                                            cloud mining platform are
                                            trusted by millions of users
                                            worldwide, providing the
                                            most efficient way to earn
                                            bitcoin. As a regulated
                                            mining company, we share our
                                            computational resources for
                                            crypto mining without
                                            requiring users to buy
                                            expensive mining equipment
                                            or GPUs. Our process is
                                            simple and accessible to
                                            everyone, with a proven
                                            track record of delivering
                                            daily income with complete
                                            transparency. Customers
                                            trust us for our commitment
                                            to security and reliability
                                            in cryptocurrency mining.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    Is {{ setting('site_name') }} legal?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <div>
                                                {{ setting('site_name') }} is a legitimate
                                                and secure cloud mining
                                                platform that lets you
                                                earn income with minimal
                                                investments. Founded on
                                                solid principles, our
                                                skilled team specializes
                                                in areas like ASIC
                                                mining and blockchain
                                                technology. We aim to
                                                provide a smooth
                                                investment experience,
                                                making crypto cloud
                                                mining accessible to
                                                everyone, regardless of
                                                expertise.
                                            </div>
                                            <div>
                                                We protect your data
                                                with EV SSL encryption,
                                                ensuring confidentiality
                                                and security. Our
                                                servers are secured
                                                against DDoS attacks,
                                                allowing safe access
                                                from anywhere in the
                                                world. With {{ setting('site_name') }}, you
                                                can trust that you are
                                                engaging in a secure and
                                                efficient crypto mining
                                                experience.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    How can I earn passive income with
                                    cloud mining?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            To earn passive income
                                            through cloud mining on
                                            {{ setting('site_name') }}, simply register and
                                            choose your mining contract.
                                            You don’t need to invest in
                                            additional equipment like
                                            crypto mining machines or
                                            possess technical skills;
                                            just rent a miner and start
                                            earning daily passive income
                                            effortlessly. Our platform
                                            offers an easy path to
                                            cryptocurrency mining,
                                            including popular options
                                            like Bitcoin, Ethereum, and
                                            Litecoin. With {{ setting('site_name') }}, you
                                            can take advantage of a
                                            secure and efficient way to
                                            mine cryptocurrencies and
                                            enjoy hassle-free earnings.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    Is it possible to earn money without
                                    investing?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <div>
                                                Yes! Join our profitable
                                                referral program and
                                                earn up to 6% lifetime
                                                commission with no
                                                upfront investment. Just
                                                refer others and let
                                                crypto cloud mining do
                                                the rest.
                                            </div>
                                            <div>
                                                With unlimited
                                                referrals, your earning
                                                potential is limitless.
                                                Promote our platform on
                                                social media or your
                                                website without needing
                                                cryptocurrency mining
                                                machines or coin mining
                                                equipment.
                                            </div>
                                            <div>
                                                Take control of your
                                                financial future with
                                                minimal risk. Join our
                                                referral program now and
                                                start earning through
                                                cloud mining, a secure
                                                way to profit!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    Which payment system can I use to
                                    pay?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <div>
                                                At {{ setting('site_name') }}, we only
                                                accept payments in
                                                cryptocurrency. Our
                                                platform supports
                                                popular digital
                                                currencies, including
                                                BTC, LTC, ETH, DOGE,
                                                BCH, BNB, and USDT. This
                                                aligns with our vision
                                                for enhanced cloud
                                                mining solutions.
                                            </div>
                                            <div>
                                                We do not accept credit
                                                cards or PayPal at this
                                                time. Using
                                                cryptocurrencies ensures
                                                secure transactions with
                                                lower fees, helping to
                                                boost your mining
                                                profits. Whether you’re
                                                involved in cloud-based
                                                mining or investing in
                                                the newest crypto coins,
                                                our payment system
                                                simplifies the process,
                                                making it easy to start
                                                mining operations with
                                                {{ setting('site_name') }}.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    When will my daily mining profits be
                                    settled?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">Your daily mining
                                                    profits from our
                                                    cloud mining
                                                    operations will be
                                                    settled every 24
                                                    hours after you
                                                    purchase your mining
                                                    contract. This
                                                    timely settlement
                                                    ensures that you can
                                                    track your mining
                                                    profits efficiently
                                                    and enjoy the
                                                    benefits of your
                                                    investment in
                                                    real-time. With our
                                                    reliable
                                                    cryptocurrency
                                                    mining platform, you
                                                    can rest assured
                                                    that your earnings
                                                    will be processed
                                                    promptly, regardless
                                                    of whether you are
                                                    mining Bitcoin,
                                                    Ethereum, or other
                                                    popular coins.</font>
                                            </p>
                                            <p>
                                                <font color="#ffffff">Stay updated on
                                                    your crypto mining
                                                    earnings and take
                                                    full advantage of
                                                    the best crypto
                                                    mining opportunities
                                                    available to boost
                                                    your profitability
                                                    mining.</font>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    What&#039;s the minimum deposit and
                                    withdrawal?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">The minimum deposit
                                                    and withdrawal
                                                    amount is $200. This
                                                    allows users to
                                                    easily access our
                                                    cloud mining
                                                    platform and begin
                                                    their cryptocurrency
                                                    mining journey
                                                    without a large
                                                    upfront investment.
                                                    Starting with this
                                                    amount enables you
                                                    to explore various
                                                    crypto mining
                                                    opportunities and
                                                    earn profits from
                                                    newest crypto
                                                    coins.</font>
                                            </p>
                                            <p>
                                                <font color="#ffffff">Our simple deposit
                                                    and withdrawal
                                                    process ensures
                                                    effective management
                                                    of your mining
                                                    operations with our
                                                    reliable mining
                                                    company.</font>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    How to withdraw earned profits?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">To withdraw your
                                                    earnings from our
                                                    cloud mining
                                                    platform, simply go
                                                    to the Withdraw
                                                    section in your
                                                    Dashboard. Enter
                                                    your crypto wallet
                                                    address and the
                                                    amount you want to
                                                    withdraw. Ensure it
                                                    does not exceed your
                                                    balance, with a
                                                    minimum withdrawal
                                                    of $200. Your
                                                    request will be
                                                    processed within 30
                                                    minutes, and funds
                                                    will be sent to the
                                                    provided wallet
                                                    address.</font>
                                            </p>
                                            <p>
                                                <font color="#ffffff">Verify your wallet
                                                    address is valid;
                                                    otherwise, the
                                                    withdrawal will be
                                                    blocked. This simple
                                                    process allows you
                                                    to manage your
                                                    mining profits and
                                                    securely access
                                                    funds from your
                                                    crypto mining
                                                    operations.</font>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    What is the withdrawal fee?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">You can enjoy our
                                                    cloud mining
                                                    services without any
                                                    maintenance or
                                                    deposit fees.
                                                    However, please be
                                                    aware of transaction
                                                    fees associated with
                                                    withdrawals, which
                                                    vary based on the
                                                    specific blockchain
                                                    used for processing.
                                                    The minimum
                                                    withdrawal amount is
                                                    $200. With our clear
                                                    fee structure, you
                                                    can manage your
                                                    earnings confidently
                                                    while optimizing
                                                    your crypto mining
                                                    profits from popular
                                                    cryptocurrencies.</font><br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    Can I download the APP?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">Yes! You can easily
                                                    download our app by
                                                    clicking the [APP]
                                                    link in the
                                                    navigation bar at
                                                    the top of our
                                                    homepage. This app
                                                    allows you to access
                                                    our cloud mining
                                                    platform
                                                    conveniently from
                                                    your mobile device,
                                                    enabling you to
                                                    manage your crypto
                                                    mining activities on
                                                    the go. Enjoy
                                                    features that
                                                    enhance your
                                                    cryptocurrency
                                                    mining experience
                                                    right from your
                                                    smartphone!</font><br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    How to use the referral program?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">At {{ setting('site_name') }}, our
                                                    referral program
                                                    assigns every user a
                                                    personal referral
                                                    link. Share your
                                                    link to earn up to
                                                    6% commission on
                                                    investments made by
                                                    your referrals in
                                                    cloud mining. Every
                                                    new user who
                                                    registers through
                                                    your link becomes
                                                    your referral for
                                                    life, allowing you
                                                    to earn commissions
                                                    on all their future
                                                    cryptocurrency
                                                    mining
                                                    investments.</font>
                                            </p>
                                            <p>
                                                <font color="#ffffff">This offers an easy
                                                    way to mine
                                                    cryptocurrencies
                                                    without any upfront
                                                    costs. Start
                                                    generating passive
                                                    income and maximize
                                                    your gains through
                                                    our mining platform.
                                                    Sign up today, share
                                                    your referral link,
                                                    and capitalize on
                                                    your network!</font>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <span class="icon icon-plus fa-solid fa-plus fa-fw"></span>
                                    </div>
                                    How can I contact {{ setting('site_name') }}&#039;s
                                    customer support for additional
                                    queries?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>
                                                <font color="#ffffff">You can easily
                                                    reach {{ setting('site_name') }}'s
                                                    customer support
                                                    through our 24/7
                                                    chat feature
                                                    available on our
                                                    website. A chat
                                                    window will pop up
                                                    in the bottom right
                                                    corner of your
                                                    screen, providing
                                                    instant access to
                                                    assistance. If you
                                                    prefer written
                                                    communication, you
                                                    can email us at
                                                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                                        data-cfemail="b6c5c3c6c6d9c4c2f6fbd7c5fed7c5de98d8d3c2">[email&#160;protected]</a>
                                                    for any questions
                                                    about our cloud
                                                    mining services,
                                                    crypto mining, or
                                                    profitability
                                                    mining. Our team is
                                                    dedicated to
                                                    offering reliable
                                                    support and ensuring
                                                    your experience with
                                                    our crypto cloud
                                                    mining platform is
                                                    seamless!
                                                </font><br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price-two style-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title style-three centered">
                    <div class="sec-title_title">
                        Latest Transactions
                    </div>
                </div>
                <div class="pricing-tabs tabs-box">
                    <div class="buttons-outer">
                        <ul class="tab-buttons clearfix">
                            <li data-tab="#tab1" class="tab-btn active-btn">
                                Top Deposits
                            </li>
                            <li data-tab="#tab2" class="tab-btn sd">
                                Top Withdraws
                            </li>
                        </ul>
                    </div>

                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab1" style="display: block">
                            <div class="members-carousel swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/BNB.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                jord********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    21.68015114
                                                </span>
                                                BNB
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                Sogo********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    12,984.00
                                                </span>
                                                USDT-TRC20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/DOGE.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                jale********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    127,218.71512656
                                                </span>
                                                DOGE
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/BNB.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                Sabo********@yahoo.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    32.25103290
                                                </span>
                                                BNB
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                holl********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    1,219.00000000
                                                </span>
                                                USDT-BEP20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                hunt********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    1,295.00
                                                </span>
                                                USDT-ERC20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                Lele********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    10,760.00
                                                </span>
                                                USDT-TRC20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/ETH.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                akee********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    3.51669680
                                                </span>
                                                ETH
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab bdq" id="tab2" style="display: block">
                            <div class="members-carousel swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                1mar********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    3,589.00
                                                </span>
                                                USDT-BEP20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                toml********@hotmail.co.uk
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    4,072.00
                                                </span>
                                                USDT-BEP20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/LTC.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                jram********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    264.64296586
                                                </span>
                                                LTC
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/BCH.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                kwil********@yahoo.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    14.84405780
                                                </span>
                                                BCH
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/DOGE.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                chri********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    102,751.44080578
                                                </span>
                                                DOGE
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                Ambe********@gmail.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    3,797.00
                                                </span>
                                                USDT-TRC20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/USDT.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                chri********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    9,264.00
                                                </span>
                                                USDT-BEP20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="member-block_one d-flex flex-column align-items-center">
                                            <div class="member-block_one-inner"
                                                style="
                                                width: 150px !important;
                                            ">
                                                <div class="member-block_one-image d-flex justify-content-center w-100">
                                                    <img src="{{ asset('asset/img/crypto/coins/LTC.png') }}"
                                                        alt=""
                                                        style="
                                                        width: 50px;
                                                        filter: grayscale(
                                                            0%
                                                        );
                                                        border-radius: 20px;
                                                    " />
                                                </div>
                                            </div>
                                            <h6 class="text-center" style="color: #fff">
                                                krit********@icloud.com
                                            </h6>
                                            <h6 class="text-center" style="color: #fff">
                                                <span class="main_color">
                                                    151.11571412
                                                </span>
                                                LTC
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bdq {
            visibility: hidden;
            height: 0;
        }

        .member-block_one-image::before {
            content: none;
        }
    </style>

    <section class="testimonial-one">
        <div class="auto-container">
            <div class="inner-container"
                style="
                background-image: url({{ asset('asset/img/background/testimonial-one_bg.png') }});
            ">
                <div class="sec-title centered">
                    <div class="sec-title_title">TESTIMONIALS</div>
                    <h2 class="sec-title_heading">
                        What our respectable<br /><span>clients says</span>
                    </h2>
                </div>
                <div class="three-item_carousel swiper-container">
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
                                    <div class="testimonial-block_one-text">
                                        For me, Mashaash is a
                                        trustworthy cryptocurrency
                                        mining platform, which is one of
                                        the reliable investment channels
                                        I have had in the past few
                                        months.
                                    </div>
                                    <div class="testimonial-block_one-author_box">
                                        <div class="testimonial-block_one-author-image">
                                            <img src="{{ asset('asset/img/sections/elements/66971cc1e6f731721179329.jpg') }}"
                                                alt="Angelo Dora" />
                                        </div>
                                        Angelo Dora
                                        <span>Investor</span>
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
                                    <div class="testimonial-block_one-text">
                                        This is a company with strong
                                        strength. Every time I invest,
                                        they have fulfilled their
                                        promises and withdraw money very
                                        quickly.
                                    </div>
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
                                    <div class="testimonial-block_one-text">
                                        Great! My life has changed a lot
                                        since I learned about {{ setting('site_name') }}. I
                                        realized how much help it is to
                                        choose a reliable investment
                                        platform.
                                    </div>
                                    <div class="testimonial-block_one-author_box">
                                        <div class="testimonial-block_one-author-image">
                                            <img src="{{ asset('asset/img/sections/elements/66971fbc881ce1721180092.jpg') }}"
                                                alt="Richard Priestley" />
                                        </div>
                                        Richard Priestley
                                        <span>Driver</span>
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
                                    <div class="testimonial-block_one-text">
                                        My heartfelt tribute to the
                                        {{ setting('site_name') }} platform operation team!
                                        Every detail reflects their hard
                                        work and dedication.
                                    </div>
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
                                    <div class="testimonial-block_one-text">
                                        I have to praise the operation
                                        team of this platform! Their
                                        work is truly impressive. From
                                        the details of the platform, I
                                        can feel the great importance
                                        they attach to user experience.
                                        The interface design is simple
                                        and elegant, allowing people to
                                        browse content happily; the
                                        website loads quickly, allowing
                                        people to get the information
                                        they need effortlessly; the
                                        search function is smart and
                                        efficient, allowing people to
                                        quickly find the answers they
                                        want. This attention to detail
                                        demonstrates the dedication and
                                        professionalism of the
                                        operations team
                                    </div>
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
        </div>
    </section>

    <section class="news-one" style="padding-bottom: 20px">
        <div class="news-one_shadow"
            style="
            background-image: url({{ asset('asset/img/background/news-shadow-1.png') }});
        ">
        </div>
        <div class="news-one_shadow-two"
            style="
            background-image: url({{ asset('asset/img/background/news-shadow-2.png') }});
        ">
        </div>
        <div class="auto-container">
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">OUR BLOG</div>
                <h2 class="sec-title_heading">Read Our Latest Blogs</h2>
            </div>
            <div class="three-item_carousel swiper-container">
                <div class="swiper-wrapper"></div>
                <div class="three-item_carousel-pagination"></div>
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

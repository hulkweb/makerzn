@extends('layouts.app')
@section('content')
    <script>
        const menu = "";
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
            <h2>Sign Up</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>Sign Up</li>
            </ul>
        </div>
    </section>

    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Registration</h3>
                <div class="text">
                    Your email address will not be published.
                </div>

                <div class="register-form">
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="tjCHecAr4lofShpXqC1sASXZheYnWYC2bBjrtmCe" />
                        <div class="form-group">
                            <label>Username*</label>
                            <input type="text" name="username" value="" required />
                        </div>

                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" name="email" value="" required />
                        </div>

                        <div class="form-group">
                            <label>Password*</label>
                            <input type="password" name="password" required />
                        </div>

                        <div class="form-group">
                            <label>Repeat Password*</label>
                            <input type="password" name="password_repeat" required />
                        </div>

                        <div class="form-group">
                            <label>Referral Code (Optional)</label>
                            <input type="text" name="ref_code" value="" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Register now</span>
                                    <span class="text-two">Register now</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">
                                Already have a account?
                                <a href="signin.html">Login Now</a>
                            </div>
                        </div>
                    </form>
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

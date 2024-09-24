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
            <h2>Sign In</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home">Home</a></li>
                <li>Sign In</li>
            </ul>
        </div>
    </section>

    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Login</h3>
                <div class="text">
                    Your email address will not be published.
                </div>

                <div class="register-form">
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="JNEEkyNpxqVrEe9LNE1fBWHHuwkuO1kHHKRe1aNr" />
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" id="email" name="email" value="" required />
                        </div>

                        <div class="form-group">
                            <label>Password*</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-end align-items-center flex-wrap">
                                <a class="forgot-psw" href="auth-re-password">Forget Password?</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Login now</span>
                                    <span class="text-two">Login now</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">
                                Don’t have account?
                                <a href="signup">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

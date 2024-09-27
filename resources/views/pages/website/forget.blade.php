@extends('layouts.app')
@section('content')
    <script>
        const menu = ''
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
            <h2>Forget Password?</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>Forget Password?</li>
            </ul>
        </div>
    </section>

    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Forget Password</h3>
                <div class="text">Enter your Email to reset your password</div>

                <div class="register-form">
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="tjCHecAr4lofShpXqC1sASXZheYnWYC2bBjrtmCe">
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" id="email" name="email" required />
                        </div>

                        <div class="form-group code_send">
                            <label>Verification Code*</label>
                            <input type="text" name="code" required />
                            <button class="send_code submit-btn" type="button" id="reset_password_guest"><span
                                    class="btn-wrap">Send Code</button>
                        </div>

                        <div class="form-group">
                            <label>New Password*</label>
                            <input type="password" name="password" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">CHANGE PASSWORD</span>
                                    <span class="text-two">CHANGE PASSWORD</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">Remember password? <a href="{{ route('login') }}">Sign In</a></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

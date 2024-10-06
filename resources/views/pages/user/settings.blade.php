@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "settings";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="d-flex align-items-center">
            <a href="#">
                <div class="user-title modify-title modify-active">
                    Payment Password
                </div>
            </a>
            <a href="{{ env('APP_URL') }}settings/account/password">
                <div class="user-title modify-title">Login Password</div>
            </a>
        </div>

        <div class="content-block">
            <div class="block-d">
                <div class="cont mb-4">
                    <h4>Payment Password Modification</h4>
                    <h6 style="color: rgb(163, 163, 163)">
                        Modify your Payment Password
                    </h6>
                </div>

                <form action="{{ env('APP_URL') }}settings/modify/payment/password" method="POST">
                    <input type="hidden" name="_token" value="hSKmz6UzIqOFmsAs6Rceh3fIv5kFPn2CzEisGaPV" />
                    <div class="row" style="row-gap: 20px">
                        <div class="col-6">
                            <div class="form-group code_send">
                                <label>Verification Code</label>
                                <input type="number" name="code" class="form-c w-100"
                                    placeholder="Mail Verification Code" required />
                                <button class="send_code submit-btn" type="button" id="reset_payment_password"
                                    style="top: 33px">
                                    <span class="btn-wrap">Send Code</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>New Payment Password</label>
                                <input type="password" name="password" class="form-c w-100"
                                    placeholder="Enter your new Payment Password" required />
                                <label class="mt-2" style="text-align: right">Default Payment Password: 123456</label>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button class="template-btn btn-style-three mt-5 w-100 d-flex justify-content-center"
                            style="max-width: 200px">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="content-block">
            <div class="blog-detail">
                <blockquote>
                    <div class="blockquote_bg"
                        style="
                        background-image: url({{ env('APP_URL') }}asset/img/background/blockquote-bg.png);
                        background-size: cover;
                    ">
                    </div>
                    Do you have any Questions?
                    <p class="w-50">
                        We strongly recommend that you search for the
                        necessary information in the FAQ section. Contact
                        our 24-hour online customer service if you need
                        advice or technical assistance.
                    </p>
                    <a href="{{ route('faq') }}" class="template-btn btn-style-two" style="padding: 13px 34px">
                        <span class="btn-wrap p-0">
                            <span class="text-one p-0">Get Support Now</span>
                            <span class="text-two p-0">Get Support Now</span>
                        </span>
                    </a>
                </blockquote>
            </div>
        </div>
    </div>
@endsection

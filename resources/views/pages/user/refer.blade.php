@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "referrals";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="content-block">
            <div class="header-top p-4" style="border-radius: 9px">
                <div class="text" style="text-align: left">
                    <h5 style="color: #fff">Referral Program</h5>
                    Share the website to others. You'll get extra 3% as
                    bonus of their purchase on each or
                </div>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4 mb-3">My Referral Link</h4>
            <div class="row">
                <div class="col-7">
                    <div class="block-d">
                        <input type="text" class="form-c w-100 text-center copyd" readonly
                            value="https://mashash.com/signup?ref=A5KEKW" />
                        <div class="w-100 d-flex justify-content-center mt-3">
                            <a href="#" id="copyButton" class="template-btn btn-style-three"
                                style="padding: 13px 34px">
                                <span class="btn-wrap p-0">
                                    <span class="text-one p-0">Copy</span>
                                    <span class="text-two p-0">Copy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="block-d h-100 align-items-center d-flex justify-content-center"
                        style="flex-direction: column">
                        <h5 class="text-center main_color">
                            Your Partners
                        </h5>
                        <h4 class="text-center mt-2">0</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <h4 class="main_color mt-4">Referral List</h4>
            <div class="w-100 overflow-auto p-0">
                <table class="table c-table chat-box ai-speech bg-flashlight mt-4">
                    <thead>
                        <tr>
                            <th scope="col" class="col-4">Email</th>
                            <th scope="col" class="col-3">Join Date</th>
                            <th scope="col" class="col">Last login</th>
                        </tr>
                    </thead>
                    <tbody id="body_table">
                        <td class="text-center no-data-table" colspan="100%">
                            No data found
                        </td>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="content-block">
            <div class="blog-detail">
                <blockquote>
                    <div class="blockquote_bg"
                        style="
                        background-image: url(https://mashash.com/asset/img/background/blockquote-bg.png);
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
                    <a href="https://mashash.com/faq" class="template-btn btn-style-two" style="padding: 13px 34px">
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

@extends('layouts.user')
@section('content')
    <script>
        const menu3 = "orders";
        if (document.getElementById(menu3)) {
            document.getElementById(menu3).classList.add("act");
        }
    </script>

    <div class="page-right">
        <div class="content-block">
            <h4 class="main_color mb-2">My Orders</h4>

            <div class="w-100 overflow-auto p-0 m-0">
                <table class="table c-table chat-box ai-speech bg-flashlight mt-4">
                    <thead>
                        <tr>
                            <th scope="col" class="col">Time</th>
                            <th scope="col" class="col">Status</th>
                            <th scope="col" class="col">Plan</th>
                            <th scope="col" class="col">Period</th>
                            <th scope="col" class="col">Amount</th>
                            <th scope="col" class="col">Received</th>
                            <th scope="col" class="col">Next Payment</th>
                        </tr>
                    </thead>
                    <tbody id="body_table">
                        <td class="text-center no-data-table" colspan="100%">
                            No data found
                        </td>
                    </tbody>
                </table>
            </div>
            <div class="un_table"></div>
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
